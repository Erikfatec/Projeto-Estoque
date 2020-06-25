<?php 
require_once '../../bd.php';
require_once '../../verificar2.php';
$sql = "SELECT * FROM categorias";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('{"categorias":[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');

        echo("'id':".$est['id'].",");
        echo("'nome':'".$est['nome']."',");
    echo('}');
    $cont++;
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile; 
echo(']}');


}
?>