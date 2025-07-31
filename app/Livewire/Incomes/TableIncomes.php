<?php

namespace App\Livewire\Incomes;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Income;

class TableIncomes extends Component
{

    use WithPagination;

    public function render()
    {
        $incomes = $this->getIncomes();
        $this->getCategories();
        return view('livewire.incomes.table-incomes',['incomes'=>$incomes]);
    }

    public function getIncomes(){
        $incomes = Income::orderBy('created_at','desc')->paginate(10);
        return $incomes;
    }

    public function getCategories(){
        $incomes = $this->getIncomes();

    }
}
