<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    public function run()
    {
        Livro::create([
            'titulo' => 'O Senhor dos Anéis',
            'autor' => 'J.R.R. Tolkien',
            'ano_publicacao' => 1954,
            'resumo' => 'Uma aventura épica pela Terra Média.',
        ]);
        Livro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'ano_publicacao' => 1949,
            'resumo' => 'Distopia sobre o totalitarismo e vigilância estatal.',
        ]);
        Livro::create([
            'titulo' => 'O Código Da Vinci',
            'autor' => 'Dan Brown',
            'ano_publicacao' => 2003,
            'resumo' => 'Mistério envolvendo arte e símbolos religiosos.',
        ]);
        Livro::create([
            'titulo' => 'A Origem',
            'autor' => 'Dan Brown',
            'ano_publicacao' => 2017,
            'resumo' => 'Investigação sobre a origem da vida e o futuro da humanidade.',
        ]);
        Livro::create([
            'titulo' => 'Harry Potter e a Pedra Filosofal',
            'autor' => 'J.K. Rowling',
            'ano_publicacao' => 1997,
            'resumo' => 'Aventura de um jovem bruxo em uma escola de magia.',
        ]);
    }
}
