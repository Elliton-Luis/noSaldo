<?php

namespace App\Livewire\Expenses;

use Livewire\Component;
use App\Models\Expense;

class CardExpenses extends Component
{
    public function render()
    {
        $expenses = $this->getExpenses();
        return view('livewire.expenses.card-expenses',['expenses'=>$expenses]);
    }

    public function getExpenses(){
        $query = Expense::query();
        $query->where('user_id',auth()->user()->id);
        return $query->paginate(9);
    }
}
