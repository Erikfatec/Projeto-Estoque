<?php 
require_once '../bd.php';

$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));

$sql = "DELETE FROM usuarios WHERE id = ?";

$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'i',$id);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>
