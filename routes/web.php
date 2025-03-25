<?php

use App\Livewire\Clientes\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro/cliente', Create::class);
