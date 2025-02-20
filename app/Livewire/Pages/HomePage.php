<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA')]
class HomePage extends Component
{
    public function render()
    {
        $sponsors = Sponsor::where('is_Active', true)->orderBy('company', 'asc')->take(10)->get();
        return view('livewire.pages.home-page', ['sponsors' => $sponsors]);
    }
}
