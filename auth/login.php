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
            // header("Location: ../index.php");
            // die;
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
    <title>Xác thực quản trị</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/all.min.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="../bootstrap_css/all.min.css">
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap_css/all.min.css">
    <link rel="stylesheet" href="./css/login-form.css">
    <script src="../bootstrap-5.0.2-dist/js/jquery.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/popper.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/all.min.js"></script>
</head>

<body class="text-center">
    <div class="container text-center mt-5 ">
        <form action="" method="POST">
            <div class="text-center h3 fw-normal">
                Xác thực
            </div>
            <small class="mb-5 "><i>Cần phải xác minh quyền quản trị trước khi thực hiện các thao tác quản lý</i></small>
            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Tên đăng nhập:</label>
                    <input type="text" class="form-control mt-5"  name="admin_name" id="admin_name">
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Mật khẩu:</label>
                    <input type="password" class="form-control mt-5" id="password"
                        name="password">
                </div>
            </div>

            <div>
                <input class="btn btn-lg btn-primary mt-3 text-center" type="submit" value="Đăng nhập">
            </div>
        </form>
        <div class="mt-5">
            <span>Chưa có tài khoản? <a href="./signup.php">Đăng ký ngay</a></span>
        </div>
        <div>
            <a href="../" class="mt-4">Quay về trang chủ</a>
        </div>
    </div>

</body>
</html>