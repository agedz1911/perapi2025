<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Organizing Committee - ASMIUA 2025')]

class Committee extends Component
{
    public function render()
    {
        return view('livewire.pages.committee');
    }
}
