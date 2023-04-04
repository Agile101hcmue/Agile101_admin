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
<h2>Edit Promotions</h2><br>
<form action="crud.php" method="post" enctype="multipart/form-data">
    <label for="">Name: </label> <input type="text" name="name" id="editname" required><br>
    <label for="">Promotion Description: </label> <textarea name="desc" id="editdesc" cols="30" rows="10" required></textarea><br>
    <img src="" id="editimg" width="100%" alt="">
    <label for="">Image: </label> <input type="file" name="image" id="" accept=".jpg,.png,.jpeg"><br>
    <input type="hidden" name="editpid" id="editpid">
    <input type="submit" value="Confirm changes" name="editproduct">
</form>

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