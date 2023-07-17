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
    <!-- Reander All Elemants Norlamlly -->
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
                <li class="big"><a href="drink.php">Drink</a></li>
                <li class="big"><a href="#">Contact Us </a></li>
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
                        <li><a href="#">Contact Us </a></li>
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
                <h2>Welcome, To <span class="one">TalabaT </span> <span class="two">Team Members </span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A accusantium laboriosam
                    magni quaerat,consequuntur voluptas quasi animi sunt molestias.</p>
            </div>
            <div class="image">
                <img src="image/landing.png" alt="Landing">
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </section>
    <!-- End Landing -->



    <!-- Start Team Members -->
    <section class="team-members" id="team-members">
        <h2 class="special-title">Team Members</h2>
        <div class="container">
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                            <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Mostafa Amer</h3>
                        <h4>PHP Developer</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Mohamed Thabet</h3>
                        <h4>AI Developer</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Mohamed Fares</h3>
                        <h4>Business Man</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Mohamed Elgendy</h3>
                        <h4>Hacker</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Yousef Sha3pan</h3>
                        <h4>Hacker</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Mohamed Nasr</h3>
                        <h4>Front End Designer</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Manal Elsayed</h3>
                        <h4>Front End Designer</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="content">
                    <div class="box">
                        <div class="image">
                        <img src="image/backiee-82400-landscape.jpg" alt="">
                        </div>
                        <div class="social-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"> <i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Hagar Magdy</h3>
                        <h4>Front End Designer</h4>
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <span>01277810774</span>
                        <p>I study at Delta Technological University</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Members -->





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
                    <li><a href="#">Important Link 1</a></li>
                    <li><a href="#">Important Link 2</a></li>
                    <li><a href="#">Important Link 3</a></li>
                    <li><a href="#">Important Link 4</a></li>
                    <li><a href="#">Important Link 5</a></li>
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
                        <i class="fas fa-phone-volume fa-fw"></i>
                        <div class="phone">
                            <span>+201277810774</span>
                            <span>+201124547080</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="image">
                <img src="image/carbon-fiber-shelby-mustang-1600685276.jpg" alt="">
                <img src="image/carbon-fiber-shelby-mustang-1600685276.jpg" alt="">
                <img src="image/carbon-fiber-shelby-mustang-1600685276.jpg" alt="">
                <img src="image/carbon-fiber-shelby-mustang-1600685276.jpg" alt="">
            </div>
        </div>
        <p class="copyright">Made With TalabaT</p>
    </footer>
    <!-- End Footer -->

</body>

</html>