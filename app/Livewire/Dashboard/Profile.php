<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user;
    public $name;
    public $last_name;
    public $email;
    public $nik;
    public $title;
    public $title_specialist;
    public $type;
    public $name_on_certificate;
    public $institution;
    public $address;
    public $country;
    public $province;
    public $city;
    public $postal_code;
    public $phone_number;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->email = $user->email;
            $this->name = $user->name;
            $this->last_name = $user->last_name;
            $this->nik = $user->nik;
            $this->title = $user->title;
            $this->title_specialist = $user->title_specialist;
            $this->type = $user->type;
            $this->name_on_certificate = $user->name_on_certificate;
            $this->institution = $user->institution;
            $this->address = $user->address;
            $this->country = $user->country;
            $this->province = $user->province;
            $this->city = $user->city;
            $this->postal_code = $user->postal_code;
            $this->phone_number = $user->phone_number;
        }
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'last_name' => ['required'],
            'nik' => ['required'],
            'type' => ['required'],
            'title' => ['required'],
            'title_specialist' => ['required'],
            'name_on_certificate' => ['required'],
            'institution' => ['required'],
            'address' => ['required'],
            'country' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
            'phone_number' => ['required'],
        ];
    }

    public function save()
    {
        $this->validate();
        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'nik' => $this->nik,
            'type' => $this->type,
            'title' => $this->title,
            'title_specialist' => $this->title_specialist,
            'name_on_certificate' => $this->name_on_certificate,
            'institution' => $this->institution,
            'address' => $this->address,
            'country' => $this->country,
            'province' => $this->province,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'phone_number' => $this->phone_number,
        ]);

        session()->flash('message', 'Profile Saved Successfully');
    }

    public function render()
    {
        $countries = countries();
        return view('livewire.dashboard.profile', [
            'countries' => $countries,
        ]);
    }
}
