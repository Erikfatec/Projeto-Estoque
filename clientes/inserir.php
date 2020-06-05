<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/site.css">
    <title>Inserira o Cliente</title>
    <link rel="stylesheet" href="../../css/adm.css">
</head>
<body>
    <h1 class='text-center'>Inserir Cliente</h1>
    <hr>
    <div class="container">
    <form action="inserir_proc.php" method="post">
        <label for="id">Codigo</label><br>
        <input type="text" id="id" name="id"><br>

        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome"><br>

        <label for="cpf">CPF</label><br>
        <input type="text" id="cpf" name="cpf"><br>

        <label for="cnpj">CNPJ</label><br>
        <input type="text" id="cnpj" name="cnpj"><br>

        <button type="submit">Enviar</button>
    </form>
    </div>
</body>
</html>