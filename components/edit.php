<!-- EDIT ITEMS FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin sản phẩm</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<body class="text-center">
<!-- <h2 align="center">Edit Items</h2><br> -->
<!-- <div align="center"> -->
    <!-- <form action="crud.php" method="post" enctype="multipart/form-data"> -->
        <!-- edit form -->
        <!-- <label for="">Name: </label> <input type="text" name="name" id="editname" required><br> -->
        <!-- <label for="">Category: </label> <select name="category" id="category">
            <option value="sach-giao-khoa">Sách giáo khoa</option>
            <option value="truyen-tranh">Truyện tranh</option>
            <option value="sach-giao-duc">Giáo dục</option>
            <option value="tieu-thuyet">Tiểu thuyết</option>
            <option value="loi-song">Lối sống & kỹ năng</option>
            <option value="van-hoc-dan-gian">Văn học dân gian</option>
            <option value="van-hoc-hien-dai">Văn học hiện đại</option>
            <option value="sach-nuoc-ngoai">Tác phẩm nước ngoài</option>
            <option value="hoc-thuat">Học thuật & báo cáo khoa học</option>
            <option value="vu-tru">Vũ trụ & thiên văn</option>
            <option value="ton-giao">Tôn giáo</option>
            <option value="giao-trinh-dai-hoc">Các giáo trình cấp đại học</option>
            <option value="luat">Luật & chính trị</option>
            <option value="khac">Khác</option>
        </select><br> -->
        <!-- <label for="">Price: </label> <input type="number" name="price" id="editprice" min="100" required><br> -->
        <!-- <label for="">Product Description: </label> <textarea name="desc" id="editdesc" cols="30" rows="10" required></textarea><br> -->
        <!-- <img src="" id="editimg" width="100%" alt=""> -->
        <!-- <label for="">Image: </label> <input type="file" name="image" id="" accept=".jpg,.png,.jpeg"><br> -->
        <!-- <label for="">Quantity: </label> <input type="number" name="quantity" min="1" id="editquantity"><br> -->
        <!-- <input type="hidden" name="editpid" id="editpid"> -->
        <!-- <input type="submit" value="Confirm changes" name="editproduct"> -->
    <!-- </form> -->

    <div class="container text-center mt-5 ">
        <form action="crud.php" method="post" enctype="multipart/form-data">
            <div class="text-center h3 fw-normal">
                Chỉnh sửa thông tin sản phẩm
            </div>
            <small class="mb-5 "><i>Các thông tin sẽ được cập nhật mới cho sản phẩm sau khi bạn nhấn Xác nhận</i></small>
            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Thay đổi tên sản phẩm:</label>
                    <input type="text" class="form-control mt-5" name="name" id="editname">
                </div>
            </div>
            
            <div class="d-flex justify-content-center">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Thay đổi phân loại sản phẩm:</label>
                    <select name="category" id="category" class="form-control mt-5">
                        <option value="sach-giao-khoa">Sách giáo khoa</option>
                        <option value="truyen-tranh">Truyện tranh</option>
                        <option value="sach-giao-duc">Giáo dục</option>
                        <option value="tieu-thuyet">Tiểu thuyết</option>
                        <option value="loi-song">Lối sống & kỹ năng</option>
                        <option value="van-hoc-dan-gian">Văn học dân gian</option>
                        <option value="van-hoc-hien-dai">Văn học hiện đại</option>
                        <option value="sach-nuoc-ngoai">Tác phẩm nước ngoài</option>
                        <option value="hoc-thuat">Học thuật & báo cáo khoa học</option>
                        <option value="vu-tru">Vũ trụ & thiên văn</option>
                        <option value="ton-giao">Tôn giáo</option>
                        <option value="giao-trinh-dai-hoc">Các giáo trình cấp đại học</option>
                        <option value="luat">Luật & chính trị</option>
                        <option value="khac">Khác</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Cập nhật giá bán (VND):</label>
                    <input type="number" name="price" id="editprice" min="100" class="form-control mt-5">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Cập nhật chi tiết sản phẩm:</label>
                    <!-- <input type="text" class="form-control mt-5" name="name" id="editname"> -->
                    <textarea name="desc" class="form-control mt-5" id="editdesc" cols="30" rows="10" required></textarea>
                </div>
            </div>

            <img src="" id="editimg" width="100%" alt=""> 

            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Cập nhật hình ảnh sản phẩm:</label>
                    <input type="file" class="form-control mt-4" name="image" id="" accept=".jpg,.png,.jpeg">
                    
                    <!-- <input type="text" class="form-control mt-5" name="name" id="editname"> -->
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                <!-- <label for="">Quantity: </label> <input type="number" name="quantity" min="1" id="editquantity"><br> -->

                    <label for="">Cập nhật tổng số lượng hiện có:</label>
                    <input type="number" class="form-control mt-5"name="quantity" min="1" id="editquantity">
                </div>
            </div>

            <input type="hidden" name="editpid" id="editpid">

            <!-- <div class="d-flex justify-content-center mt-5">
                <div class="form-floating mb-3 col-md-6">
                    <label for="">Cập nhật tổng số lượng hiện có:</label>
                    < <input type="submit" class="form-control mt-4" value="Xác nhận" "> -->
                <!-- </div> -->
            <!-- </div> -->
            <!-- <input "> -->


            <div>
                <input type="submit" class="btn btn-lg btn-primary mt-3 text-center" value="Xác nhận" name="editproduct">
            </div>
        </form>
        <div class="mt-5">
            <span>Chưa có tài khoản? <a href="./signup.php">Đăng ký ngay</a></span>
        </div>
        <div>
            <a href="../" class="mt-4">Quay về trang chủ</a>
        </div>
    </div>
<!-- </div> -->
</body>

<?php
    include("../components/connection.php");

    $fetch_src = FETCH_SRC;

    // $name = $_POST['name'];
    // $price = $_POST['price'];
    // $description = $_POST['desc'];
    // $quantity = $_POST['quantity'];

    if(isset($_GET['edit']) && $_GET['edit'] > 0){
        $query = "select * from `product` where `id`='$_GET[edit]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        // https://youtu.be/72U5Af8KUpA

        echo "
            <script>
                document.querySelector('#editname').value=`$fetch[name]`;
                document.querySelector('#editprice').value=`$fetch[price]`;
                document.querySelector('#editdesc').value=`$fetch[description]`;
                document.querySelector('#editimg').src=`$fetch_src$fetch[image]`;
                document.querySelector('#editquantity').value=`$fetch[quantity]`;
                document.querySelector('#editpid').value=`$_GET[edit]`;
            </script>
        ";
            
    }
?>