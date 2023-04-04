<?php
    session_start();
    include "./check_auth_management.php";
    $admin_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Khuyến mãi</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<body>
    <!-- add product form -->
    <h2 align="center">Thêm Khuyến Mãi Mới</h2>
    <form action="crud.php" method="post" enctype="multipart/form-data">
        <label for="">Tên: </label> <input type="text" name="name" id="" required><br>
        <label for="">Chi tiết: </label> <textarea name="desc" id="" cols="30" rows="10" required></textarea><br>
        <label for="">Hình ảnh hiển thị: </label> <input type="file" name="image" id="" accept=".jpg,.png,.jpeg" required><br>
        <input type="submit" value="Add This Promotion" name="addproduct">
    </form>
    <h2 align="center">Quản lý các Khuyến mãi</h2>
    <?php
        if(isset($_GET['alert'])){
            if($_GET['alert'] == 'img_upload'){
                echo "<script> 
                    window.alert('Tải ảnh lên thất bại. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'img_rem_fail'){
                echo "<script> 
                    window.alert('Thao tác xử lý ảnh thất bại. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'add_failed'){
                echo "<script> 
                    window.alert('Không thể thêm mới khuyến mãi. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'remove_failed'){
                echo "<script> 
                    window.alert('Thao tác xử lý khuyến mãi thất bại. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'update_failed'){
                echo "<script> 
                    window.alert('Đã có lỗi xảy ra. Vui lòng thử lại!')
                </script>";
            }
        }else if(isset($_GET['success'])){
            if($_GET['success'] == 'updated'){
                echo "<script> 
                    window.alert('Cập nhật thành công!')
                </script>";
            }
            if($_GET['success'] == 'added'){
                echo "<script> 
                    window.alert('Đã thêm thành công!')
                </script>";
            }
            if($_GET['success'] == 'removed'){
                echo "<script> 
                    window.alert('Đã xóa thành công!')
                </script>";
            }
        }

    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name of promotions</th>
                <th scope="col">Image Hyperlink</th>
                <th scope="col">Image Displayed</th>
                <th scope="col">Desciption</th>
                <th scope="col">Action (Rm)</th>
                <th scope="col">Action (Ed)</th>
                <th scope="col">Action (Vw)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("../promotions/connection.php");
                $query = "select * from `promotion`";
                $result = mysqli_query($con, $query);
                $fetch_src = FETCH_SRC;
                $domain = DOMAIN;
                $request_to_items = null; // please make a request to view items details here
                $i =1;

                while($fetch = mysqli_fetch_assoc($result)){
                    echo <<< product
                    <tr>
                        <th>$fetch[id]</th>
                        <td>$fetch[name]</td>
                        <td>$fetch_src$fetch[image]</td>
                        <td><img src="../cache/uploads/$fetch[image]" width="150px" ></td> <!-- merge images location links (fetch_src and fetch (from db) -->
                        <td>$fetch[description]</td>
                        <td><button class="btn btn-danger" onclick="confirm_rem($fetch[id])">Remove</button></td>
                        <td><button class="btn btn-warning"><a href="edit.php?edit=$fetch[id]">Edit</a></button></td>
                        <td><button class="btn btn-warning"><a href="$domain$request_to_items">View</a></button></td>
                    </tr>
                product;
                $i++;
                }
            ?>
            <script>
                function confirm_rem(id){
                    // window.confirm("Are you sure wanna remove this item?");
                    window.location.href = "crud.php?rem=" + id;
                }
            </script>
        </tbody>
    </table>


</body>
</html>