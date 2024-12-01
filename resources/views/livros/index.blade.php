@extends('layouts.app')

@section('content')
    <h1>Lista de Livros</h1>
    
    <!-- Botão para adicionar um novo livro -->
    <a href="/livros/adicionar" class="btn btn-success mb-3">Adicionar Novo Livro</a>

    <!-- Exibir mensagem de sucesso, se houver -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Resumo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>{{ $livro->resumo }}</td>
                    <td>
                        <!-- Formulário para excluir o livro -->
                        <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
