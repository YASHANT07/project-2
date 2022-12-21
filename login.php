
<?php include 'functions.php' ?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'Login Failed!'
    ];
  } else {
    header("Location: index.php");
  }
}

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
    </nav>

    <div class="icons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas">
                    <a class="fas fa-user" id="user-btn" href="login.php" >
                    <span class="link"></link>
                    </a>
                    </div>
</header>
<section class="contact" id="contact">

    <h1 class="heading"> <span>welcome</span> user </h1>

    <div class="row">
    <?php if (isset($response)) { ?>
                <div class="message-box <?= $response['type'] ?>">
                    <p><?= $response['message'] ?></p>
                </div>
                <?php } ?>
        <form action="?" method="POST">
            <h3>sign in</h3>
            <div class="inputBox" col-4>
                <span class="fas fa-user"></span>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="inputBox" col-4>
                <span class="fa fa-lock"></span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
      
            <button type="submit" name="login" class="btn">Login</button> <br><br>
            <h2 class="register" style="color:white;">Don't have an account? &nbsp; <a id="user-btn" href="register.php" >Register here</a></h2>
        </form>
    </div>
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