<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;




Route::get('/', Login::class)->name('login');

Route::get('/cliente', function () {
    return 'login cliente';
})->middleware(['auth', 'role:cliente'])->name('cliente.dashboard');

Route::get('/funcionario', function () {
    return 'login funcionario';
})->middleware(['auth', 'role:funcionario'])->name('funcionario.dashboard');

Route::get('/admin', function () {
    return 'login admin';
})->middleware(['auth', 'role:admin'])->name('administrador.dashboard');