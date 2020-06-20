<?php 
require_once '../bd.php';
require_once '../verificar1.php';
$produto = filter_input(INPUT_POST,'produto',FILTER_DEFAULT);
$peso = filter_input(INPUT_POST,'peso',FILTER_DEFAULT);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_DEFAULT);
$datavenc = filter_input(INPUT_POST,'data_de_vencimento',FILTER_DEFAULT);
$datachega = filter_input(INPUT_POST,'data_de_chegada',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST, "cpf_funcionario",FILTER_DEFAULT)
$sql = "UPDATE estoque SET peso=?,quantidade=?,data_de_vencimento='?',data_de_chegada='?',cpf_funcionario='?' WHERE codigo='?')";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'ddsss',$peso,$quantidade,$datavenc,$datachega,$cpf,$produto);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>