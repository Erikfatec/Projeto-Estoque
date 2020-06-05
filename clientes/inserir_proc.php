<?php
require_once 'bd.php';

$id =     filter_input(INPUT_POST,'id',FILTER_DEFAULT);
$nome =   filter_input(INPUT_POST,'nome',FILTER_DEFAULT); 
$cpf =    filter_input(INPUT_POST,'cpf',FILTER_DEFAULT);
$cnpj =   filter_input(INPUT_POST,'cnpj',FILTER_DEFAULT);

$sql = "INSERT INTO cliente (id,nome,cpf,cnpj) VALUES (?,?,?,?)";
$rs = mysqli_prepare($banco,$sql);
mysqli_stmt_bind_param($rs,'isss',$id,$nome,$cpf,$cnpj);
mysqli_stmt_execute($rs);

if(mysqli_error($bd) == ''){
    echo("{'inserir':true}");
}else{
    echo("{'inserir':false}");
}
?>