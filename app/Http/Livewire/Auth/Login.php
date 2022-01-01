<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email'     => 'required|email',
            'password'  => 'required'
            
        ]);

        if(Auth::attempt([
            'email'=> $this->email, 
            'password'=> $this->password]))
            {
                return redirect()->route('admin.dashboard');

        } else {
            session()->flash('error', 'Alamt email atau Password Anda Salah!');
            return redirect()->route('auth.login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
