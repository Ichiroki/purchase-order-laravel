<?php

namespace App\Livewire\Forms\Auth;

use Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required', message: 'Email is required')]
    #[Validate('email', message: 'This is not a valid email')]
    public $email;

    #[Validate('required', message: 'Password is required')]
    public $password;

    public function tryLogin() {
        if(Auth::attempt($this->validate())) {
            return redirect()->route('home');
        } else {
            return back();
        }
    }
}
