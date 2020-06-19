<?php
    session_start();
    if(!isset($_SESSION['admin'])  ){
        
    }else{
        header("location: autorizado.php");
    }
   


?>