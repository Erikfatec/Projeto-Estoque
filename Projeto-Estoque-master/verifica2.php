<?php
    session_start();
    if(!isset($_SESSION['vendedor'])  ){
        
    }else{
        header("location: autorizado.php");
    }
   


?>