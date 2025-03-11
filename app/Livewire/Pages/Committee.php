<?php

namespace App\Livewire\Pages;

use App\Models\Committee as ModelsCommittee;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Organizing Committee - The 28th InaPRAS')]

class Committee extends Component
{
    public function render()
    {
        $committees = ModelsCommittee::orderBy('no_urut', 'asc')->where('is_active', true)->get();
        $uniqueCategories = $committees->pluck('category')->unique();
        return view('livewire.pages.committee', ['committees' => $committees, 'uniqueCategories' => $uniqueCategories]);
    }
}
