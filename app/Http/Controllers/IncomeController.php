<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function showIncome(){
        return view('income.index');
    }
}
