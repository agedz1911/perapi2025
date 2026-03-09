<?php

namespace App\Livewire\Apras;

use App\Models\ImportantDate;
use App\Models\Slider;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.apras')]
class Home extends Component
{
    public $importantDates;

    public function mount()
    {
        $this->importantDates = ImportantDate::where('is_active', true)
            ->where('category', 'apras')
            ->orderBy('no_urut')
            ->get();
    }

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
