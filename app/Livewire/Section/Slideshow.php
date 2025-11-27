<?php

namespace App\Livewire\Section;

use App\Models\Slider;
use Livewire\Component;

class Slideshow extends Component
{
    public function render()
    {
        $heros = Slider::where('is_active', true)->get();
        return view('livewire.section.slideshow', ['heros' => $heros]
        );
    }
}
