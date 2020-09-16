<?php
    session_start();
    session_unset();
    if(isset($_SESSION["User"])){
        if(isset($_GET['logout'])){
            session_destroy();
            header("Location: \a\php\Main_login.php");
        }
    }
    else{
        session_destroy();
        header("Location: \a\php\Main_login.php");
    }  
?>