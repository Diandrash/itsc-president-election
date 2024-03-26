<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use \Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreVoteRequest;
use App\Http\Requests\UpdateVoteRequest;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vote');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoteRequest $request)
    {
        // return $request;
        // return 1;
        $validatedData = $request->validate([
            'user_id' => 'required|max:3',
            'candidate_id' => 'required|max:1',
        ]);
    
        // Simpan vote ke dalam tabel votes
        Vote::create($validatedData);
    
        // Ubah atribut already_vote menjadi 1 untuk pengguna yang sesuai
        $user = User::find($validatedData['user_id']);
        $user->already_vote = 1;
        $user->save();
    
        // Lakukan logout
        Auth::logout();
    
        Alert::success('Hore!', 'Berhasil Vote');
        return redirect()->intended('/login')->with('VoteSuccess', 'VoteSuccess');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoteRequest $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
