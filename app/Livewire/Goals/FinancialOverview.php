<?php

namespace App\Livewire\Goals;

use Livewire\Component;
use App\Models\Goal;

class FinancialOverview extends Component
{
    public $user;

    public function mount(){
        $this->user = auth()->user()->id;
    }

    public function render()
    {
        $goals = $this->getGoals();
        return view('livewire.goals.financial-overview',['goals'=>$goals]);
    }
    #[On('goalCreated')]
    public function getGoals(){
        $query = Goal::query();
        return $query->where('user_id',$this->user)->paginate(10);
    }
}
