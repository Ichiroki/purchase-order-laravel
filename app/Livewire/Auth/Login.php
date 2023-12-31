<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\Auth\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Login extends Component
{

    public LoginForm $form;

    public function login() {
        $this->form->tryLogin();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
