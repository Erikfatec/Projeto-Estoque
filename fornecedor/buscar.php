<?php 
require_once '../bd.php';
require_once '../verificar2.php';

$id = filter_input(INPUT_POST,'nome',FILTER_DEFAULT);
$id = mysqli_real_escape_string($bd,$id);
$sql = "SELECT * FROM fornecedor WHERE nome =".$id;
$rs = mysqli_query($bd,$sql);
if(mysqli_error($bd) == '' && $rs->num_rows > 0){
    echo('{"estoques":[');
    $est = mysqli_fetch_assoc($rs);
    echo('{');

        echo("'id':'".$est['id']."',");
        echo("'nome':'".$est['nome_empresa']."',");
        echo("'cnpj':'".$est['cnpj']."'");
     
   
    echo('}');
echo(']}'); 


}
?>