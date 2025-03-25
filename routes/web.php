<?php

use App\Livewire\Produtos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar/produtos', Produtos::class);