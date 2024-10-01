<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f8fa; 
        }

        .container {
            max-width: 500px; 
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
    </style>
</head>
<body>


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5 shadow-lg w-100">
        <div class="text-center">
            <h1 class="display-5">Criar Usuário</h1>

            <form action="/NewUsu" method="POST">
                @csrf
              
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control form-control-lg" name="_nome" id="nome" required>
                </div>

              
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control form-control-lg" name="_senha" id="senha" required>
                </div>

               
                <button type="submit" class="btn btn-primary btn-lg w-100">Enviar</button>
            </form>

        
            <div class="mt-3">
                <a href="/dashboard" class="btn btn-link">Voltar à Home</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
