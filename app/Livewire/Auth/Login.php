<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
        //     $this->addError('email', 'Email yang anda masukan tidak sesuai');
        //     $this->addError('password', 'Password yang anda masukan tidak sesuai');
        //     return null;
        // }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password,], $this->remember)) {
            session()->flash('message', 'Berhasil login.');
            return redirect()->intended('/');
        } else {
            session()->flash('error', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('message', 'Berhasil logout.');
        return redirect()->intended('/login');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
