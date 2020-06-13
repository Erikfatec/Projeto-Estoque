<?php 
require_once 'bd.php';
$cpf = filter_input(INPUT_POST,'cpf', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST,'senha', FILTER_DEFAULT);

session_start();
$cpf = mysqli_real_escape_string($bd, $cpf);
//var_dump($cpf);
$sql = "SELECT id,cpf,senha,tipo      FROM   cpf WHERE cpf = '$cpf' ";
$resultado = mysqli_query($bd, $sql);
//echo mysqli_error($bd);


if($resultado->num_rows >= 1){
    $cpf = mysqli_fetch_assoc($resultado);
    if(password_verify($senha, $cpf['senha'])){
     
        if($cpf['tipo'] == '1'){
          $_SESSION['admin'] = $cpf['id'];//define que é admin
          echo("{'status':true}");
     
        }else{
          $_SESSION['comum'] = $cpf['id'];//define que é user comum
          echo("{'status':true}");
        
        }
        
    }else{
        echo("{'status':false}");
    }
}else{
    echo("{'status':false}");
}

?>