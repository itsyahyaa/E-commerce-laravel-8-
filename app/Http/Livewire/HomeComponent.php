<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        // connect it with layout((base.blade.php)
        return view('livewire.home-component')->layout('layouts.base');
    }
}
