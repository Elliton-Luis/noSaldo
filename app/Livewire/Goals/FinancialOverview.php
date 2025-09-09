<?php

namespace App\Livewire\Goals;

use Livewire\Component;
use App\Models\Goal;
use App\Models\Income;
use App\Models\Expense;

use Livewire\Attributes\On;

class FinancialOverview extends Component
{
    public $user;

    public function mount(){
        $this->user = auth()->user()->id;
    }

    public function render()
    {
        $goals = $this->getGoals();
        $totalBalance = $this->getBalance();
        return view('livewire.goals.financial-overview',['goals'=>$goals,'totalBalance'=>$totalBalance]);
    }
    #[On('goalChange')]
    public function getGoals(){
        $query = Goal::query();
        return $query->where('user_id',$this->user)->paginate(10);
    }

    public function getBalance(){
        $income = Income::where('user_id',$this->user)->sum('value');
        $expense = Expense::where('user_id',$this->user)->sum('value');
        $totalBalance = $income-$expense;

        return $totalBalance;
    }
}
