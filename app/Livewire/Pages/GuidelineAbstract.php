<?php

namespace App\Livewire\Pages;

use App\Models\GuidelineAbstract as ModelsGuidelineAbstract;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Submission - InaPRAS 2026')]
class GuidelineAbstract extends Component
{
    public function render()
    {
        $guidelineAbstracts = ModelsGuidelineAbstract::whereIn('category', ['Abstract InaPRAS', 'All'])->orderBy('no_urut', 'asc')->get();
        return view('livewire.pages.guideline-abstract', ['guidelineAbstracts' => $guidelineAbstracts]);
    }
}
