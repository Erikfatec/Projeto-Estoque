<?php 
require_once '../bd.php';
require_once '../verificar2.php';

$id = intval(filter_input(INPUT_POST,'produto',FILTER_DEFAULT));
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM estoque WHERE produto =".$id;
$rs = mysqli_query($bd,$sql);
if(mysqli_error($bd) == '' && $rs->num_rows > 0){
    echo('{"estoques":[');
    $est = mysqli_fetch_assoc($rs);
    echo('{');

        echo("'produto':'".$est['produto']."',");
        echo("'peso':".$est['peso'].",");
        echo("'quantidade':".$est['quantidade'].",");
        echo("'lote':'".$est['lote']."',");
        echo("'data_de_vencimento':'".$est['data_de_vencimento']."',");
        echo("'data_de_chegada':'".$est['data_de_chegada']."',");
        echo("'cpf_funcionario':'".$est['cpf_funcionario']."'");
        
   
    echo('}');
echo(']}');


}
?>