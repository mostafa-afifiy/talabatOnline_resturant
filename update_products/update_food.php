<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
     <!-- Reander All Elemants Norlamlly -->
     <link rel="stylesheet" href="../CSS/normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../CSS/product.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="box">
                <h2>Update Product</h2>
                <?php
                          include('../config.php');
                          $id = $_GET['id'];
                          $result = mysqli_query($conn,"SELECT * FROM food WHERE food_id=$id");
                          $row  = mysqli_fetch_array($result);

                         echo " <img src='../$row[image]' alt=''> ";
                            ?>
                <div class="form">
                    <div class="content">
                          <?php
                            
                            echo "
                            <label>Id</label>
                            <input type='text' name='id'  autocomplete='off' value='$row[food_id]'>
                            <label>Name</label>
                            <input type='text' name='name'  autocomplete='off' value='$row[name]'>
                            <label>price</label>
                            <input type='text' name='price' autocomplete='off' value='$row[price]'>
                            <label>Info</label>
                            <input type='text' name='info'  value='$row[info]'>
                           
                           <select class='select' name='type' require>
                            <option value='meat'>Meat</option>
                            <option value='fash'>Fash</option>
                            <option value='drink'>Drink</option>
                           </select>
                    </div>
                </div>
                <div class='add'>
                    <input type='file' id='file' name='image' value='$row[image]' style='display:none;'>
                    <label for='file'>Update Image</label>
                    <button type='submit' name='update'>Update</button>
                </div>
                ";
                ?>
            </div>
            
        </form>
    </div>
    
</body>
</html>
