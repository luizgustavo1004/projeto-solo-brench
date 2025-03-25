<?php

namespace App\Livewire\Clientes;

use App\Models\Clientes;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;


    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:100',
            'endereco' => 'required|string|min:5|max:255',
            'telefone' => 'required|string|regex:/^(\(\d{2}\)\s)?\d{4,5}-\d{4}$/|unique:clientes,telefone',
            'cpf' => 'required|string|min:10|unique:clientes,cpf|max:20',
            'email' => 'required|email|max:255|unique:clientes,email',
            'password' => 'required|string|min:6|max:60'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'endereco.min' => 'O endereco tem menos de 5 caracteres',
            'endereco.required' => 'O endereço é obrigatório.',
            'telefone.required' => 'O telefone é obrigatório.',
            'telefone.regex' => 'Formato inválido. Use (XX) XXXX-XXXX ou (XX) XXXXX-XXXX.',
            'telefone.unique' => 'Este telefone já está cadastrado.',
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.min' => 'O CPF tem menos de 10 numeros',
            'cpf.max' => 'O Cpf tem mais de 20 numeros',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Digite um e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
        ];
    }




    public function store(){

        $this->validate();

        Clientes::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        session()->flash('message', 'Cliente cadastrado com sucesso!');
    }





    public function render()
    {
        return view('livewire.clientes.create');
    }





}
