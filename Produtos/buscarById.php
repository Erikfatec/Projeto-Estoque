<?php 
require_once '../bd.php';
require_once '../verificar2.php';
$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM produtos WHERE id =".$id;
$rs = mysqli_query($bd,$sql);
if(mysqli_error($bd) == '' && $rs->num_rows > 0){
    echo('{"produtos":[');
    $est = mysqli_fetch_assoc($rs);
    echo('{');

        echo("'id':".$est['id'].",");
        echo("'nome':'".$est['nome']."',");
        echo("'tipo':'".$est['tipo']."',");
        echo("'fornecedor':'".$est['fornecedor']."',");
        echo("'usuario':'".$est['cpf_funcionario']."'");
   
       
    echo('}');
echo(']}');


}
?>