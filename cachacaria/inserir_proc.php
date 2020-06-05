<?php
require_once 'bd.php';

$nome = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_DEFAULT);
$senha= filter_input(INPUT_POST,'senha',FILTER_DEFAULT);
$tipo= filter_input(INPUT_POST,'tipo',FILTER_DEFAULT);

$sql = "INSERT INTO usuario (nome,cpf,senha,tipo) VALUES (?,?,?,?)";  
$rs = mysqli_prepare($banco,$sql); 
mysqli_stmt_bind_param($rs,'ssss',$nome,$cpf,$senha,$tipo);
mysqli_stmt_execute($rs);
