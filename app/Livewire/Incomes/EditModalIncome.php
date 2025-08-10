<?php

namespace App\Livewire\Incomes;

use Livewire\Component;

use App\Models\Income;

class EditModalIncome extends Component
{
    public $id;

    public $description;
    public $value;
    public $type;
    public $category;

    public function mount(){
        $income = $this->getIncome();

        $this->description = $income->description;
        $this->value = $income->value;
        $this->category = $income->category->name;
        $this->type = $income->type;
    }

    public function render()
    {
        return view('livewire.incomes.edit-modal-income');
    }

    public function getIncome(){
        return $income = Income::findOrFail($this->id);
    }
}
