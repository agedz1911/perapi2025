<?php

namespace App\Livewire\Apras;

use App\Models\Committee as ModelsCommittee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Organizing Committee - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Committee extends Component
{
    public function render()
    {
        $committees = ModelsCommittee::orderBy('no_urut', 'asc')->whereIn('committee_for', ['apras', 'both'])->where('is_active', true)->get();
        $uniqueCategories = $committees->pluck('category')->unique();
        return view('livewire.apras.committee', ['committees' => $committees, 'uniqueCategories' => $uniqueCategories]);
    }
}
