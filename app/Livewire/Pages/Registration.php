<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Registration')]
class Registration extends Component
{
    public function render()
    {
        return view('livewire.pages.registration');
    }
}
