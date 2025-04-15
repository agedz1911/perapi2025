<?php

namespace App\Livewire\Form;

use App\Models\SubmitAbstract as ModelsSubmitAbstract;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubmitAbstract extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $name, $last_name, $phone_number, $institution, $country, $city;
    public $user_id, $presenter_type, $presentation_title, $session_type, $abstract_type, $file;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->last_name = $user->last_name;
            $this->phone_number = $user->phone_number;
            $this->institution = $user->institution;
            $this->country = $user->country;
            $this->city = $user->city;

            $this->user_id = $user->id;
        }
        if ($this->name && $this->last_name && $this->phone_number && $this->institution && $this->country && $this->city) {
            $this->currentStep = 2; 
        }
    }

    public function rules($step)
    {
        switch ($step) {
            case '1':
                return [
                    'name' => ['required'],
                    'last_name' => ['required'],
                    'phone_number' => ['required'],
                    'institution' => ['required'],
                    'country' => ['required'],
                    'city' => ['required'],
                ];
                break;
            case '2':
                return [
                    'user_id' => ['required'],
                    'presenter_type' => ['required'],
                    'presentation_title' => ['required'],
                    'session_type' => ['required'],
                    'abstract_type' => ['required'],
                    // 'file' => ['required', 'mimes:pdf,doc,docx', 'max:2048'],
                    'file' => ['required', 'image:jpg,png', 'max:2048'],
                ];
                break;
        }
    }

    public function nextStep()
    {
        $this->validate($this->rules($this->currentStep));
        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'institution' => $this->institution,
            'country' => $this->country,
            'city' => $this->city,
        ]);
        if ($this->name && $this->last_name && $this->phone_number && $this->institution && $this->country && $this->city) {
            $this->currentStep = 2; 
        } else {
            $this->currentStep++; 
        }
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function save()
    {
        $this->validate($this->rules(2));

        $fileAbstract = $this->file->store('SubmitAbstract', 'public');

        ModelsSubmitAbstract::create([
            'user_id' => Auth::id(),
            'presenter_type' => $this->presenter_type,
            'presentation_title' => $this->presentation_title,
            'session_type' => $this->session_type,
            'abstract_type' => $this->abstract_type,
            'file' => $fileAbstract,
        ]);
        session()->flash('message', 'Form submitted successfully!');
        $this->currentStep = 3;
    }

    public function render()
    {
        $countries = countries();
        return view('livewire.form.submit-abstract', [
            'countries' => $countries,
        ]);
    }
}
