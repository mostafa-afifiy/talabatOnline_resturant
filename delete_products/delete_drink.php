<?php
include('../config.php');
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM food WHERE food_id='$id'");
header('location: ../drink.php');
?>