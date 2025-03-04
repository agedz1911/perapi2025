<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Program at Glance')]
class AtGlance extends Component
{

    // public $atglances;

    // public function mount()
    // {
    //     $this->atglances = ScheduleSession::where('room', 'Ballroom A')->get();
    // }

    public function render()
    {
        $atglances = ScheduleSession::where('room', 'Ballroom A')->get();
        return view('livewire.pages.at-glance', [
            'atglances' => $atglances,
        ]);
    }
}
