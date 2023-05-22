<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Auth;


class Login extends Component
{

    public $email = "demo";
    public $password ="demo";
    
    public function login()
    {
        
        if(Auth::guard('user')->attempt(['email' => $this->email, 'password' => $this->password]))
        {
            return redirect()->intended('/profile');
        }
        
        $this->addError('email','Email falsch oder passwort');
        $this->addError('password','Password falsch');
    
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.user');
    }

}
