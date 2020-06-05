<?php
require_once 'bd.php';

$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$nome = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_DEFAULT); 
$cnpj = filter_input(INPUT_POST,'cnpj',FILTER_DEFAULT);

$sql = "UPDATE cliente SET nome = ?, cpf = ?, cnpj = ? WHERE id = ?" ;

$rs = mysqli_prepare($banco,$sql);
mysqli_stmt_bind_param($rs,'sssi',$nome,$cpf,$cnpj,$id);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'editar':true}");
}else{
    echo("{'editar':false}");
}
?>