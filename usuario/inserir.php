<?php
require_once '../bd.php';
require_once '../verificar1.php';
$nome = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_DEFAULT);
$senha= filter_input(INPUT_POST,'senha',FILTER_DEFAULT);
$tipo= filter_input(INPUT_POST,'tipo',FILTER_DEFAULT);
$senha = password_hash($senha,PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios (nome,cpf,senha,tipo) VALUES (?,?,?,?)";  
$rs = mysqli_prepare($bd,$sql); 
mysqli_stmt_bind_param($rs,'ssss',$nome,$cpf,$senha,$tipo);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo('{"status":true}');
}else{
    echo('{"status":false}');
}
?>
