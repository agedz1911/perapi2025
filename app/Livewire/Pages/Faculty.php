<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Title('Faculties - The 28th InaPRAS')]
class Faculty extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $searchTerm = "";

    public function render()
    {
        // $faculties = ModelsFaculty::where('is_active', true)->with('schedules')->orderBy('name', 'asc')->get();

        // $indofaculties = $faculties->where('country', 'Indonesia')
        //     ->filter(function ($faculty) {
        //         if (strlen($this->searchTerm) >= 3) {
        //             return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
        //         }
        //         return true;
        //     });

        // $foreignfaculties = $faculties->where('country', '!=', 'Indonesia')
        //     ->filter(function ($faculty) {
        //         if (strlen($this->searchTerm) >= 3) {
        //             return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
        //         }
        //         return true;
        //     });

        // $query = ModelsFaculty::where('is_active', true)->with('schedules');
        $queryIndo = ModelsFaculty::where('is_active', true)->with('schedules')->where('country', 'Indonesia');
        $queryForeign = ModelsFaculty::where('is_active', true)->with('schedules')->where('country', '!=', 'Indonesia');
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
            ->paginate(12);

        $foreignfaculties = $queryForeign
            ->orderBy('name', 'asc')
            ->paginate(12);

        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties, 'foreignfaculties' => $foreignfaculties]);
    }
}
