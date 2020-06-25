<?php
require_once '../bd.php';
require_once '../verificar2.php';
$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$nome_empresa = filter_input(INPUT_POST,'nome_empresa',FILTER_DEFAULT);
$cnpj = filter_input(INPUT_POST,'cnpj',FILTER_DEFAULT);


$sql = $sql = "UPDATE fornecedor SET  nome_empresa = ?,  cnpj = ? WHERE id = ?";
$rs = mysqli_prepare($bd,$sql); 
mysqli_stmt_bind_param($rs,'sii',$nome_empresa,$cnpj,$id);
mysqli_stmt_execute($rs);

if (mysqli_error($bd)=='') {
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>