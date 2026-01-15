<?php

namespace App\Livewire\Section;

use App\Models\Flyer as ModelsFlyer;
use Livewire\Component;

class Flyer extends Component
{
    public function render()
    {
        $flyers = ModelsFlyer::where('is_active', true)->get();
        return view('livewire.section.flyer', [
            'flyers' => $flyers,
            // 'hasActiveFlyers' => $flyers->isNotEmpty()
        ]);
    }
}
