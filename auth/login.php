<?php
    session_start();

    include("../db.php");
    include("../function.php");

    // $admin_data = check_login($con);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $admin_name = $_POST['admin_name'];
        $password = $_POST['password'];

        if(!empty($admin_name) && !empty($password) && !is_numeric($admin_name)){
            // $admin_id = random_num(20);
            $query = "select * from admin where admin_name = '$admin_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $admin_data = mysqli_fetch_assoc($result);
                    // return $admin_data;
                    if($admin_data['password'] === $password){
                        $_SESSION['admin_id'] = $admin_data['admin_id'];
                        header("Location: ../index.php");
                        die;
                    }
                }
            }
            echo "<script> 
                    alert('Sai thông tin đăng nhập quản trị')
                </script>";
        }
        else{
            echo "<script> 
                    alert('Không được để trống các trường')
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile101 - Xác thực quản trị</title>
</head>
<body>
    <div align="center">
        <form action="" method="POST">
            <h1 class="text-center">Login</h1>
            <input type="text" name="admin_name" id="admin_name"><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Login"><br>
        </form>
    </div>
</body>
</html>