<?php
session_start();
$dsn = "mysql:host=localhost;dbname=products";
$user = "root";
$pass = "";
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
);

try {
  $conn = new PDO($dsn, $user, $pass, $options); // Start A New Connection With PDO Class;
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "You Are Connected<br>";
}
catch(PDOException $e){
  echo "failed " . $e->getMessage();

}

$stmt = $conn->prepare("UPDATE orders SET price = 101 WHERE client_id = 3");
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
// echo $data['name'];
if($stmt->affected_rows >= 1) {
    echo "Done!";
}


// for ($i=3; $i<=20; $i++) {
// $stmt = $conn->prepare("INSERT INTO orders(name, price, client_id) VALUES('TV_$i', 100*$i,3)");
// $stmt->execute();
// }
?>