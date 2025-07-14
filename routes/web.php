<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login.index');
})->name('login.index');

Route::get('/lobby', function (){
    return view('lobby');
})->name('lobby');

Route::post('/auth', [LoginController::class,'authUser'])->name('login.auth');
Route::post('/logout', [LoginController::class,'logoutUser'])->name('login.logout');




