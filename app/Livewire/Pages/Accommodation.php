<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Accommodation')]
class Accommodation extends Component
{
    public function render()
    {
        return view('livewire.pages.accommodation');
    }
}
