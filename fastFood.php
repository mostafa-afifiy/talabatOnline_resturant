<?php
include 'config.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TalabaT  Food</title>
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
                <li class="big"><a href="#"> Food </a></li>
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
                            <li><a href="#"> Food </a></li>
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
  <!-- Start Landing -->
  <section class="landing">
    <div class="container">
      <div class="text">
      <h2>Welcome, To <span class="one">TalabaT </span> <span class="two"> Food </span></h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A accusantium laboriosam
          magni quaerat,consequuntur voluptas quasi animi sunt molestias.</p>
      </div>
      <div class="image">
        <img src="image/background/backiee-93460-landscape.jpg" alt="Landing">
      </div>
    </div>
    <a href="#meat-section" class="go-down">
      <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
  </section>
  <!-- End Landing -->

  <!-- Start meat-section -->
  <section class="meat-section" id="meat-section">
    <div class="container">
      <h2 class="special-title">Meats</h2>
      <div class="content">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM food WHERE type='meat'");

        while ($row  = mysqli_fetch_array($result)) {
          if ($_SESSION['username'] === "Admin"){
          echo "
          <div class='box'>
          <img src='$row[image]' alt=''>
          <div class='text-box'>
            <div class='text'>
              <h3>$row[name]</h3>
              <p>$row[info]</p>
            </div>
            <div class='link'>
              <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>
              <div class='price'>$row[price]</div>
            </div>
            <div class='update'>
            <a href='delete_products/delete_food.php? id=$row[food_id]'>Delete</a>
            <a href='update_products/update_food.php? id=$row[food_id]'>Update</a>
            </div>
          </div>
        </div>
          ";
        }else {
          echo "
          <div class='box'>
          <img src='$row[image]' alt=''>
          <div class='text-box'>
            <div class='text'>
              <h3>$row[name]</h3>
              <p>$row[info]</p>
            </div>
            <div class='link'>
            <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>                        <div class='price'>$row[price]</div>
            <div class='price'>$row[price]</div>
            </div>
            </div>
            </div>
              ";
        }
        }
       
        ?>
        
      </div>
    </div>
  </section>
  <!-- End meat-section -->



  <!-- Start fish-section -->
  <section class="fish-section">
    <div class="container">
    <h2 class="special-title">fishes</h2>
      <div class="image-container">
        <?php
          $result = mysqli_query($conn, "SELECT * FROM food WHERE type='fash'");

          while ($row  = mysqli_fetch_array($result)) {
            if ($_SESSION['username'] === "Admin"){
            echo "
            <div class='box'>
            <img src='$row[image]' alt='' />
            <div class='caption'>
              <h4>$row[name]</h4>
              <p>$row[info]</p>
                <div class='link'>
                <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>
                <div class='price'>$row[price]</div>
                </div>
                <div class='update'>
                <a href='delete_products/delete_food.php? id=$row[food_id]'>Delete</a>
                <a href='update_products/update_food.php? id=$row[food_id]'>Update</a>
                </div>
            </div>
          </div>
            ";
          }else {
            echo "
            <div class='box'>
            <img src='$row[image]' alt='' />
            <div class='caption'>
              <h4>$row[name]</h4>
              <p>$row[info]</p>
                <div class='link'>
                <a href='sure_food.php? id=$row[food_id]'>Add To Cart</a>                        <div class='price'>$row[price]</div>
                <div class='price'>$row[price]</div>
                </div>
                </div>
                </div>
                  ";
          }
          }

          ?>
      </div>
    </div>
  </section>
  <!-- End fish-section -->


  <!-- Start Testimonials -->

  <section class="testimonials" id="testimonials">
    <h2 class="special-title">Testimonials</h2>
    <div class="container">
    <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Mostafa Amer</h3>
        <span class="title">PHP Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Mohamed thabet</h3>
        <span class="title">AI Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Mohamed fares</h3>
        <span class="title">Business Man</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>yousef sha3pan</h3>
        <span class="title">Hacker</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>mohamed elgendy</h3>
        <span class="title">Hacker</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>

      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Mohamed Nasr</h3>
        <span class="title">PHP Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>

      <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Manal Elsayed</h3>
        <span class="title">PHP Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div> <div class="box">
        <div class="image">
          <img src="image/Mostafa.webp" alt="">
        </div>
        <h3>Hagar Magdy</h3>
        <span class="title">PHP Developer</span>
        <div class="rate">
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="filled fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores unde laudantium earum
          voluptate rerum, alias ea ipsa. Soluta aut nulla explicabo odio, nisi reiciendis voluptatibus
          eveniet ducimus magnam at!</p>
      </div>
    </div>
  </section>
  <div class="spikes"></div>
  <!-- End Testimonials -->


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
