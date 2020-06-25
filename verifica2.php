<?php
    session_start();
    if(!isset($_SESSION['vendedor']) || !isset($_SESSION['admin']) ){
        
    }else{
        header("location: autorizado.php");
    }
   


?>