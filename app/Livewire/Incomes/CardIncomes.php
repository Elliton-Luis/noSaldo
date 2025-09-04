<?php

namespace App\Livewire\Incomes;

use Livewire\Component;

use App\Models\Income;

class CardIncomes extends Component
{

    public function render()
    {
        $incomes = $this->getIncomes();
        return view('livewire.incomes.card-incomes',['incomes'=>$incomes]);
    }

    public function getIncomes(){
        $query = Income::query();
        return $query->paginate(9);
    }
}
