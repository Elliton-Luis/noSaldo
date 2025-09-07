<?php

namespace App\Livewire\Goals;

use Livewire\Component;
use App\Models\Icon;

class SelectIconModal extends Component
{
    public function render()
    {
        $icons = $this->getIcons();
        return view('livewire.goals.select-icon-modal',['icons'=>$icons]);
    }

    public function getIcons(){
        $icons = Icon::paginate(12);
        return $icons;
    }

    public function selectIcon($id){
        $this->dispatch('iconId', ['id' => $id]);
    }
}
