<?php
require_once '../bd.php';

$id = intval(filter_input(INPUT_POST,'id',FILTER_DEFAULT));
$nome = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_DEFAULT);
$senha = filter_input(INPUT_POST,'senha',FILTER_DEFAULT);
$tipo= filter_input(INPUT_POST,'tipo',FILTER_DEFAULT);
$senha = password_hash($senha,PASSWORD_DEFAULT);

$sql = $sql = "UPDATE usuarios SET  nome = ?,  cpf = ?, senha = ?, tipo = ? WHERE id = ?";
$rs = mysqli_prepare($bd,$sql); 
mysqli_stmt_bind_param($rs,'ssssi',$nome,$cpf,$senha,$tipo,$id);
mysqli_stmt_execute($rs);

if (mysqli_error($bd)=='') {
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>