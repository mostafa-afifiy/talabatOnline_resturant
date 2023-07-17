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
                <li class="big"><a href="#">Home</a></li>
                <li class="big"><a href="fastFood.php"> Food </a></li>
                <li class="big"><a href="drink.php">Drink</a></li>
                <li class="big"><a href="contact_us.php">Contact Us </a></li>
                <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li class="big"><a href="#">' . $_SESSION['username'] . '</a></li>';
                        echo '<li class="big"><a href="logout.php">Logout </a></li>';
                    } else {
                        ?>
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
                                        if (isset($_SESSION['username'])   && $_SESSION['username'] == "Admin") {
                                            echo '<li><a href="new_product.php">Insert</a></li>';
                                        }
                                        ?>
                            <li><a href="#">Home</a></li>
                            <li><a href="fastFood.php"> Food </a></li>
                            <li><a href="drink.php">Drink</a></li>

                        </ul>
                        <ul class="links">
                        <li><a href="contact_us.php">Contact Us </a></li>
                            <?php
                                if (isset($_SESSION['username'])) {
                                    echo '<li><a href="#">' . $_SESSION['username'] . '</a></li>';
                                    echo '<li><a href="logout.php">Logout </a></li>';
                                } else {
                                    ?>
                            <li><a href="register.php">Register </a></li>
                            <li><a href="login.php">Login </a></li>
                            <?php }?>
                            <li><a href="cart.php">My Cart </a></li>
                        </ul>

                    </div
                    <!-- End Megamenu -->
                </li>

            </ul>
        </div>
    </header>
    <!-- Start Landing -->
    <section class="landing">
        <div class="container">
            <div class="text">
                <?php

                    if (isset($_SESSION['loginMessage'])) {
                        echo $_SESSION['loginMessage'];
                        unset($_SESSION['loginMessage']);
                    }
                    ?>
            <h2>Welcome, To <span class="one">TalabaT </span> <span class="two">World </span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A accusantium laboriosam
                    magni quaerat,consequuntur voluptas quasi animi sunt molestias.</p>
            </div>
            <div class="image">
                    <img src="image/background/backiee-113058-landscape.jpg" alt="">
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-1x"></i>
        </a>
    </section>
    <!-- End Landing -->

    <!-- Start Features -->
    <section class="features" id="features">
        <h2 class="special-title">Features</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                <img src="image/background/backiee-113058-landscape.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Quality</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla suscipit!
                        voluptas. Ea quo praesentium beatae!</p>
                    <div class="link">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="image/background/backiee-113058-landscape.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla suscipit!
                        voluptas. Ea quo praesentium beatae!</p>
                    <div class="link">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                <img src="image/background/backiee-113058-landscape.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Passion</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla suscipit!
                        voluptas. Ea quo praesentium beatae!</p>
                    <div class="link">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/background/backiee-113058-landscape.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Security</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla suscipit!
                        voluptas. Ea quo praesentium beatae!</p>
                    <div class="link">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="spikes"></div>
    <!-- End Features -->

    <!-- Start Services -->
    <section class="services" id="services">
        <h2 class="special-title">Services</h2>
        <div class="container">
            <div class="box">
                <div class="icon">
                    <i class="fas fa-user-shield fa-4x"></i>
                    <h3>Security</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fas fa-tools fa-4x"></i>
                    <h3>Fixing Issues</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fas fa-map-marked-alt fa-4x"></i>
                    <h3>Location</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <h3>Coding</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fas fa-palette fa-4x"></i>
                    <h3>Security</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <i class="fas fa-bullhorn fa-4x"></i>
                    <h3>Marketing</h3>
                </div>
                <div class="info">
                    <a href="#">Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start How It Works -->
    <section class="how-it-work" id="how-it-work">
        <h2 class="special-title">How It Works ?</h2>
        <div class="container">
            <div class="image">
                <img src="image/how-it-work.png" alt="">
            </div>
            <div class="content">
                <div class="box">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <div class="info">
                        <h3>Business Analysis</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corrupti, ab, voluptatem
                            dignissimos
                            magni officiis in veritatis molestiae odit repellat nostrum veniam nisi neque esse
                            exercitationem cumque voluptate est? Quod!</p>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <div class="info">
                        <h3>Architecture</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corrupti, ab, voluptatem
                            dignissimos
                            magni officiis in veritatis molestiae odit repellat nostrum veniam nisi neque esse
                            exercitationem cumque voluptate est? Quod!</p>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <div class="info">
                        <h3>Developement</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corrupti, ab, voluptatem
                            dignissimos
                            magni officiis in veritatis molestiae odit repellat nostrum veniam nisi neque esse
                            exercitationem cumque voluptate est? Quod!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Works -->

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
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
                <img src="image/platter-2009590_640.jpg" alt="">
            </div>
        </div>
        <p class="copyright">Made With TalabaT</p>
    </footer>
    <!-- End Footer -->

</body>

</html>