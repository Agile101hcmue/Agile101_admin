<?php
    require("connection.php");

    function image_upload($img){
        $tmp_loc = $img['tmp_name'];
        $new_name = random_int(11111, 99999)."_".$img['name']; // generate new file name and then move to cache/uploads directory

        $new_loc = UPLOAD_SRC.$new_name;

        if(!move_uploaded_file($tmp_loc, $new_loc)){
            header("Location: manage.php?alert=img_upload");
            exit;
        }
        else{
            return $new_name;
        }
    }

    function image_remove($img){    // remove images
        if(!unlink(UPLOAD_SRC.$img)){
            header("Location: manage.php?alert=img_rem_fail");
            exit;
        }
    }

    if(isset($_POST['addproduct'])){
        // print_r($_POST);
        // print_r($_FILES['image']);
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($con, $value);
        }
        // print_r($_POST[$key]);
        $img_path = image_upload($_FILES['image']);

        $query = "INSERT INTO `promotion`(`name`, `description`, `image`) VALUES ('$_POST[name]','$_POST[desc]','$img_path')";
        if(mysqli_query($con, $query)){
            header("Location: manage.php?success=added");
        }
        else{
            header("Location: manage.php?alert=add_failed");
        }
    }

    if(isset($_GET['rem']) && $_GET['rem'] > 0){
        $query = "select * from `promotion` where `id` = '$_GET[rem]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        image_remove($fetch['image']);

        $query = "delete from `promotion` where `id` = '$_GET[rem]'";
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
            $query = "select * from `promotion` where `id` = '$_POST[editpid]'";
            $result = mysqli_query($con, $query);
            $fetch = mysqli_fetch_assoc($result);

            image_remove($fetch['image']);

            $img_path = image_upload($_FILES['image']);

            $update = "update `promotion` set `name`='$_POST[name]',`description`='$_POST[desc]',`image`='$img_path' where `id`='$_POST[editpid]'";

        }
        else{
            $update = "update `promotion` set `name`='$_POST[name]',`description`='$_POST[desc]' where `id`='$_POST[editpid]'";

        }
        if(mysqli_query($con, $update)){
            header("Location: manage.php?success=updated");
        }
        else{
            header("Location: manage.php?alert=update_failed");
        }
    }

?>
