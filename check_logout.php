<?php
    require_once('function.php');
    $logout_f = new DB_conn();

    if(isset($_GET['logout'])){
        $logout_f->logout_form();
        header("Location: index.php?p=home");
    }else{
        header("Location: index.php?p=home");
    }
    
    if(isset($_POST['logout'])){
        $logout_f->logout_form();
        header("Location: index.php?p=home");
    }else{
        header("Location: index.php?p=home");
    }
?>