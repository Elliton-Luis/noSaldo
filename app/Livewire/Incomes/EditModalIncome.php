<?php

namespace App\Livewire\Incomes;

use Livewire\Component;

use App\Models\Income;
use App\Models\Category;

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
        $categories = $this->getCategories();

        return view('livewire.incomes.edit-modal-income',['categories'=>$categories]);
    }

    public function getIncome(){
        return $income = Income::findOrFail($this->id);
    }

    public function getCategories(){
        $query = Category::query();
        $query->where('type','income')->orWhere('type','both');
        return $query->get();
    }

    public function changeIncome(){
        $income = $this->getIncome();

        $income->description = $this->description;
        $income->value = $this->value;
        $income->type = $this->type;
        $income->category = $this->category;
        $income->save();

        session()->flash('successEditIncome','Mudanças Aplicadas');

        $this->dispatch('changeIncome');

    }
}
