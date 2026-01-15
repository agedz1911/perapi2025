<?php

namespace App\Livewire\Apras;

use App\Models\GuidelineAbstract;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Submission - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Submission extends Component
{
    public function render()
    {
        $guidelineAbstracts = GuidelineAbstract::whereIn('category', ['Abstract APRAS', 'All'])->orderBy('no_urut', 'asc')->get();
        return view('livewire.apras.submission', [
            'guidelineAbstracts' => $guidelineAbstracts
        ]);
    }
}
