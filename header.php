<?php
    define("DOMAIN", "http://127.0.0.1/e_commerce_admin/"); // remmeber to replace/change new domain before deploy/hosting
?>

<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="<?php echo DOMAIN; ?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><b>&nbsp;Agile101 - Administrator</b>
        </a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search">
        </form>
        <div class="col-md-3 text-end">
        <?php
            include 'db.php';
            function check_session_that_change_btn_displayed_on_navbar($con){ // this func will check user's session, if logged in ? show login btn : no login btn
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

            //session_start();

            $user_data = check_session_that_change_btn_displayed_on_navbar($con);

            if(!isset($_SESSION['admin_id'])){
                echo '
                    <a href="./auth/login.php"><input type="button" class="btn btn-outline-primary me-2" value="Đăng nhập"></a>';
            }
            else{
                echo "<strong>Xin chào, ";
                echo $user_data['admin_name'];
                echo '</strong>';
                echo '<a href="./auth/logout.php"><input type="button" class="btn btn-outline-primary me-2 ms-3" value="Đăng xuất"></a>';
            }
        ?>
            
        </div>
        </header>
    </div>