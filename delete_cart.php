<?php
// Delete Page 
//1- connect to database;
//2- delete cart using id cart from cart table at database;

include 'config.php';
$id = $_GET["id"];
mysqli_query($conn, "DELETE FROM cart WHERE cart_id=$id");
header("Location:cart.php");

?>