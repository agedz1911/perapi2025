<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Visiting')]
class Visiting extends Component
{
    public function render()
    {
        return view('livewire.pages.visiting');
    }
}
