<?php
    require("connection.php");

    if(isset($_POST['addproduct'])){
        // print_r($_POST);
        // print_r($_FILES['image']);
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($con, $value);
        }
        // print_r($_POST[$key]);

        $query = "INSERT INTO `product`(`name`,`category`, `price`, `description`, `quantity`) VALUES ('$_POST[name]', '$_POST[category]', '$_POST[price]','$_POST[desc]','$_POST[quantity]')";
        if(mysqli_query($con, $query)){
            header("Location: manage.php?success=added");
        }
        else{
            header("Location: manage.php?alert=add_failed");
        }
    }

    if(isset($_GET['rem']) && $_GET['rem'] > 0){
        $query = "select * from `product` where `id` = '$_GET[rem]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        $query = "delete from `product` where `id` = '$_GET[rem]'";
        if(mysqli_query($con, $query)){
            header("Location: manage.php?success=removed");
        }
        else{
            header("Location: manage.php?alert=remove_failed");
        }
    }

    if(isset($_POST['editproduct'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($con, $value);
        }
        // print_r($_POST);
        // print_r($_FILES);

      
    }

?>
