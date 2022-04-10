<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PlayerComponent extends Component
{
    public function render()
    {
        return view('livewire.player-component')->layout('livewire.layouts.player');
    }
}
