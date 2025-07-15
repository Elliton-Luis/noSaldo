<?php

namespace App\Livewire\Incomes;

use Livewire\Component;
use App\Models\Income;

class FormCreateIncome extends Component
{
    public $description;
    public $value;
    public $category;

    public function mount(){
        $this->description = null;
        $this->value = null;
        $this->category = null;
    }

    public function render()
    {
        return view('livewire.incomes.form-create-income');
    }

    public function storeIncome(){
        Income::create([
            "user_id" =>auth()->user()->id,
            "category_id" => 1,
            "description" =>$this->description,
            "value" => $this->value,
            "date" => date('Y-m-d')
        ]);
    }
}
