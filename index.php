<?php include 'functions.php' ?>


<?php

$drinks = get_drinks();

?>


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

</head>
<body>
    
<!-- header section starts  -->

<<header class="header">

    <a href="#" class="logo">
        <img style="height:50px" src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="about.php">about</a>
        <a href="#menu">non-alcoholic drinks</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="cart.php">cart</a>

       <a <?php if (isset($_SESSION['u_id'])) { ?>
                        
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    <?php } else { ?>
                        <div class="icons">
        
        <div class="fas">
                    <a style="color: white;" class="fas fa-user" id="user-btn " href="login.php" >
                    <span class="link"></link>
                    </a>
                    </div>
                
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>
                    <?php } ?>  </a>

    </nav>

    

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

<!-- home section ends -->

<!-- about section starts  -->

<!-- about section ends -->

<!-- menu section starts  -->

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
                    <button type="submit" name="add-to-cart" class="btn">Add To Basket</button>
            </form>
        </div>

    </div>
    <?php } ?>
    <?php } ?>

</section>

<

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>They really provide good quality drinks.must try thier shots!</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>I am satisfied with the quantity they provide much worth it.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Their presentation is awesome the way the deliver in the amazing glasess I loved it.</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71503.07143210972!2d-3.2053387499999997!3d55.94120834999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b800a5982623%3A0x64f2147b7ce71727!2sEdinburgh%2C%20UK!5e0!3m2!1sen!2sin!4v1665508499564!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>


<!-- contact section ends -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="about.html">about</a>
        <a href="#menu">non-alcoholic drinks</a>
        <a href="#products">alcoholic drinks</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </div>

    <div class="credit">created by <span>cheers drink shoppee</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>