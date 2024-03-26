<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    function index () {
        return view('login');
    }

    // public function auth(Request $request)
    // {
    //     // return $request;
    //     $credentials = $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    
    //     if (Auth::attempt($credentials)) {
    //         // Pengguna berhasil login, sekarang cek already_vote
    //         $user = Auth::user();
    //         if ($user->already_vote == 1) {
    //             Auth::logout(); // Keluarkan pengguna jika sudah melakukan vote
    //             return back()->with('LoginError', 'Anda sudah melakukan vote dan tidak dapat login kembali.');
    //         }
    
    //         $request->session()->regenerate();
            
    //         return redirect('/home')->with('LoginSuccess', 'LoginSuccess'); // Redirect ke halaman setelah login sukses
    //     }
    
    //     return back()->with('LoginError', 'Error');
    // }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'token' => 'required'
        ]);
    
        // Cari pengguna berdasarkan username
        $user = User::where('username', $credentials['username'])->first();
    
        if (!$user) {
            return back()->with('LoginError', 'User not found.');
        }
    
        // Pengecekan already_vote
        if ($user->already_vote == 1) {
            Alert::error('Gagal', 'Kamu sudah melakukan Vote!');
            return back()->with('LoginError', 'You have already voted.'); // Pengguna sudah melakukan vote
        }
    
        // Selanjutnya, periksa apakah token yang dimasukkan oleh pengguna sesuai dengan token yang ada dalam database
        if ($user->token === $credentials['token']) {
            // Autentikasi berhasil, masukkan pengguna ke dalam sesi
            Auth::login($user);
    
            // Regenerasi sesi
            $request->session()->regenerate();
    
            // Periksa apakah pengguna adalah admin
            if ($user->fullname == 'admin' || $user->username == 'admin') {
                return redirect()->intended('/admin')->with('LoginSuccess', 'Berhasil Login');
            } else {
                return redirect()->intended('/home')->with('LoginSuccess', 'Berhasil Login');
            }
        } else {
            return back()->with('LoginError', 'Invalid username or token.'); // Tampilkan pesan kesalahan jika username atau token tidak sesuai
        }
    }
    
    
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('logout', 'logout');
    }
    
}
