<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="adm.css">
</head>
<body>

    <blockquote class="blockquote text-center">
        <p class="mb-0"><h1>Inserir Usuarios</h1></p>
    </blockquote>
    <hr>

    <div class="container">
    <form action="inserir_proc.php" method="post" enctype="multipart/form-data" >
        <label for="nome">Nome</label><br>
        <input class="form-control" type="text" id="nome" name="nome"><br>

        <label for="cpf">CPF</label><br>
        <input class="form-control" type="int" id="cpf" name="cpf"><br>

        <label for="senha">Senha</label><br>
        <input class="form-control" type="password" id="senha" name="senha"><br>

        <label for="tipo">Tipo</label><br>
        <input class="form-control" type="text" id="tipo" name="tipo"><br>
        
        <button type="submit" class="btn btn-success">Enviar</button>
    </form> 
    </div>


</body>
</html>