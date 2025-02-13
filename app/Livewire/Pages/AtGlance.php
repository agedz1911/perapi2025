<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Program at Glance')]
class AtGlance extends Component
{

    public $atglances;

    public function mount()
    {
        $this->atglances = ModelsAtGlance::all();
    }

    public function render()
    {
        return view('livewire.pages.at-glance', [
            'atglances' => $this->atglances,
        ]);
    }
}
