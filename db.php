<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "e_commerce_web";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
        die("404 error!");
    }
?>