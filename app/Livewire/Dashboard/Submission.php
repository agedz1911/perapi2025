<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Submission extends Component
{
    use WithPagination;
    public $user;
    
    public function mount()
    {
        $this->user =  Auth::user();
    }

    public function render()
    {
        $submitAbstracts = $this->user->submitAbstracts()->paginate(3);
        return view('livewire.dashboard.submission', [
            'submitAbstracts' => $submitAbstracts,
        ]);
    }
}
