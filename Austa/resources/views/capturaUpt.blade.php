<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Atualizar Produto</h1>

        @php 
            session_start();

            $lista = session('listaProd');
            //var_dump($lista);

            if (!empty($lista) && isset($lista[0])) {
                $id = $lista[0]->id;  
                //var_dump($id);
            } else {
                echo "Nenhum produto encontrado.";
            }
        @endphp


    <form action="/UptProd" method="POST">
        @csrf
        <label>Novo nome do Protuto</label>
        <br>
            <input type="text" name="_nome" required>

        <br>
        <br>
        <br>

        <label>Quantidade</label>
        <br>
            <input type="text" name="_qnt" required>
        <br>
        <br>
        <br>
      
            <input type="hidden" name="_id" value="{{ $id }}">
            <input type="submit">

            
    </form>
</body>
</html>