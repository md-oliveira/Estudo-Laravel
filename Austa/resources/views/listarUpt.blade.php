<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f8fa; 
        }

        .container {
            max-width: 900px; 
            margin-top: 50px;
        }

        h1 {
            font-weight: 300;
            color: #343a40;
            margin-bottom: 30px;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .btn-warning {
            color: white;
            font-weight: bold;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center">
        <h1 class="display-5">Lista de Produtos</h1>

       
        <table class="table table-striped table-bordered table-hover shadow-lg">
            <thead class="thead-light">
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($lista))
                    @foreach ($lista as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->qnt }}</td>
                            <td>
                                
                                <form action="/capturaUpt" method="GET" style="display:inline;">
                                    <button type="submit" class="btn btn-warning">Atualizar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center">Nenhum Produto encontrado!</td>
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
