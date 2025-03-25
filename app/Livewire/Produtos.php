<?php

namespace App\Livewire;

use App\Models\Produtos as ModelsProdutos;
use Livewire\Component;

class Produtos extends Component
{



    public $nome;
    public $ingredientes;
    public $preco;
    


    public function store()
    {
       

        ModelsProdutos::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'preco' => $this->preco
        ]);

        session()->flash('message', 'Produto criado com sucesso!');
        
    }



    public function render()
    {
        return view('livewire.produtos');
    }
}
