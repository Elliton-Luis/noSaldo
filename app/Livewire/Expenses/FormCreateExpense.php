<?php

namespace App\Livewire\Expenses;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

use App\Models\Category;
use App\Models\Expense;

class FormCreateExpense extends Component
{
    #[Validate('required',message:'É necessário preencher esse campo')]
    #[Validate('string',message:'Apenas Caracteres')]
    public $description;

    #[Validate('required',message:'É necessário preencher esse campo')]
    public $value;

    #[Validate('required',message:'É necessário preencher esse campo')]
    public $category;

    #[Validate('required',message:'É necessário preencher esse campo')]
    public $type;

    public function mount(){
        $this->description = null;
        $this->value = null;
        $this->category = null;
        $this->type = null;
    }

    public function render()
    {
        $categories = $this->getCategories();
        return view('livewire.expenses.form-create-expense',['categories'=>$categories]);
    }

    public function storeExpense(){

        $this->validate();
        Expense::create([
            "user_id" =>auth()->user()->id,
            "category_id" => $this->category,
            "description" =>$this->description,
            "value" => $this->value,
            "type"=> $this->type,
            "date" => date('Y-m-d')
        ]);
        $this->reset();
        return session()->flash('successExpense','Entrada Cadastrada Com Sucesso!!');
    }

    #[On('storeCategory')]
    public function getCategories(){
        $query = Category::query();
        $query->where('type','expense')->orWhere('type','both');
        return $query->get();
    }
}
