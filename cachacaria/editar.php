<?php
    require_once 'bd.php';
    $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);
    $id = intval($id);
    $sql="SELECT * FROM usuario WHERE id = $id";
    $resultado = mysqli_query($banco,$sql);
    $usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="adm.css">
</head>
<body>

    <blockquote class="blockquote text-center">
        <p class="mb-0"><h1>Editar Usuario</h1></p>
    </blockquote>


    <hr>

    <div class="container">
    <form action="editar_proc.php" method="post" enctype="multipart/form-data" >
        
        <label for="nome">Nome</label><br>
        <input class="form-control" value="<?= $usuario['nome'] ?>" type="text" id="nome" name="nome"><br>

        <label for="cpf">CPF</label><br>
        <input class="form-control" value="<?= $usuario['cpf'] ?>" type="int" id="cpf" name="cpf"><br>

        <label for="senha">Senha</label><br>
        <input class="form-control" value="<?= $usuario['senha'] ?>" type="password" id="senha" name="senha"><br>

        <label for="tipo">Tipo</label><br>
        <input class="form-control" value="<?= $usuario['tipo'] ?>" type="text" id="tipo" name="tipo"><br>

        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>
    </div>

</body>
</html>
