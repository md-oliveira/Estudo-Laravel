<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f8fa; /* Fundo suave */
        }

        .container {
            max-width: 700px; /* Limita a largura da tabela */
        }

        .table {
            margin-top: 30px;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        h1 {
            font-weight: 300;
            color: #343a40;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-5">Lista de Produtos</h1>

        
        <table class="table table-striped table-bordered shadow-lg">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($produtos))
                    @foreach ($produtos as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->qnt }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">Nenhum Produto encontrado!</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <a href="/dashboard" class="btn btn-link">Voltar à Home</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
