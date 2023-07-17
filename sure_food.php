
<?php
include('config.php');
if(isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $insert = "INSERT INTO cart(name, price) VALUES ('$name', '$price')";
    $result = mysqli_query($conn,$insert);
    if ($result == true) {
        header('location:cart.php');
        exit();
    }
}
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
    <div class="main">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h2>Are You Want To Buy This Product</h2>
            <div class="box">
                <?php
                          $id = $_GET['id'];
                          $result = mysqli_query($conn,"SELECT * FROM food WHERE food_id=$id");
                          $row  = mysqli_fetch_array($result);

                         echo " <img src='$row[image]' alt=''> ";
                            ?>
                <div class="form">
                    <div class="content">
                          <?php
                            
                            echo "
                            <input type='text' name='id' placeholder='Enter New Id' autocomplete='off' value='$row[food_id]' style='display:none;'>
                            <input type='text' name='name' placeholder='Enter New Name' autocomplete='off' value='$row[name]' style='display:none;'>
                            <input type='text' name='price' placeholder='Enter New price' autocomplete='off' value='$row[price]' style='display:none;'>
                            ";
                          ?>
                    </div>
                </div>
                <div class="add-to-car">
                    <button type="submit" name="add">Add To Cart</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
