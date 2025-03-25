<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{



    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|max:40|min:6'
    ];

    protected $messages = [
        'email.required' => 'email é obrigatorio',
        'email.email' => 'formato do email é invalido',
        'password.required' => 'a senha é obrigatorio',
        'password.max' => 'a senha tem um limite de 40 caracteres',
        'password.min' => 'tem que ter pelo menos 6 caracteres'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email,'password' => $this->password])) {
           
            session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('administrador.dashboard');
            }
            if (Auth::user()->role === 'funcionario') {
                return redirect()->route('funcionario.dashboard');
            }
            if (Auth::user()->role === 'cliente') {
                return redirect()->route('cliente.dashboard');
            }
        }
        session()->flash('error', 'Email ou senha incorretos');
    }







    public function render()
    {
        return view('livewire.auth.login');
    }
}
