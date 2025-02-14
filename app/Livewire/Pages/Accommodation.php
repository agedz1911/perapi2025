<?php

namespace App\Livewire\Pages;

use App\Models\Accommodation as ModelsAccommodation;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Accommodation')]
class Accommodation extends Component
{
    public function render()
    {
        $accommodations = ModelsAccommodation::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.pages.accommodation', ['accommodations' => $accommodations]);
    }
}
