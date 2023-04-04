<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "e_commerce_web";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
        die("404 error!");
    }
    define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT']."/Agile101_admin/cache/uploads/"); // you have to change $_SERVER['DOCUMENT_ROOT'] to database domain before deploying
    // define("FETCH_SRC",$_SERVER['DOCUMENT_ROOT']."/e_commerce_admin/cache/uploads/");
    define("FETCH_SRC","http://127.0.0.1/Agile101_admin/cache/uploads/"); // you have to change the domain to the new domain that you will deploy into it.
    define("DOMAIN", "http://127.0.0.1/Agile101_admin/");
?>