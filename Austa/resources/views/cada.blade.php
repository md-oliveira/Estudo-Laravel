<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f8fa; 
        }

        .container {
            max-width: 400px; 
        }

        .card {
            border-radius: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        h1 {
            font-weight: 300;
            margin-bottom: 30px;
            color: #343a40;
        }

        .form-control-lg {
            border-radius: 8px;
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
  
  
  <div class="card p-5 shadow-lg">
    <div class="text-center">
      <h1 class="display-5">Cadastrar Produto</h1>

        <form action="/insert" method="post">
            @csrf
          
            <div class="mb-3">
                <input type="text" class="form-control form-control-lg" required placeholder="Nome do Produto" name="_nome">
            </div>

           
            <div class="mb-3">
                <input type="text" class="form-control form-control-lg" required placeholder="Quantidade" name="_quant">
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
