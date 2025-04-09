<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Dashboard - The 28th InaPRAS')]
class Index extends Component
{
    public $user;
    public $profile;

    public function mount()
    {
        $this->user = Auth::user();
        if ($this->user) {
            $this->profile = $this->user->profile;
        }
    }
    public function render()
    {
        return view('livewire.dashboard.index', [
            'profile' => $this->profile
        ]);
    }
}
