<?php

namespace App\Livewire\Incomes;

use Livewire\Component;

use App\Models\Income;

use Livewire\Attributes\On;

class CardIncomes extends Component
{

    public function render()
    {
        $incomes = $this->getIncomes();
        return view('livewire.incomes.card-incomes',['incomes'=>$incomes]);
    }

    #[On('storeIncome')]
    public function getIncomes(){
        $query = Income::query();
        $query->where('user_id',auth()->user()->id);
        return $query->paginate(9);
    }
}
