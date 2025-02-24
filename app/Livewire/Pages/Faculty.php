<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Faculties')]
class Faculty extends Component
{
    public function render()
    {
        $indofaculties = ModelsFaculty::where('is_active', true)->get();
        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties]);
    }
}
