@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Livro</h1>
    <form action="/livros" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="mb-3">
            <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
            <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
        </div>
        <div class="mb-3">
            <label for="resumo" class="form-label">Resumo</label>
            <textarea class="form-control" id="resumo" name="resumo"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Livro</button>
    </form>
@endsection
