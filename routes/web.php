<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IncomeController;

Route::get('/', function () {
    return view('login.index');
})->name('login.index');

Route::get('/lobby', function (){
    return view('lobby');
})->name('lobby');

Route::post('/auth', [LoginController::class,'authUser'])->name('login.auth');
Route::post('/logout', [LoginController::class,'logoutUser'])->name('login.logout');

Route::prefix('/entrada')->group( function(){
    Route::get('/',[IncomeController::class,'showIncome'])->name('income.index');
});




