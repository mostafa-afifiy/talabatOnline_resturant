<?php
include '../config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $type = $_POST['type'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_upload = 'images/' . "$image_name";


    $sql = "UPDATE
        food SET
        name='$name', price='$price', info='$info',
        type='$type', image='$image_upload'
         WHERE food_id=$id";

    $result = mysqli_query($conn, $sql);

    if (move_uploaded_file($image_location, $image_upload)) {
        echo "<script>alert('Done Image Added')</script>";
        header('location:../new_product.php');
        exit();
    } else {
        echo "<script>alert('Error Image Not Added')</script>";
        header('location:../new_product.php');
        exit();
    }
}
mysqli_close($conn);

