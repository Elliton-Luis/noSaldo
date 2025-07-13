<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('login.index');
});

Route::post('/auth', [loginController::class,'loginUser'])->name('login.auth');

Route::get('/lobby', function (){
    return view('lobby');
});

