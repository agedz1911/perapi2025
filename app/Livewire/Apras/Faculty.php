<?php

namespace App\Livewire\Apras;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Title('Faculties - APRAS 2026')]
#[Layout('components.layouts.apras')]
class Faculty extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $searchTerm = "";

    public function render()
    {
        $queryIndo = ModelsFaculty::where('is_active', true)->with('schedules')->with('submit_abstracts')->whereIn('category', ['apras','both' ]);
        $queryForeign = ModelsFaculty::where('is_active', true)->with('schedules')->whereIn('category', ['apras','both' ]);
        if (strlen($this->searchTerm) >= 3) {
            $queryIndo->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%');
            });
        }
        if (strlen($this->searchTerm) >= 3) {
            $queryForeign->where(function ($q) {
                $q->where('name', 'like', '%' . $this->searchTerm . '%');
            });
        }
        $indofaculties = $queryIndo
            ->orderBy('name', 'asc')
            ->get();

        $foreignfaculties = $queryForeign
            ->orderBy('name', 'asc')
            ->get();
            
        return view('livewire.apras.faculty', [
            'indofaculties' => $indofaculties,
            'foreignfaculties' => $foreignfaculties,
        ]);
    }
}
