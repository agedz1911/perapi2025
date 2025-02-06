<?php

namespace App\Livewire\Section;

use App\Models\ImportantDate as ModelsImportantDate;
use Livewire\Component;

class ImportantDate extends Component
{
    public function render()
    {
        $importantDates = ModelsImportantDate::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.section.important-date', ['importantDates' => $importantDates]);
    }
}
