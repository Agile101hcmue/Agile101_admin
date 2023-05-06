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
<h2>Edit Items</h2><br>
<form action="crud.php" method="post" enctype="multipart/form-data">
    <!-- edit form -->
    <label for="">Name: </label> <input type="text" name="name" id="editname" required><br>
    <label for="">Category: </label> <select name="category" id="category">
        <option selected>--- Chọn một thể loại ---</option>
        <option value="sach-giao-duc">Sách giáo khoa</option>
        <option value="sach-thieu-nhi">Truyện tranh</option>
        <option value="sach-giao-duc">Giáo dục</option>
        <option value="sach-truyen">Tiểu thuyết</option>
        <option value="sach-doi-song">Lối sống & kỹ năng</option>
        <option value="sach-truyen">Văn học dân gian</option>
        <option value="sach-truyen">Văn học hiện đại</option>
        <option value="sach-truyen">Tác phẩm nước ngoài</option>
        <option value="sach-giao-duc">Học thuật & báo cáo khoa học</option>
        <option value="sach-doi-song">Vũ trụ & thiên văn</option>
        <option value="sach-doi-song">Tôn giáo</option>
        <option value="sach-giao-duc">Các giáo trình cấp đại học</option>
        <option value="sach-giao-duc">Luật & chính trị</option>
    </select><br>
    <label for="">Price: </label> <input type="number" name="price" id="editprice" min="100" required><br>
    <label for="">Product Description: </label> <textarea name="desc" id="editdesc" cols="30" rows="10" required></textarea><br>
    <img src="" id="editimg" width="100%" alt="">
    <label for="">Image: </label> <input type="file" name="image" id="" accept=".jpg,.png,.jpeg"><br>
    <label for="">Quantity: </label> <input type="number" name="quantity" min="1" id="editquantity"><br>
    <input type="hidden" name="editpid" id="editpid">
    <input type="submit" value="Confirm changes" name="editproduct">
</form>

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