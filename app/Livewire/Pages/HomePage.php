<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA 2025')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.pages.home-page');
    }
}
