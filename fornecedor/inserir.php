<?php
require_once '../bd.php';
require_once '../verificar2.php';
$nome_empresa = filter_input(INPUT_POST,'nome_empresa',FILTER_DEFAULT);
$cnpj = filter_input(INPUT_POST,'cnpj',FILTER_DEFAULT);

$sql = "INSERT INTO fornecedor (nome_empresa,cnpj) VALUES (?,?)";  
$rs = mysqli_prepare($bd,$sql); 
mysqli_stmt_bind_param($rs,'si',$nome_empresa,$cnpj);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>