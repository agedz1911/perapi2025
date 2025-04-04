<?php

namespace App\Livewire\Auth;

use App\Mail\SignupSuccess;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ];
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Mail::to($this->email)->send(new SignupSuccess($user));
        
        Auth::login($user, true);
        session()->flash('message', 'User created successfully');
        return redirect()->to('/login');
    }

    // public function save()
    // {
    //     try {
    //         User::create([
    //             'name' => $this->name,
    //             'email' => $this->email,
    //             'password' => Hash::make($this->password),
    //         ]);
    //         session()->flash('message', 'User created successfully');
    //         return redirect()->to('/login'); // Redirect ke halaman login setelah berhasil
    //     } catch (\Exception $e) {
    //         session()->flash('error', 'An error occurred while creating the user'); // Menangani error
    //     }
    // }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
