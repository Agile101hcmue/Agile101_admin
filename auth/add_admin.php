<?php
    session_start();

    include("../db.php");
    include("../function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $admin_name = $_POST['admin_name'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $phone = $_POST['phone'];
        // $password = $_POST['password'];
    
        if(!empty($admin_name) && !empty($password) && !is_numeric($admin_name) && !empty($role) && !empty($phone)){
            $admin_id = random_num(20);
            $query = "insert into admin (admin_id, admin_name, role, phone, password) values ('$admin_id', '$admin_name', '$role','$phone', '$password')";
            mysqli_query($con, $query);

            header("Location: ../index.php");
            die;
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
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    
    <title>Thêm quản trị viên</title>
</head>
<body>
    <header>
        <?php 
            include '../header.php';
            include '../other_components_ui/sidebar.php';
        ?>
    </header>
    <main>
        <h2 class="text-center">Thêm quản trị viên mới</h2>
        <form class="mt-5" action="" method="POST" align="center">
            <div>
                <label for=""><strong>Tên admin</strong>:</label> <input type="text" name="admin_name" id="admin_name"><br>
            </div>
            <!-- <input type="text" name="role" id="role"><br> -->
            <div class="mt-4">
                <label for=""><strong>Chọn vị trí</strong>:</label>
                <select name="role" id="role">
                    <option value="boss">Giám đốc kinh doanh</option>
                    <option value="manager">Quản lý cửa hàng</option>
                    <option value="it-support">Bộ phận CNTT</option>
                </select><br>
            </div>
            <div class="mt-4">
                <label for=""><strong>Thiết lập số điện thoại</strong>:</label> <input type="tel" name="phone" id="phone"><br>
            </div>
            <div class="mt-4">
                <label for=""><strong>Thiết lập mật khẩu</strong></label> <input type="password" name="password" id="password"><br>
            </div>
            <div class="mt-4">
                <input type="submit" class="btn btn-primary" value="Thêm người này"><br>
            </div>
        </form>
    </main>
</body>
</html>