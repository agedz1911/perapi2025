<?php

namespace App\Livewire\Section;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Sponsors')]
class Sponsor extends Component
{
    public function render()
    {
        return view('livewire.section.sponsor');
    }
}
