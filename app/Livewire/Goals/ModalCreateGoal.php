<?php

namespace App\Livewire\Goals;

use Livewire\Component;
use App\Models\Goal;

class ModalCreateGoal extends Component
{
    public $priority;
    public $value;
    public $name;
    public $deadline;

    public function mount(){
        $this->priority = 5;
        $this->value = null;
        $this->name = null;
        $this->deadline = null;
    }

    public function render()
    {
        return view('livewire.goals.modal-create-goal',['priority'=>$this->priority]);
    }

    public function createGoal(){
        Goal::create([
            'user_id'=>auth()->user()->id,
            'name'=>$this->name,
            'total_amount'=>$this->value,
            'deadline'=>$this->deadline
        ]);

    }
}
