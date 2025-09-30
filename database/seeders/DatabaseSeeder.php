<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tarefa::insert([
            ['texto' => 'Estudar Laravel'],
            ['texto' => 'Fazer Exercícios'],
            ['texto' => 'Ler um Livro'],
            ['texto' => 'Praticar Esportes'],
            ['texto' => 'Assistir a um Filme'],
            ['texto' => 'Cozinhar uma Receita Nova'],
            ['texto' => 'Meditar por 10 Minutos'],
            ['texto' => 'Escrever um Diário'],
            ['texto' => 'Aprender uma Nova Habilidade'],
            ['texto' => 'Fazer uma Caminhada ao Ar Livre'],
        ]);
    }
}
