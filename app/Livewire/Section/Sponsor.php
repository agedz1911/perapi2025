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
        $sponsors = ModelsSponsor::where('is_active', true)->orderByRaw("CASE 
        WHEN category = 'Platinum Sponsor' THEN 1 
        WHEN category = 'Gold Sponsor' THEN 2 
        WHEN category = 'Silver Sponsor' THEN 3 
        WHEN category = 'Sponsors' THEN 4 
        ELSE 5 
    END")->get();
        return view('livewire.section.sponsor', ['sponsors' => $sponsors]);
    }
}
