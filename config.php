<?php
session_start();
$conn = mysqli_connect('localhost','root','','talabat_db') or die(mysqli_error('failed to connect! '));
 $db_select = mysqli_select_db($conn, 'talabat_db') or die(mysqli_error('failed to select Database!'));





// $dsn = "mysql:host=localhost;dbname=products";
// $user = "root";
// $pass = "";
// $options = array(
//   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
// );

// try {
//   $conn = new PDO($dsn, $user, $pass, $options); // Start A New Connection With PDO Class;
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// // echo "You Are Connected";
// }
// catch(PDOException $e){
//   echo "failed " . $e->getMessage();

// }
// for ($i=1001; $i<=2000; $i++) {
//  $stmt = $conn->prepare("INSERT INTO items(string) VALUES('" . $i . "')");
//  $stmt->execute();
// }


//========================================================================================================


// session_start();
// $conn = mysqli_connect('sql205.epizy.com','epiz_34220062','2ca_J%b-kd-pTD?','epiz_34220062_talabat_db') or die(mysqli_error('failed to connect! '));
//  $db_select = mysqli_select_db($conn, 'epiz_34220062_talabat_db') or die(mysqli_error('failed to select Database!'));

?>