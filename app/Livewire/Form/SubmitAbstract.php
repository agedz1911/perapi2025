<?php

namespace App\Livewire\Form;

use Livewire\Component;

class SubmitAbstract extends Component
{
    public $currentStep = 1;

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function save()
    {
        $this->currentStep = 3;
    }

    public function render()
    {
        return view('livewire.form.submit-abstract');
    }
}
