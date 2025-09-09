<?php

namespace App\Livewire\Goals;

use Livewire\Component;

use App\Models\Goal;

use Livewire\Attribute\Computed;

class ModalAddMoney extends Component
{
    public $value;
    public $goalId;
    public $goal;

    public function mount(){
        $this->goal = $this->getGoal();
        $this->value = 0;
    }

    public function render()
    {
        return view('livewire.goals.modal-add-money',['goal'=>$this->goal]);
    }

    public function getGoal()
    {
        $goal = Goal::find($this->goalId);
        return $goal;
    }

    public function save()
    {
        $sum = $this->goal->current_amount += $this->value;
        if($this->goal->total_amount < $sum){
            return session()->flash('errorSave','O valor é maior que o necessário para suprir a meta');
        }
        $this->goal->current_amount += $this->value;
        $this->goal->save();


        $this->dispatch('goalChange', ['id' => "add_money_{$this->goalId}"]);
        return session()->flash('successSave','Valor Salvo Com Sucesso');
    }
}
