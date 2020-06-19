<?php 
require_once '../bd.php';
require_once '../verificar1.php';
$sql = "SELECT * FROM usuarios";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('{"usuarios":[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');

        echo("'id':".$est['id'].",");
        echo("'nome':'".$est['nome']."',");
        echo("'cpf':'".$est['cpf']."',");
        echo("'senha':'".$est['senha']."',");
        echo("'tipo':'".$est['tipo']."'");
    echo('}');
    $cont++;
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile; 
echo(']}');


}
?>