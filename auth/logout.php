<?php
    session_start();
    // admin logout
    if(isset($_SESSION['admin_id'])){
        unset($_SESSION['admin_id']);
    }

    header("Location: login.php");
    die;
?>