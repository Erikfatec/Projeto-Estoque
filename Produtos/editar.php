<?php
require_once '../bd.php';
require_once '../verificar1.php';

$id =    intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$nome =   filter_input(INPUT_POST,'nome',FILTER_DEFAULT); 
$tipo =    filter_input(INPUT_POST,'tipo',FILTER_DEFAULT);
$cpf_funcionario =   filter_input(INPUT_POST,'cpf_funcionario',FILTER_DEFAULT);
$fornecedor =   filter_input(INPUT_POST,'fornecedor',FILTER_DEFAULT);

$sql = "UPDATE produtos SET  nome = ?, tipo = ?, cpf_funcionario = ?, fornecedor = ? WHERE id = ?";

$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'ssssi',$nome,$tipo,$cpf_funcionario,$fornecedor,$id);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>