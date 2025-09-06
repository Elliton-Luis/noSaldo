<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function showGoals(){
        return view('goals.index');
    }
}
