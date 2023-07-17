<?php
include 'config.php';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $type = $_POST['type'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_upload = 'images/' . "$image_name";

  
        $sql = "SELECT name FROM food WHERE name = '$name' ";
   
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<script>alert('Done already found')</script>";
        header("location:new_product.php");
        exit();
    } else {
            $sql = "INSERT INTO
        food (name, price, info, type, image  )
        VALUES ( '$name', '$price', '$info', '$type', '$image_upload' )";

        $result = mysqli_query($conn, $sql);

        if (move_uploaded_file($image_location, $image_upload)) {
            echo "<script>alert('Done Image Added')</script>";
            header('location:new_product.php');
            exit();
        } else {
            echo "<script>alert('Error Image Not Added')</script>";
            header('location:new_product.php');
            exit();
        }
    }
    mysqli_close($conn);

}
