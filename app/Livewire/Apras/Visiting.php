<?php

namespace App\Livewire\Apras;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Venue - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Visiting extends Component
{
    public $currentSlide = 1;
    public $totalSlides = 4;
    public $autoplayInterval = 5000;

    public function nextSlide()
    {
        $this->currentSlide = $this->currentSlide >= $this->totalSlides ? 1 : $this->currentSlide + 1;
    }

    public function previousSlide()
    {
        $this->currentSlide = $this->currentSlide <= 1 ? $this->totalSlides : $this->currentSlide - 1;
    }

    public function goToSlide($slide)
    {
        $this->currentSlide = $slide;
    }

    public function render()
    {
        return view('livewire.apras.visiting');
    }
}
