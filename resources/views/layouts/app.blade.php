<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #e9f7df;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #28a745;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color: white;">Biblioteca</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/livros" style="color: white;">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/livros/adicionar" style="color: white;">Adicionar Livro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
