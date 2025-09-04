<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Income;

class CardTotal extends Component
{
    public function render()
    {
        $incomeTotal = $this->getIncomesTotal();
        return view('livewire.card-total',["incomeTotal" => $incomeTotal]);
    }

    public function getIncomesTotal(){
        $query = Income::query();
        $incomeTotal = $query->sum('value');
        return $incomeTotal;

    }
}
