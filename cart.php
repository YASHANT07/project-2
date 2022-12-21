<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheers Drink Shoppee</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
    </style>

</head>
<body>
    
<!-- header section starts  -->

<<header class="header">

    <a href="#" class="logo">
        <img style="height:50px" src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="index.php#menu">non-alcoholic drinks</a>
        <a href="index.php#review">review</a>
        <a href="index.php#contact">contact</a>
        <a href="cart.php">cart</a>
    </nav>

    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas">
                    <a style="color: white;" class="fas fa-user" id="user-btn " href="login.php" >
                    <span class="link"></link>
                    </a>
                    </div>
                
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/sd3.png" alt="">
            <div class="content">
                <h3>Blueberry Mojito</h3>
                <div class="price">15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/hd2.png" alt="">
            <div class="content">
                <h3>tequila shot</h3>
                <div class="price">15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/hd1.png" alt="">
            <div class="content">
                <h3>whisky</h3>
                <div class="price">15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/sd1.png" alt="">
            <div class="content">
                <h3>virgin cocktail</h3>
                <div class="price">15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>refereshing drinks get delivered at your place</h3>
        <p>fresh and delightful drinks to brew you mind with the comfort of your place.</p>
        <a href="#" class="btn">order now</a>
    </div>

</section>




<?php

$cart = get_cart();
if (isset($cart)) {
  $drinks = get_drinks_by_ids($cart);
}

?>

<main>
  <div class="internal-header">
    <h1>CART</h1>
    <?php if (!mysqli_num_rows($drinks)) { ?>
      <p>CART is empty</p>
    <?php } ?>
  </div>

  <section class="menu" id="menu">
<?php if (mysqli_num_rows($drinks)) { ?>
    <h1 class="heading"> non-alcoholic <span>drinks</span> </h1>
    
    <?php foreach ($drinks as $drink) { ?>
    <div class="box-container">
        

        <div class="box">
            <img src="images/<?= $drink['image'] ?>" alt="">
            <h3><?= $drink['name'] ?></h3>
            <div class="price"><?= $drink['price'] ?><span>20.99</span></div>
            <form action="add-to-cart.php" method="POST">
                    <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                    <input type="hidden" id="item-<?= $drink['d_id'] ?>" name="quantity" value="1">
                    <button class="btn" type="submit" name="update-to-cart">Update</button>
                    <button class="btn btn-danger" name="remove-from-cart">Remove</button>
            </form>
        </div>

    </div>
    <?php } ?>
    <?php } ?>

</section>