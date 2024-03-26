<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/login');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Route::middleware(['admin'])->group(function () {
// });
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/logout', [LoginController::class, 'logout']);
Route::get('/admin/users', [AdminController::class, 'showUsers']);

Route::resource('/vote', VoteController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')
;

Route::post('/login', [LoginController::class, 'auth']);