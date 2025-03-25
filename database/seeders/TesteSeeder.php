<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Funcionario',
            'email' => 'Funcionario@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'funcionario'
        ]);

        User::Create([
            'name' => 'Cliente',
            'email' => 'Cliente@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'cliente'
        ]);

        User::Create([
            'name' => 'Admin',
            'email' => 'Admin@teste.com',
            'password' => Hash::make('123456'),
            'role'=>'admin'
        ]);
    }
}

