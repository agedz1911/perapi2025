<?php

namespace App\Livewire\Apras;

use App\Models\RegInfo;
use App\Models\Registration as ModelsRegistration;
use Livewire\Component;

class Registration extends Component
{
    public $regInfos;

    public function mount()
    {
        $this->regInfos = RegInfo::where('is_active', true)->orderBy('no_urut', 'asc')->get();
    }


    public function render()
    {
        $regLocals = ModelsRegistration::where('wilayah_reg', 'indonesia')->where('is_active', true)->whereIn('reg_for', ['apras', 'both'])->get();
        $regForeigns = ModelsRegistration::where('wilayah_reg', 'foreign')->where('is_active', true)->whereIn('reg_for', ['apras', 'both'])->get();
        $uniqueLocals = $regLocals->pluck('category_reg')->unique();
        $uniqueForeigns = $regForeigns->pluck('category_reg')->unique();
        return view('livewire.apras.registration', [
            'regInfos' => $this->regInfos,
            'regLocals' => $regLocals,
            'regForeigns' => $regForeigns,
            'uniqueLocals' => $uniqueLocals,
            'uniqueForeigns' => $uniqueForeigns,
        ]);
    }
}
