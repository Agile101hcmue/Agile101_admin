

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<body>
    <!-- add product form -->
    <h2 align="center" class="mt-4">Thêm Sản Phẩm Mới</h2>
    <form action="crud.php" method="post" enctype="multipart/form-data">
        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control mt-5" id="" name="name" required>
                <label for="">Tên sản phẩm:</label>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <select class="form-select" name="category" id="category" required>
                    <option selected>--- Chọn một thể loại ---</option>
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

        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <input type="number" class="form-control mt-5" id="" name="price" min="100" required>
                <label for="">Giá niêm yết: (VND)</label>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <input type="text" class="form-control mt-5" id="" name="desc" required>
                <label for="">Chi tiết sản phẩm:</label>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <input type="number" name="quantity" class="form-control mt-5" min="1" id="" required>
                <label for="">Số lượng: </label> 
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="form-floating mb-3 col-md-6">
                <input type="submit" class="btn btn-primary" value="Thêm sản phẩm" name="addproduct">
            </div>
        </div>
    </form>

    <?php
        if(isset($_GET['alert'])){
            
            if($_GET['alert'] == 'img_rem_fail'){
                echo "<script> 
                    window.alert('Thao tác xử lý ảnh thất bại. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'add_failed'){
                echo "<script> 
                    window.alert('Không thể thêm mới sản phẩm. Vui lòng thử lại!')
                </script>";
            }
            if($_GET['alert'] == 'remove_failed'){
                echo "<script> 
                    window.alert('Thao tác xử lý sản phẩm thất bại. Vui lòng thử lại!')
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



</body>
</html>