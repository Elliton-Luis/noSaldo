<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Expense;
use App\Models\Income;
use Livewire\Attributes\On;

class CardTotal extends Component
{
    public $totalIncome;
    public $totalExpense;
    public $countIncome;
    public $countExpense;

    public function mount(){
        $this->totalIncome = Income::where('user_id',auth()->user()->id)->sum('value');
        $this->totalExpense = Expense::where('user_id',auth()->user()->id)->sum('value');
        $this->countIncome = Income::where('user_id', auth()->id())->count();
        $this->countExpense = Expense::where('user_id', auth()->id())->count();

    }

    public function render()
    {
        return view('livewire.card-total',['totalIncome' => $this->totalIncome,'totalExpense' => $this->totalExpense,'countIncome'=>$this->countIncome,'countExpense',$this->countExpense]);
    }

    #[On('storeIncome')]
    public function updateTotals()
    {
        $this->totalIncome = Income::where('user_id', auth()->id())->sum('value');
        $this->totalExpense = Expense::where('user_id', auth()->id())->sum('value');
        $this->countIncome = Income::where('user_id', auth()->id())->count();
        $this->countExpense = Expense::where('user_id', auth()->id())->count();

    }

}
