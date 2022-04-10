<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VideoComponent extends Component
{
    public function render()
    {
        return view('livewire.video-component')->layout('livewire.layouts.video'); 
    }
}
