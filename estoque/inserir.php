<?php 
require_once 'bd.php';
$produto = filter_input(INPUT_POST,'produto',FILTER_DEFAULT);
$peso = filter_input(INPUT_POST,'peso',FILTER_DEFAULT);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_DEFAULT);
$datavenc = filter_input(INPUT_POST,'datavencimento',FILTER_DEFAULT);
$datachega = filter_input(INPUT_POST,'datachegada',FILTER_DEFAULT);
$sql = "INSERT INTO estoque(produto,peso,quantidade,datadevencimento) VALUES ('?',?,?,'?','?')";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'sddss',$produto,$peso,$quantidade,$datavenc,$datachega);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo("{'inserir':true}");
}else{
    echo("{'inserir':false}");
}
?>