<?php 
require_once '../bd.php';
require_once '../verificar1.php';
$sql = "SELECT * FROM estoque";
$rs = mysqli_query($bd,$sql);
$cont =0;
if(mysqli_error($bd) == ''){
    echo('{"estoques":[');
while($est = mysqli_fetch_assoc($rs)):
    echo('{');

        echo("'produto':'".$est['produto']."',");
        echo("'peso':".$est['peso'].",");
        echo("'quantidade':".$est['quantidade'].",");
        echo("'datadevencimento':'".$est['data_de_vencimento']."',");
        echo("'datadechegada':'".$est['data_de_chegada']."',");
        echo("'cpf':'".$est['cpf_funcionario']."'");
    echo('}');
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile;
echo(']}');


}
?>