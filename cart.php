<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
     <!-- Reander All Elemants Norlamlly -->
     <link rel="stylesheet" href="CSS/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="CSS/all.min.css">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="CSS/product.css">
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
                <li class="big"><a href="login.php">Login </a></li>
                <?php }?>
                <li class="big"><a href="#">My Cart </a></li>
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
                            <li><a href="login.php">Login </a></li>
                            <?php }?>
                            <li><a href="#">My Cart </a></li>
                        </ul>
                        
                    </div>
                    <!-- End Megamenu -->
                </li>

            </ul>
        </div>
  </header>

  
  <h3>Your Purchases</h3>
  <?php
    $result = mysqli_query($conn, "SELECT * FROM cart");
    while($row = mysqli_fetch_array($result)) {
        echo "
        
        <div class='cart-table'>
<table>
    <thead>
       <tr class='thead'>
        <th>Name</th>
        <th>Price</th>
        <th></th>
       </tr>
    </thead>
    <tbody>
        <tr>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td><a href='delete_cart.php? id=$row[cart_id]'>Delete</a></td>
        </tr>
    </tbody>
</table>
</div>
        ";
    }
    
    
    ?>
</body>
</html>