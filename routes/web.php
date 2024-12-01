<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', [LivroController::class, 'index'])->name('livros.index');
Route::get('/livros/adicionar', [LivroController::class, 'create'])->name('livros.create');
Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');
Route::delete('/livros/{livro}', [LivroController::class, 'destroy'])->name('livros.destroy');