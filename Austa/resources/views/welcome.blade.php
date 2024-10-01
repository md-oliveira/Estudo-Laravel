<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

   
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
           
            <div class="card shadow-lg rounded">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Bem-vindo de volta!</h3>
                </div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                     
                        <div class="form-group">
                            <label for="_usuario">Usuário</label>
                            <input type="text" class="form-control" id="_usuario" name="_usuario" placeholder="Digite seu usuário" required>
                        </div>

                       
                        <div class="form-group">
                            <label for="_senha">Senha</label>
                            <input type="password" class="form-control" id="_senha" name="_senha" placeholder="Digite sua senha" required>
                        </div>

                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>