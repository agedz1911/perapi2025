<?php

namespace App\Livewire\Apras;

use App\Models\Slider;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.apras')]
class Home extends Component
{
    public function render()
    {
        $welcomeMessages = WelcomeMessage::where('is_active', true)->get();
        $heros = Slider::where('is_active', true)->where('category', 'apras')->get();
        return view('livewire.apras.home', [
            'heros' => $heros,
            'welcomeMessages' => $welcomeMessages,
        ]);
    }
}
