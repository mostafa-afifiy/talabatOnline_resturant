<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
   

        $sql = "SELECT username, password FROM users WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $_SESSION['already-registered'] = '<span class="register"> ' . $username . ' is already registered</span>';
            header("location:login.php");
            exit();
        } else {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO
            users(username, email, password)
            VALUES ( '$username', '$email', '$hashed_password'  )";

            $result = mysqli_query($conn, $sql);

            if ($result == true) {
                $_SESSION['account_created'] = '<span class="addAccount"> account, ' . $username . ' is created</span>';
                header('location:index.php');
                exit();
            } else {
                $_SESSION['unSuccessfully '] = '<span class="fail"> account, ' . $username . ' failed</span>';
                header('location:register.php');
                exit();
            }
            mysqli_close($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
                <li class="big"><a href="#">Register </a></li>
                <li class="big"><a href="login.php">Login </a></li>
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
                            <li><a href="#">Register </a></li>
                            <li><a href="login.php">Login </a></li>
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
        <form action ="" method = "POST" autocomplete="off">
            <h2>Register</h2>
            <div class="input-box">
                <label for="user">Username</label>
                <input type="text" name= "username" id="user" autocomplete="off">
            </div>
            <div class="input-box">
              <label for="mail">Email</label>
              <input type="email" name= "email" id="mail" autocomplete="off">
          </div>
            <div class="input-box">
                <label for="pass">Password</label>
                <input type="password" name= "password " id="pass" autocomplete="off">
            </div>
        
            <button type="submit" name = "submit">Register</button>
            <div class="register-link">
                <p>Already I Have An Account!</p>
                <a href="login.php">Login</a>
            </div>

        </form>
    </div>
    </div>
</section>

</body>

</html>