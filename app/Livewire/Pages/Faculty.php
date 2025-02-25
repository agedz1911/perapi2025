<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Faculties')]
class Faculty extends Component
{
    public $searchTerm = "";
    public $count = 0;

    public function decrement()
    {
        $this->count--;
    }
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        // $indofaculties = ModelsFaculty::where('is_active', true)->where('country', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        // $foreignfaculties = ModelsFaculty::where('is_active', true)->where('country', '!=', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        $faculties = ModelsFaculty::where('is_active', true)->with('schedules')->orderBy('name', 'asc')->get();

        $indofaculties = $faculties->where('country', 'Indonesia')
            ->filter(function ($faculty) {
                return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
            });

        $foreignfaculties = $faculties->where('country', '!=', 'Indonesia')
            ->filter(function ($faculty) {
                return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
            });

        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties, 'foreignfaculties' => $foreignfaculties]);
    }
}
