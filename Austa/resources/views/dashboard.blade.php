<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f8fa; 
        }

        .container {
            max-width: 500px;
        }

        h1 {
            font-weight: 300;
            color: #343a40;
            margin-bottom: 30px;
        }

        .btn-custom {
            border-radius: 30px; 
            padding: 15px 20px;
            font-size: 1.2rem;
            width: 100%;
            margin-bottom: 15px;
            transition: transform 0.2s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05); 
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-dark {
            background-color: #343a40;
        }
    </style>
</head>
<body>

   
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1>Escolha uma Ação!</h1>

          
            <div class="d-grid gap-2">
                <a href="/cada" class="btn btn-primary btn-custom">Cadastrar Produto</a>
                <a href="/listar" class="btn btn-secondary btn-custom">Ver Lista de Produto</a>
                <a href="/listarDel" class="btn btn-danger btn-custom">Deletar Produto</a>
                <a href="/listarUpt" class="btn btn-warning btn-custom">Atualizar Produto</a>
                <a href="/CriaUsu" class="btn btn-success btn-custom">Criar Usuário</a>
                
                <form action="/sair" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-custom">Sair</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
