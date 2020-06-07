<?php
require_once 'bd.php';

$id =     filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$nome =   filter_input(INPUT_POST,'nome',FILTER_DEFAULT); 
$tipo =    filter_input(INPUT_POST,'tipo',FILTER_DEFAULT);
$cpf_funcionario =   filter_input(INPUT_POST,'cpf_funcionario',FILTER_DEFAULT);
$fornecedor =   filter_input(INPUT_POST,'fornecedor',FILTER_DEFAULT);

$sql = "INSERT INTO produtos (id,nome,tipo,cpf_funcionario,fornecedor) VALUES (?,?,?,?,?)";
$rs = mysqli_prepare($banco,$sql);
mysqli_stmt_bind_param($rs,'isiis',$id,$nome,$tipo,$cpf_funcionario,$fornecedor);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'inserir':true}");
}else{
    echo("{'inserir':false}");
}
?>