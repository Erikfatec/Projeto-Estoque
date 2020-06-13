<?php 
require_once '../bd.php';

$id = intval(filter_input(INPUT_POST,'cpf',FILTER_DEFAULT));
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM usuarios WHERE cpf =".$id;
$rs = mysqli_query($bd,$sql);
if(mysqli_error($bd) == '' && $rs->num_rows > 0){
    echo('{"usuarios":[');
    $est = mysqli_fetch_assoc($rs);
    echo('{');

        echo("'id':".$est['id'].",");
        echo("'nome':'".$est['nome']."',");
        echo("'cpf':'".$est['cpf']."',");
        echo("'senha':'".$est['senha']."',");
        echo("'tipo':'".$est['tipo']."'");
    echo('}');
echo(']}');


}
?>