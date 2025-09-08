<?php

namespace App\Livewire\Goals;

use Livewire\Component;

use App\Models\Goal;

class ModalAddMoney extends Component
{
    public $value;

    public function mount(){
        $this->value = 0;
    }

    public function render()
    {
        return view('livewire.goals.modal-add-money');
    }
}
