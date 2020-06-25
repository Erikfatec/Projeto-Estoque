<?php 
require_once '../bd.php';
require_once '../verificar2.php';

$id = filter_input(INPUT_POST,'cpf',FILTER_DEFAULT);
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM clientes WHERE cpf =".$id;
$rs = mysqli_query($bd,$sql);
if(mysqli_error($bd) == '' && $rs->num_rows > 0){
    echo('{"clientes":[');
    $est = mysqli_fetch_assoc($rs);
    echo('{');

        echo("'id':'".$est['id']."',");
        echo("'nome':'".$est['nome']."',");
        echo("'cnpj':'".$est['cnpj']."',");
        echo("'cpf':'".$est['cpf']."',");

        
   
    echo('}');
echo(']}');


}
?>