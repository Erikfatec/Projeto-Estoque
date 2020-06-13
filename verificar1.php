<?php
    session_start();
    if(!isset($_SESSION['admin'])  ){
        echo("{'status':true}");
    }else{
        echo("{'status':false}");
    }
   


?>