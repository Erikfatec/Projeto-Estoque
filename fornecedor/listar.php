<?php 
require_once '../bd.php';
require_once '../verificar2.php';
$sql = "SELECT * FROM fornecedor";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('{"fornecedores":[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');
        echo("'id':'".$est['id']."',");
        echo("'nome':'".$est['nome_empresa']."',");
        echo("'cnpj':'".$est['cnpj']."'");
     
    echo('}');
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile;
echo(']}');


}
?>