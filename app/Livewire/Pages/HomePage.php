<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('InaPRAS 2026')]
class HomePage extends Component
{
    public function render()
    {
        $welcomeMessages = WelcomeMessage::where('is_active', true)->get();
        $sponsors = Sponsor::where('is_Active', true)->orderBy('company', 'asc')->take(10)->get();
        return view('livewire.pages.home-page', ['sponsors' => $sponsors, 'welcomeMessages' => $welcomeMessages]);
    }
}
