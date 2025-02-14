<?php

namespace App\Livewire\Section;

use App\Models\Sponsor as ModelsSponsor;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Sponsors')]
class Sponsor extends Component
{
    public function render()
    {
        $sponsors = ModelsSponsor::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.section.sponsor', ['sponsors' => $sponsors]);
    }
}
