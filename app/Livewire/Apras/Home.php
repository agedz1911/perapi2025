<?php

namespace App\Livewire\Apras;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.apras')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.apras.home');
    }
}
