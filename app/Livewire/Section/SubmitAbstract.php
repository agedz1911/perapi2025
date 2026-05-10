<?php

namespace App\Livewire\Section;

use App\Models\Faculty;
use App\Models\Submit_Abstracts;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubmitAbstract extends Component
{
    use WithFileUploads;

    public $facultyId;
    public $facultyName;
    
    // Array untuk menyimpan multiple abstracts
    public $abstracts = [];
    
    // Aturan validasi file - SINKRON DENGAN FILAMENT (3MB)
    protected $rules = [
        'abstracts.*.title' => 'required|string|max:255',
        'abstracts.*.file' => 'nullable|mimes:pdf,doc,docx|max:3072', // 3MB = 3072 KB (sama dengan Filament)
    ];
    
    protected $messages = [
        'abstracts.*.title.required' => 'Title is required.',
        'abstracts.*.title.max' => 'Title must not exceed 255 characters.',
        'abstracts.*.file.mimes' => 'File must be PDF, DOC, or DOCX.',
        'abstracts.*.file.max' => 'File size must not exceed 3MB.',
    ];

    public function mount($facultyId = null)
    {
        // Jika facultyId diterima, set faculty dan load data yang sudah ada
        if ($facultyId) {
            $this->facultyId = $facultyId;
            $faculty = Faculty::find($facultyId);
            
            if ($faculty) {
                $this->facultyName = $faculty->name;
                
                // Load abstracts yang sudah ada untuk faculty ini
                $existingAbstracts = Submit_Abstracts::where('faculty_id', $facultyId)->get();
                
                if ($existingAbstracts->count() > 0) {
                    $this->abstracts = $existingAbstracts->map(function($abstract) {
                        return [
                            'id' => $abstract->id,
                            'title' => $abstract->title,
                            'file' => null, // File upload field
                            'file_path' => $abstract->abstract, // Path file yang sudah ada
                        ];
                    })->toArray();
                } else {
                    // Jika belum ada abstract, buat satu field kosong
                    $this->abstracts = [
                        [
                            'id' => null,
                            'title' => '',
                            'file' => null,
                            'file_path' => null,
                        ]
                    ];
                }
            }
        } else {
            // Default: satu field kosong
            $this->abstracts = [
                [
                    'id' => null,
                    'title' => '',
                    'file' => null,
                    'file_path' => null,
                ]
            ];
        }
    }
    
    public function addAbstract()
    {
        $this->abstracts[] = [
            'id' => null,
            'title' => '',
            'file' => null,
            'file_path' => null,
        ];
    }
    
    public function removeAbstract($index)
    {
        // Jika ada ID, hapus dari database
        if (isset($this->abstracts[$index]['id']) && $this->abstracts[$index]['id']) {
            $abstract = Submit_Abstracts::find($this->abstracts[$index]['id']);
            if ($abstract) {
                // Hapus file fisik jika ada
                if ($abstract->abstract && file_exists(storage_path('app/public/' . $abstract->abstract))) {
                    unlink(storage_path('app/public/' . $abstract->abstract));
                }
                $abstract->delete();
            }
        }
        
        // Hapus dari array
        unset($this->abstracts[$index]);
        $this->abstracts = array_values($this->abstracts); // Re-index array
    }
    
    public function save()
    {
        // Validasi data
        $this->validate();
        
        foreach ($this->abstracts as $index => $abstractData) {
            // Skip jika title dan file kosong (untuk prevent submit kosong)
            if (empty($abstractData['title']) && empty($abstractData['file'])) {
                continue;
            }
            
            $filePath = $abstractData['file_path'];
            
            // Jika ada file baru yang diupload
            if ($abstractData['file']) {
                // Hapus file lama jika ada
                if ($filePath && file_exists(storage_path('app/public/' . $filePath))) {
                    unlink(storage_path('app/public/' . $filePath));
                }
                
                // Upload file baru ke storage dengan preserve filenames (sama dengan Filament)
                // Filament menggunakan directory 'Abstracts' dengan capitalize
                $originalFileName = $abstractData['file']->getClientOriginalName();
                $filePath = $abstractData['file']->storeAs('Abstracts', $originalFileName, 'public');
            }
            
            // Simpan atau update data
            if (isset($abstractData['id']) && $abstractData['id']) {
                // Update existing
                $abstract = Submit_Abstracts::find($abstractData['id']);
                if ($abstract) {
                    $abstract->update([
                        'faculty_id' => $this->facultyId,
                        'title' => $abstractData['title'],
                        'abstract' => $filePath,
                    ]);
                }
            } else {
                // Create new
                Submit_Abstracts::create([
                    'faculty_id' => $this->facultyId,
                    'title' => $abstractData['title'],
                    'abstract' => $filePath,
                ]);
            }
        }
        
        // Reset form
        $this->abstracts = [
            [
                'id' => null,
                'title' => '',
                'file' => null,
                'file_path' => null,
            ]
        ];
        
        // Emit event untuk menutup modal dan show feedback
        $this->dispatch('closeModal');
        
        // Flash message untuk notifikasi
        session()->flash('message', 'Abstract(s) submitted successfully!');
        
        // Refresh parent component jika perlu
        $this->redirect(route('faculties-inapras'));
    }
    
    public function cancel()
    {
        // Emit event untuk menutup modal
        $this->dispatch('closeModal');
    }

    public function render()
    {
        return view('livewire.section.submit-abstract');
    }
}
