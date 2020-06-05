<?php 
require_once 'bd.php';
$produto = filter_input(INPUT_POST,'produto',FILTER_DEFAULT);
$peso = filter_input(INPUT_POST,'peso',FILTER_DEFAULT);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_DEFAULT);
$datavenc = filter_input(INPUT_POST,'datavencimento',FILTER_DEFAULT);
$datachega = filter_input(INPUT_POST,'datachegada',FILTER_DEFAULT);
$sql = "UPDATE estoque SET peso=?,quantidade=?,datadevencimento='?',datadechegada='?' WHERE codigo='?')";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'ddsss',$peso,$quantidade,$datavenc,$datachega,$produto);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo("{'editar':true}");
}else{
    echo("{'editar':false}");
}
?>