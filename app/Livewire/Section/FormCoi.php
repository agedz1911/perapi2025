<?php

namespace App\Livewire\Section;

use App\Exports\FormCoiExport;
use App\Models\FormCoi as ModelsFormCoi;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel; 

class FormCoi extends Component
{
    public $name;
    public $institution;
    public $email;
    public $presentation_titles = ['']; // Array untuk multiple titles, mulai dengan satu kosong
    public $no_conflict = true; // Default: no conflict checked
    public $has_conflict = false;
    public $conflict_description = '';
    public $have_consultant = '';
    public $have_research_grant = '';
    public $have_speaker_honorarium = '';
    public $have_ownership = '';

    // Aturan validasi
    protected $rules = [
        'name' => 'required|string|max:255',
        'institution' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'presentation_titles' => 'required|array|min:1',
        'presentation_titles.*' => 'required|string|max:255',
        'conflict_description' => 'nullable|string|max:500',
        'have_consultant' => 'nullable|string|max:255',
        'have_research_grant' => 'nullable|string|max:255',
        'have_speaker_honorarium' => 'nullable|string|max:255',
        'have_ownership' => 'nullable|string|max:255',
    ];

    public function addTitle()
    {
        $this->presentation_titles[] = ''; // Tambahkan input kosong ke array
    }

    // Metode untuk toggle checkbox "no conflict" (pastikan saling eksklusif)
    public function toggleNoConflict()
    {
        $this->no_conflict = true;
        $this->has_conflict = false;
        // Reset field terkait has_conflict
        $this->conflict_description = '';
        $this->have_consultant = '';
        $this->have_research_grant = '';
        $this->have_speaker_honorarium = '';
        $this->have_ownership = '';
    }

    // Metode untuk toggle checkbox "has conflict" (pastikan saling eksklusif)
    public function toggleHasConflict()
    {
        $this->has_conflict = true;
        $this->no_conflict = false;
    }

    // Metode untuk submit form
    public function save()
    {
        // Validasi data
        $this->validate();

        // Simpan ke database (sesuaikan dengan model Anda)
        ModelsFormCoi::create([
            'name' => $this->name,
            'institution' => $this->institution,
            'email' => $this->email,
            'presentation_titles' => json_encode($this->presentation_titles), // Simpan sebagai JSON
            'no_conflict' => $this->no_conflict,
            'has_conflict' => $this->has_conflict,
            'conflict_description' => $this->conflict_description,
            'have_consultant' => $this->have_consultant,
            'have_research_grant' => $this->have_research_grant,
            'have_speaker_honorarium' => $this->have_speaker_honorarium,
            'have_ownership' => $this->have_ownership,
        ]);

        // Feedback sukses (opsional: redirect atau flash message)
        session()->flash('message', 'Thank You, Conflict of Interest form submitted successfully!');

        // Reset form setelah submit (opsional)
        $this->reset();
    }

    public function exportToExcel()
    {
        return Excel::download(new FormCoiExport, 'conflict_of_interest_data.xlsx');
    }

    public function render()
    {
        return view('livewire.section.form-coi');
    }
}
