<?php 
require_once 'bd.php';
$produto = filter_input(INPUT_POST,'produto',FILTER_DEFAULT);
$sql = "DELETE estoque WHERE codigo='?')";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'s',$produto);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo("{'editar':true}");
}else{
    echo("{'editar':false}");
}
?>