<?php 
require_once '../bd.php';
require_once '../verificar1.php';
$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM usuarios WHERE id =".$id;
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