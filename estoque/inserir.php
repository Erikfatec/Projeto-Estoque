<?php 
require_once '../bd.php';
require_once '../verificar1.php';
$produto = filter_input(INPUT_POST,'produto',FILTER_DEFAULT);
$peso = doubleval( filter_input(INPUT_POST,'peso',FILTER_DEFAULT));
$quantidade = intval(filter_input(INPUT_POST,'quantidade',FILTER_DEFAULT));
$datavenc = filter_input(INPUT_POST,'datavencimento',FILTER_DEFAULT);
$datachega = filter_input(INPUT_POST,'datachegada',FILTER_DEFAULT);
$cpf = filter_input(INPUT_POST,"cpf",FILTER_DEFAULT);
$sql = "INSERT INTO estoque(produto,peso,quantidade,data_de_vencimento,data_de_chegada,cpf_funcionario) VALUES ('?',?,?,'?','?','?')";
$rs = mysqli_prepare($bd,$sql);
mysqli_stmt_bind_param($rs,'sdisss',$produto,$peso,$quantidade,$datavenc,$datachega,$cpf);
mysqli_stmt_execute($rs);
if(mysqli_error($bd) == ''){
    echo("{'status':true}");
}else{
    echo("{'status':false}");
}
?>