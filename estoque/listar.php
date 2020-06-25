<?php 
require_once '../bd.php';
require_once '../verificar2.php';
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
        echo("'lote':'".$est['lote']."',");
        echo("'data_de_vencimento':'".$est['data_de_vencimento']."',");
        echo("'data_de_chegada':'".$est['data_de_chegada']."',");
        echo("'cpf_funcionario':'".$est['cpf_funcionario']."'");
        
    echo('}');
    if(mysqli_num_rows($rs) != $cont){
        echo(",");
    }
endwhile;
echo(']}');


}
?>