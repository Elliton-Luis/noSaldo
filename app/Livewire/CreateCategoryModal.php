<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

use App\Models\Category;

class CreateCategoryModal extends Component
{
    #[Validate('required',message:'É necessário preencher esse campo')]
    public $categoryName;

    #[Validate('required',message:'É necessário preencher esse campo')]
    public $categoryType;

    public function mount(){
        $this->categoryName = null;
        $this->categoryType = null;
    }

    public function render()
    {
        return view('livewire.create-category-modal');
    }

    public function storeCategory(){
        $this->validate();

        Category::create([
            'user_id'=>auth()->user()->id,
            'name'=>$this->categoryName,
            'type'=>$this->categoryType
    ]);
        $this->dispatch('storeCategory');
        $this->reset();
        return session()->flash('successCategory','Categoria Cadastrada Com Sucesso!!');
    }
}
