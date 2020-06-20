<?php
require_once '../../bd.php';
require_once '../../verifica2.php';

$nome =   filter_input(INPUT_POST,'nome',FILTER_DEFAULT); 


$sql = "INSERT INTO categorias (nome) VALUES (?)";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'s',$nome);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>