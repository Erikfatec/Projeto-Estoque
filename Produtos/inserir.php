<?php
require_once '../bd.php';
require_once '../verifica2.php';

$nome =   filter_input(INPUT_POST,'nome',FILTER_DEFAULT); 
$tipo =    intval(filter_input(INPUT_POST,'tipo',FILTER_DEFAULT));
$cpf_funcionario =   filter_input(INPUT_POST,'cpf_funcionario',FILTER_DEFAULT);
$fornecedor =   filter_input(INPUT_POST,'fornecedor',FILTER_DEFAULT);

$sql = "INSERT INTO produtos (nome,tipo,cpf_funcionario,fornecedor) VALUES (?,?,?,?)";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'siss',$nome,$tipo,$cpf_funcionario,$fornecedor);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>