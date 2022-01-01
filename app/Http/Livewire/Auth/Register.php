<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Users;
use Livewire\Component;

class Register extends Component
{   
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    
    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed'
        ]);

        $users = User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => bcrypt($this->password)
        ]);

        if($users) {
            session()->flash('success', 'Register Berhasil!.');
            return redirect()->route('auth.login');
        }
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.auth.register');
    }
}