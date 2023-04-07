<?php
    session_start();
    include("db.php");

    include("function.php");
    $admin_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <!-- <script src="./js/print.js"></script> -->
    <title>Admin role</title>
</head>
<body>
    <header>
        <?php include("./header.php"); ?>
    </header>
    <div align="center">
        <h2>Phân vùng quản lý</h2>
    </div>

    <!-- custom from here -->
    <?php include './other_components_ui/sidebar.php'; ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="bouncing_text">
                    <small><strong> <--- Hãy chọn một mục để bắt đầu</strong></small>
                </div>
            </main>
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </div>
    </div>
    <?php include './footer.php'; ?>

</body>
</html>