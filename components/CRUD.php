<?php
    require("connection.php");

    function image_upload($img){
        $tmp_loc = $img['tmp_name'];
        $new_name = random_int(11111, 99999)."_".$img['name']; // generate new file name and then move to cache/uploads directory

        $new_loc = UPLOAD_SRC.$new_name;

        if(!move_uploaded_file($tmp_loc, $new_loc)){
            // echo "file has been moved to /cache/uploads/ !";
            header("Location: manage.php?alert=img_upload");
            exit;
        }
        else{
            // echo "file cannot be moved to /cache/uploads/ !";
            return $new_name;
        }
    }

    function image_remove($img){
        if(!unlink(UPLOAD_SRC.$img)){
            header("Location: manage.php?alert=img_rem_fail");
            exit;
        }
    }

    if(isset($_POST['addproduct'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($con, $value);
        }
        $img_path = image_upload($_FILES['image']);

        $query = "INSERT INTO `product`(`name`,`category`, `price`, `description`, `image`, `quantity`) VALUES ('$_POST[name]', '$_POST[category]', '$_POST[price]','$_POST[desc]','$img_path','$_POST[quantity]')";
        if(mysqli_query($con, $query)){
            header("Location: manage.php?success=added");
        }
        else{
            header("Location: manage.php?alert=add_failed");
        }
    }

    if(isset($_GET['rem']) && $_GET['rem'] > 0){
        $query = "select * from `product` where `id` = '$_GET[rem]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        image_remove($fetch['image']);

        $query = "delete from `product` where `id` = '$_GET[rem]'";
        if(mysqli_query($con, $query)){
            header("Location: manage.php?success=removed");
        }
        else{
            header("Location: manage.php?alert=remove_failed");
        }
    }

    if(isset($_POST['editproduct'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($con, $value);
        }

        if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])){
            $query = "select * from `product` where `id` = '$_POST[editpid]'";
            $result = mysqli_query($con, $query);
            $fetch = mysqli_fetch_assoc($result);

            image_remove($fetch['image']);

            $img_path = image_upload($_FILES['image']);

            $update = "update `product` set `name`='$_POST[name]' , `category`='$_POST[category]', `price`='$_POST[price]',`description`='$_POST[desc]',`image`='$img_path',`quantity`='$_POST[quantity]' where `id`='$_POST[editpid]'";

        }
        else{
            $update = "update `product` set `name`='$_POST[name]' ,`category`='$_POST[category]',`price`='$_POST[price]',`description`='$_POST[desc]',`quantity`='$_POST[quantity]' where `id`='$_POST[editpid]'";

        }
        if(mysqli_query($con, $update)){
            header("Location: manage.php?success=updated");
        }
        else{
            header("Location: manage.php?alert=update_failed");
        }
    }

?>
