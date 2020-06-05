<?php 
require_once 'bd.php';

$id = intval(filter_input(INPUT_GET,'id',FILTER_DEFAULT));

$sql = "DELETE FROM usuario WHERE id = ?";

$rs = mysqli_prepare($banco,$sql);
mysqli_stmt_bind_param($rs,'i',$id);
mysqli_stmt_execute($rs);

if(mysqli_error($banco) == ''){
    echo("{'excluir':true}");
}else{
    echo("{'excluir':false}");
}
?>
