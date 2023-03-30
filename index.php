<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile101 - Administrator Panel</title>
</head>
<body>
    <div>
        <h4>Hello World</h4>
    </div>
    <div>
        -- check login session --
        <?php
                include 'db.php';
                function check_session_that_change_btn_displayed_on_navbar($con){
                    if( isset($_SESSION['admin_id']) ){
                        $id = $_SESSION['admin_id'];
                        $query = "select * from admin where admin_id = '$id' limit 1";      
                        $result = mysqli_query($con,$query);
        
                        if($result && mysqli_num_rows($result) > 0){
                            $user_data = mysqli_fetch_assoc($result);
                            return $user_data;
                        }
                    }
                }
                $user_data = check_session_that_change_btn_displayed_on_navbar($con);

                if(!isset($_SESSION['admin_id'])){
                    echo '<strong>Oh, bạn chưa đăng nhập! </strong>
                        <a href="./auth/login.php"><input type="button" class="btn btn-outline-primary me-2" value="Đăng nhập"></a>';
                }
                else{
                    echo "<strong>Xin chào, ";
                    echo $user_data['admin_name'];
                    echo '</strong>';
                    echo '<a href="./auth/logout.php"><input type="button" class="btn btn-outline-primary me-2 ms-3" value="Đăng xuất"></a>';
                    echo '</div>';
                    echo '<div>';
                    echo '--- add new admin (require after an admin had logged in) ---';
                    echo '<a href="./auth/add_admin.php"><input type="button" class="btn btn-outline-primary me-2" value="Thêm admin mới"></a>';
                    echo '</div>';
                }
        ?>
</body>
</html>