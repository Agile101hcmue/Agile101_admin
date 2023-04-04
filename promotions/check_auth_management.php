<?php
    include '../db.php';
    function check_login($con){
        if( isset($_SESSION['admin_id']) ){
                $id = $_SESSION['admin_id'];
                $query = "select * from admin where admin_id = '$id' limit 1";      
                $result = mysqli_query($con,$query);
    
                if($result && mysqli_num_rows($result) > 0){
                    $admin_data = mysqli_fetch_assoc($result);
                    return $admin_data;
                }
            }

            header("Location: ../auth/login.php");
            die;
        }