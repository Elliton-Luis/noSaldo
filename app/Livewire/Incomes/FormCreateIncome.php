<?php

namespace App\Livewire\Incomes;

use Livewire\Component;
use App\Models\Income;
use App\Models\Category;

class FormCreateIncome extends Component
{
    public $description;
    public $value;
    public $category;
    public $type;
    public $categoryName;
    public $categoryType;

    public function mount(){
        $this->description = null;
        $this->value = null;
        $this->category = null;
        $this->type = null;
        $this->categoryName = null;
        $this->categoryType = null;
    }

    public function render()
    {
        $categories = $this->getCategories();
        return view('livewire.incomes.form-create-income',['categories'=>$categories]);
    }

    public function storeIncome(){
        Income::create([
            "user_id" =>auth()->user()->id,
            "category_id" => 1,
            "description" =>$this->description,
            "value" => $this->value,
            "type"=> $this->type,
            "date" => date('Y-m-d')
        ]);
        return session()->flash('successIncome','Entrada Cadastrada Com Sucesso!!');
    }

    public function getCategories(){
        $query = Category::query();
        return $query->get();
    }

    public function storeCategory(){
        Category::create([
            'user_id'=>auth()->user()->id,
            'name'=>$this->categoryName,
            'type'=>$this->categoryType
        ]);
        return session()->flash('successCategory','Categoria Cadastrada Com Sucesso!!');
    }
}
