<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GoalsController;

Route::get('/', function () {
    return view('login.index');
})->name('login.index');

Route::get('/lobby', function (){
    return view('lobby');
})->name('lobby');

Route::post('/auth', [LoginController::class,'authUser'])->name('login.auth');
Route::get('/logout', [LoginController::class,'logoutUser'])->name('login.logout');

Route::prefix('/receitas')->group( function(){
    Route::get('/',[IncomeController::class,'showIncome'])->name('income.index');
});

Route::prefix('/despesas')->group( function(){
    Route::get('/',[ExpenseController::class,'showExpense'])->name('expense.index');
});

Route::get('/metas', [GoalsController::class,'showGoals'])->name('goals.index');




