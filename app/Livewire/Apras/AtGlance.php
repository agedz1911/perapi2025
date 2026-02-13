<?php

namespace App\Livewire\Apras;

use App\Models\ScheduleSession;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Program at Glance - APRAS InaPRAS 2026')]
#[Layout('components.layouts.apras')]
class AtGlance extends Component
{
    public $atglances;
    public $dua;
    public $tiga;
    public $empat;
    public $lima;

    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->dua = $this->atglances->where('date', '2026-09-02')->sortBy('no_urut');
        $this->tiga = $this->atglances->where('date', '2026-09-03')->sortBy('no_urut');
        $this->empat = $this->atglances->where('date', '2026-09-04')->sortBy('no_urut');
        $this->lima = $this->atglances->where('date', '2026-09-05')->sortBy('no_urut');
    }
    public function render()
    {
        return view('livewire.apras.at-glance');
    }
}
