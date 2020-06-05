<?php 
    require_once 'bd.php';
     
    $sql = "SELECT id, nome, cpf, cnpj FROM cliente";
    $resultado = mysqli_query($banco,$sql);
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 class='text-center'> Listar - clientes </h1>
        <a class= "botao" href="inserir.php">Inserir clientes</a>
        <hr>
        <div class="container">
        <table>
            <tr>
                <td>Codigo</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>CNJP</td>
            </tr>
            <?php
                 while($id = mysqli_fetch_assoc($resultado)):
            ?>
            <tr>
                <td><?= $id['id'] ?></td> 
                <td><?= $id['nome'] ?></td>
                <td><?= $id['cpf'] ?></td>
                <td><?= $id['cnpj'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $id['id'] ?>">Editar |</a> 
                    <a href="excluir.php?id=<?= $id['id'] ?>">Excluir </a>
                </td>
            </tr>
                  <?php endwhile; ?> 
        </table>
        </div>
</body>
</html>