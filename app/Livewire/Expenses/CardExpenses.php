<?php

namespace App\Livewire\Expenses;

use Livewire\Component;
use App\Models\Expense;

use Livewire\Attributes\On;


class CardExpenses extends Component
{
    public function render()
    {
        $expenses = $this->getExpenses();
        return view('livewire.expenses.card-expenses',['expenses'=>$expenses]);
    }

    #[On('storeExpense')]
    public function getExpenses(){
        $query = Expense::query();
        $query->where('user_id',auth()->user()->id);
        return $query->paginate(9);
    }
}
