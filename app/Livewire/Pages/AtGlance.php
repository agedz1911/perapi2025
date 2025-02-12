<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance')]
class AtGlance extends Component
{
    public function render()
    {
        $times = Time::with('atGlances')->get(); // Ambil data times beserta atGlances
        $atglances = ModelsAtGlance::all();

        $groupedAtGlances = $atglances->groupBy('time_id');

        return view('livewire.pages.at-glance', (compact('times', 'groupedAtGlances')));
    }
}
