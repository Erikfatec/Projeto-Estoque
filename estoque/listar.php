<?php 
require_once 'bd.php';
$sql = "SELECT * FROM estoque";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');

        echo("'produto':'".$est['produto']."',");
        echo("'peso':".$est['peso'."',"]);
        echo("'quantidade':".$est['quantidade'].",");
        echo("'datadevencimento':'".$est['datadevencimento']."',");
        echo("'datadechegada':'".$est['datadechegada']."'");
    echo('}');
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile;
echo(']');


}
?>