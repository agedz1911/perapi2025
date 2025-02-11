<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance')]
class AtGlance extends Component
{
    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
