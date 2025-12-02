<?php

namespace App\Livewire\Apras;

use App\Models\Accommodation as ModelsAccommodation;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accommodation - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Accommodation extends Component
{
    public function render()
    {
        $accommodations = ModelsAccommodation::where('is_active', true)->orderBy('hotel_star', 'desc')->get();
        return view('livewire.apras.accommodation', ['accommodations' => $accommodations]);
    }
}
