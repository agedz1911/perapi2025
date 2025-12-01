<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.index')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.index');
    }
}
