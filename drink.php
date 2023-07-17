<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalabaT</title>
    <!-- Reander All Elements Norlamlly -->
    <link rel="stylesheet" href="CSS/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="CSS/all.min.css">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="CSS/style.css">
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
                <li class="big"><a href="#">Drink</a></li>
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
                            <li><a href="#">Drink</a></li>
                            
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

    <!-- Start Landing -->
    <section class="landing">
        <div class="container">
            <div class="text">
                <h2>Welcome, To <span class="one">TalabaT </span> <span class="two">Drinks </span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A accusantium laboriosam
                    magni quaerat,consequuntur voluptas quasi animi sunt molestias.</p>
            </div>
            <div class="image">
                <img src="image/background/backiee-101023-landscape.jpg" alt="Landing">
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </section>
    <!-- End Landing -->


    <!-- Start Drinks -->

    <div class="main-drink">
        <h2 class="special-title">Drink</h2>
        <div class="container">
                <?php
                $result = mysqli_query($conn, "SELECT * FROM food WHERE type='drink'");

                while ($row  = mysqli_fetch_array($result)) {
                        if ($_SESSION['username'] === "Admin"){
                    echo "
                    <div class='box'>
                    <img src='$row[image]' alt='' />
                    <div class='text'>
                        <h2>$row[name]</h2>
                        <p>$row[info]</p>
                        <div class='link'>
                        <div class='price'>$row[price]</div>
                        <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>  
                        </div>
                        
                        <div class='update'>
                        <a href='delete_products/delete_drink.php? id=$row[food_id]'>Delete</a>
                        <a href='update_products/update_food.php? id=$row[food_id]''>Update</a>
                        </div>
                    </div>
                </div>
                    ";
                }else {
                    echo "
                    <div class='box'>
                    <img src='$row[image]' alt='' />
                    <div class='text'>
                        <h2>$row[name]</h2>
                        <p>$row[info]</p>
                        <div class='link'>
                        <div class='price'>$row[price]</div>
                        <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>
                        </div>
                        </div>
                        </div>
                            ";
                }
                }
            // }
                ?>
        </div>
    </div>

    <!-- End Dishes -->




    <!-- Start Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="main">
                <h2>TalabaT</h2>
                <div class="social-media">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"> <i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic fugiat unde aut deleniti eveniet facere
                    soluta sint, consectetur commodi illo ipsam magnam temporibus doloribus incidunt debitis recusandae,
                    accusamus facilis inventore.</p>
            </div>
            <div class="links">
                <ul>
                    <li><a  href="#">Important Link 1</a></li>
                    <li><a  href="#">Important Link 2</a></li>
                    <li><a  href="#">Important Link 3</a></li>
                    <li><a  href="#">Important Link 4</a></li>
                    <li><a  href="#">Important Link 5</a></li>
                </ul> 

            </div>
            <div class="info">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Egypt
                    </li>
                    <li>
                        <i class="far fa-clock fa-fw"></i>
                        Business Hours => 24 Houre Every Day
                    </li>
                    <li>
                        <i class="fas fa-phyne-volume fa-fw"></i>
                        <div class="phone">
                            <span>+201277810774</span>
                            <span>+201124547080</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="image">
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
            </div>
        </div>
        <p class="copyright">Made With Mostafa Amer</p>
    </footer>
    <!-- End Footer -->

</body>

</html>