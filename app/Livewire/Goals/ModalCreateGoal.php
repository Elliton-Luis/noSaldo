<?php

namespace App\Livewire\Goals;

use Livewire\Component;
use App\Models\Goal;
use App\Models\Icon;

use Livewire\Attributes\On;

class ModalCreateGoal extends Component
{
    public $priority;
    public $value;
    public $name;
    public $deadline;
    public $icon;
    public $user;

    public function mount(){
        $this->priority = 5;
        $this->value = null;
        $this->name = null;
        $this->deadline = null;
        $this->icon = 1;
        $this->user = auth()->user()->id;
    }

    public function render()
    {
        $iconClass = $this->iconClass();
        return view('livewire.goals.modal-create-goal',['priority'=>$this->priority,'iconClass'=>$iconClass]);
    }

    public function createGoal(){
        $this->validate([
            'name' => 'required|string|max:100',
            'value' => 'required|numeric|min:0|max:9999999999999',
            'deadline' => 'required|date|after_or_equal:today',
        ], [
            'name.required' => 'O nome da meta é obrigatório.',
            'name.max' => 'O nome da meta não pode ter mais de 100 caracteres.',
            'value.required' => 'Você precisa informar o valor da meta.',
            'value.numeric' => 'O valor da meta deve ser um número.',
            'value.min' => 'O valor da meta não pode ser negativo.',
            'value.max' => 'O valor da meta não pode ser tão alto.',
            'deadline.required' => 'A data limite é obrigatória.',
            'deadline.date' => 'A data limite deve ser válida.',
            'deadline.after_or_equal' => 'A data limite não pode ser anterior a hoje.',
        ]);

        Goal::create([
            'user_id'=>$this->user,
            'name'=>$this->name,
            'total_amount'=>$this->value,
            'deadline'=>$this->deadline,
            'priority'=>$this->priority,
            'icon_id'=>$this->icon
        ]);

        $this->reset();
        $this->dispatch('goalChange');
        return session()->flash('successGoal','Meta Cadastrada Com Sucesso!!');

    }

    #[On('iconId')]
    public function selectIcon($id){
        $this->icon = $id['id'];
    }

    public function iconClass(){
        return Icon::find($this->icon)?->class ?? 'question-circle';
    }
}
