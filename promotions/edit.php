<!-- EDIT PROMOTIONS FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin Khuyến mãi</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<div class="container text-center mt-5">
    <div class="text-center h3 fw-normal">
        Chỉnh sửa thông tin Khuyến mãi
    </div>
    <small class="mb-5 "><i>Các thông tin sẽ được cập nhật mới cho Khuyến mãi sau khi bạn nhấn Xác nhận</i></small>
            
    <form action="crud.php" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center mt-5">
            <div class="form-floating mb-3 col-md-6">
                <label for="">Cập nhật tên khuyến mãi: </label>
                <input type="text" name="name" id="editname" required><br>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="form-floating mb-3 col-md-6">
                <label for="">Cập nhật chi tiết: </label> <textarea name="desc" id="editdesc" cols="30" rows="10" required></textarea><br>
            </div>
        </div>

        <img src="" id="editimg" width="100%" alt="">

        <div class="d-flex justify-content-center mt-5">
            <div class="form-floating mb-3 col-md-6">
                <label for="">Cập nhật hình ảnh: </label> <input type="file" name="image" id="" accept=".jpg,.png,.jpeg"><br>
            </div>
        </div>
        <input type="hidden" name="editpid" id="editpid">
        <div class="d-flex justify-content-center mt-5">
            <div class="form-floating mb-3 col-md-6">
                <input type="submit" value="Confirm changes" name="editproduct">
            </div>
        </div>

        <!-- <div class="d-flex justify-content-center mt-5">
                    <div class="form-floating mb-3 col-md-6">
                        <label for="">Cập nhật giá bán (VND):</label>
                        <input type="number" name="price" id="editprice" min="100" class="form-control mt-5">
                    </div>
                </div> -->
    </form>
</div>


<?php
    include("../promotions/connection.php");

    $fetch_src = FETCH_SRC;

    if(isset($_GET['edit']) && $_GET['edit'] > 0){
        $query = "select * from `promotion` where `id`='$_GET[edit]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        echo "
            <script>
                document.querySelector('#editname').value=`$fetch[name]`;
                document.querySelector('#editdesc').value=`$fetch[description]`;
                document.querySelector('#editimg').src=`$fetch_src$fetch[image]`;
                document.querySelector('#editpid').value=`$_GET[edit]`;
            </script>
        ";
            
    }
?>