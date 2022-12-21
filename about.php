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

<header class="header">

    <a href="#" class="logo">
        <img style="height:50px" src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="about.php">about</a>
        <a href="index.php#menu">non-alcoholic drinks</a>
        <a href="index.php#review">review</a>
        <a href="index.php#contact">contact</a>
        <a href="cart.php">cart</a>
    </nav>

    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn" href="cart.php"></div>
        <div class="fas">
                    <a class="fas fa-user" id="user-btn" href="login.php" >
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
<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about.jpeg" alt="">
        </div>

        <div class="content">
            <h3>what makes our drinks special?</h3>
            <p>using fresh fruits to make your non-alcoholic drinks a perfect taste of fruits combine with sodas.</p>
            <p>Giving a smoke tandoor flavour to all the alcoholic drinks which makes them more consistent and perfect to chill your mood.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="index.php#home">home</a>
        <a href="about.php">about</a>
        <a href="index.php#menu">non-alcoholic drinks</a>
        <a href="index.php#products">alcoholic drinks</a>
        <a href="index.php#review">review</a>
        <a href="index.php#contact">contact</a>
    </div>

    <div class="credit">created by <span>cheers drink shoppee</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>