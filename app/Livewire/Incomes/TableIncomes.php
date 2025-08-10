<?php

namespace App\Livewire\Incomes;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Income;

class TableIncomes extends Component
{

    use WithPagination;

    public $filter;

    public function mount()
    {
        $this->filter = 'desc';
    }

    public function render()
    {
        $incomes = $this->getIncomes();

        return view('livewire.incomes.table-incomes',[
            'incomes'=>$incomes
        ]);
    }

    public function getIncomes()
    {
        $query = Income::query();

        $query->orderBy('created_at', $this->filter);

        return $query->paginate(10,'*','incomes');
    }

    public function resetPage(){
        $this->resetPage();
    }

}
