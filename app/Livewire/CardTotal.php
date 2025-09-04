<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Income;

class CardTotal extends Component
{
    public function render()
    {
        $totalIncome = $this->getIncomesTotal();
        $totalExpense = $this->getExpensesTotal();
        $percTotal = $this->percentTotal();

        return view('livewire.card-total',['totalIncome' => $totalIncome,'totalExpense' => $totalExpense,'percTotal'=>$percTotal]);
    }

    public function getIncomesTotal(){
        $query = Income::query();
        $totalIncome = $query->sum('value');
        return $totalIncome;

    }

    public function getExpensesTotal(){
        $query = Expense::query();
        $totalExpense = $query->sum('value');
        return $totalExpense;

    }

    public function percentTotal(){
        $totalIncome = $this->getIncomesTotal();
        $totalExpense = $this->getExpensesTotal();

        if($totalExpense == 0){
            return 0;
        }
        $percTotal = ($totalExpense/$totalIncome);
        return $percTotal;
    }
}
