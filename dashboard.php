<?php
    session_start();
    if(isset($_SESSION['IS_LOGIN'])){
        echo "<h1>Login successful..</h1>";
    }else{
        header('index.php');
        die();
    }


?>