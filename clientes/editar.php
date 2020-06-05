<?php 
    require_once 'bd.php';
    
    $id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);
    $id = intval($id);
    $sql = "SELECT *
            FROM cliente
            WHERE id = $id";
    $resultado = mysqli_query($banco,$sql);
    $id = mysqli_fetch_assoc($resultado);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/site.css">
    
    <title>Editar Cliente</title>
</head>
<body>
    <h1 class='text-center'>Editar Cliente</h1>
    <hr>
    <div class="container">
    <form action="editar_proc.php" method="post">
        <label for="id">Codigo</label><br>
        <input value="<?= $id['id']?>" type="text" id="id" name="id"><br>

        <label for="nome">Nome</label><br>
        <input value="<?= $id['nome']?>"   type="text" id="nome" name="nome"><br>

        <label for="cpf">CPF</label><br>
        <input value="<?= $id['cpf']?>"    type="text" id="cpf" name="cpf"><br>

        <label for="cnpj">CNPJ</label><br>
        <input value="<?= $id['cnpj']?>"   type="text" id="cnpj" name="cnpj"><br>
        
        <input type="hidden" name="id" value="<?= $id['id'] ?>">

        <button type="submit">Enviar</button>
    </form>
    </div>
</body>
</html>