<?php

namespace App\Livewire\Section;

use App\Models\ImportantDate as ModelsImportantDate;
use Livewire\Component;

class ImportantDate extends Component
{
    public $importantDates;

    public function mount()
    {
        $this->importantDates = ModelsImportantDate::where('is_active', true)
            ->where('category', 'inapras')
            ->orderBy('no_urut')
            ->get();
    }

    public function render()
    {
        return view('livewire.section.important-date');
    }
}
