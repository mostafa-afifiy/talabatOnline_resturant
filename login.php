<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT username, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
  
    // if (password_verify($password, $row['password']) == false) {
    if ($count == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['loginMessage'] = '<span class="success"> Welcome, ' . $username . '</span>';
        header("location:index.php");
        exit();
        } else {
            // if ($password == $password_decrypt)
            $_SESSION['unSuccessfully '] = '<span class="fail"> account, ' . $username . ' failed</span>';
            header('location:register.php');
            exit();
        }
        mysqli_close($conn);
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Reander All Elemants Norlamlly -->
  <link rel="stylesheet" href="CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="CSS/all.min.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="CSS/login.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<header>
        <div class="container">
            <h1>TalabaT</h1>
            <ul class="main-link">
            <?php
                    if (isset($_SESSION['username']) && $_SESSION['username'] == "Admin") {
                        echo '<li class="big"><a href="new_product.php">Insert</a></li>';
                     }
                    ?>
                <li class="big"><a href="index.php">Home</a></li>
                <li class="big"><a href="fastFood.php"> Food </a></li>
                <li class="big"><a href="drink.php">Drink</a></li>
                <li class="big"><a href="contact_us.php">Contact Us </a></li>
                <?php
                    if (!isset($_SESSION['username'])) {?>
                <li class="big"><a href="register.php">Register </a></li>
                <li class="big"><a href="#">Login </a></li>
                <?php }?>
                <li class="big"><a href="cart.php">My Cart </a></li>
                <!-- ========================================================================= -->
                <!-- ========================================================================= -->
                <!-- ========================================================================= -->
                <!-- ========================================================================= -->
                <li class="small">
                    <a href="#"> <i class="fas fa-bars toggle-menu"></i></a>
                    <!-- Start Megamenu -->
                    <div class="mega-menu">
                        <ul class="links">
                                    <?php
                                if (isset($_SESSION['username']) && $_SESSION['username'] == "Admin") {
                                    echo '<li><a href="new_product.php">Insert</a></li>';
                                }
                                ?>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="fastFood.php"> Food </a></li>
                            <li><a href="drink.php">Drink</a></li>
                            
                        </ul>
                        <ul class="links">
                        <li><a href="contact_us.php">Contact Us </a></li>
                            <?php
                                if (!isset($_SESSION['username'])) {?>
                            <li><a href="register.php">Register </a></li>
                            <li><a href="#">Login </a></li>
                            <?php }?>
                            <li><a href="cart.php">My Cart </a></li>
                        </ul>
                        
                    </div>
                    <!-- End Megamenu -->
                </li>

            </ul>
        </div>
  </header>


<section>
<div class="container">
    <div class="login-box">
    <?php
if (isset($_SESSION['account_created'])) {
    echo $_SESSION['account_created'];
    unset($_SESSION['account_created']);
}

?>
        <form action="" method = "POST" autocomplete="off">
            <h2>Login</h2>
 
            <?php

if (isset($_SESSION['already-registered'])) {
    echo $_SESSION['already-registered'];
    unset($_SESSION['already-registered']);
}
if (isset($_SESSION['noAdmin'])) {
    echo $_SESSION['noAdmin'];
    unset($_SESSION['noAdmin']);
}
?>
            <div class="input-box">
                <label for="">Username</label>
                <input type="text" name = "username" required autocomplete="off">
            </div>
            <div class="input-box">
                <label for="">Password</label>
                <input type="password" name = "password"  required autocomplete="off">
            </div>
            <!-- <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
            </div> -->
            <button type="submit" name = "submit">Login</button>
            <div class="register-link">
                <p>Don't have an account?</p>
                <a href="register.php">Register</a>
            </div>

        </form>
    </div>
    </div>
</section>

</body>

</html>