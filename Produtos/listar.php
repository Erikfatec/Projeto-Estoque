<?php 
require_once '../bd.php';
require_once '../verificar2.php';
$sql = "SELECT * FROM produtos";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('{"produtos":[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');

        echo("'id':".$est['id'].",");
        echo("'nome':'".$est['nome']."',");
        echo("'tipo':'".$est['tipo']."',");
        echo("'fornecedor':'".$est['fornecedor']."',");
        echo("'usuario':'".$est['cpf_funcionario']."'");
    echo('}');
    $cont++;
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile; 
echo(']}');


}
?>