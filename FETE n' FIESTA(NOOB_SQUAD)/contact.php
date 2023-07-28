<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");
$empmsg = '';
if (isset($_POST['submit'])) {

    $name1  = $_POST['name1'];
    $email  = $_POST['email'];
    $num  = $_POST['num'];
    $sub  = $_POST['sub'];
    $msg  = $_POST['msg'];



    $emptymsg1 = $emptymsg2 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = '';


    if (empty($name1)) {
        $emptymsg1 = 'Name';
    }
    if (empty($email)) {
        $emptymsg2 = 'Email';
    }
    if (empty($num)) {
        $emptymsg3 = 'Number';
    }
    if (empty($sub)) {
        $emptymsg4 = 'Subject';
    }
    if (empty($msg)) {
        $emptymsg5 = 'Your Message';
    }

    if (!empty($name1) && !empty($email) && !empty($num) && !empty($sub) && !empty($msg)) {

        $insert = "INSERT INTO contact (name1,email, num, sub, msg) VALUES ('$name1', '$email', '$num', '$sub','$msg')";
        mysqli_query($con, $insert);
        header('location:home.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fete n' Festa</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://kit.fontawesome.com/e5a0e83fd0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link href="css/style.css" rel="stylesheet">

</head>

<header class="header">

    <a href="home.php" class="logo">Fete n' Festa</a>
    <ul class="navbar-nav">
        <nav class="menu"><a href="home.php">Home</a>
            <nav class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <a href="weddings.php">Weddings</a>
                    <a href="transport.php">Transport</a>
                    <a href="birthday.php">Birthday</a>
                    <a href="concerts.php">Concerts</a>
                    <a href="photosvideos.php">Photos & videos</a>
                    <a href="customfood.php">Custom Food</a>
                </ul>
            </nav>
            <a class="log" href="logout.php">Logout</a>
        </nav>
    </ul>


    <div id="menu-bars" class="fas fa-bars"></div>

</header>




<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> Contact us </h1>

    <form method="POST">
        <div class="inputBox">

            <?php if (isset($_POST['submit'])) {
                echo $emptymsg1;
            } ?>
            <input type="text" placeholder="name" name="name1" required>
            <?php if (isset($_POST['submit'])) {
                echo $emptymsg2;
            } ?>
            <input type="email" placeholder="email" name="email" required>

        </div>
        <div class="inputBox">
            <input type="tele" placeholder="Phone number" name="num" required>
            <?php if (isset($_POST['submit'])) {
                echo $emptymsg3;
            } ?>
            <input type="text" placeholder="subject" name="sub" required>
            <?php if (isset($_POST['submit'])) {
                echo $emptymsg4;
            } ?>
        </div>
        <textarea name="msg" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <?php if (isset($_POST['submit'])) {
            echo $emptymsg5;
        } ?>
        <input type="submit" value="Send message" class="btn" name="submit" required>
        <?php if (isset($_POST['submit'])){header('location:payment.php');} ?>
    </form>

</section>

<!-- contact section ends -->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Khulna </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Jashore </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Satkhira </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Sylhet </a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Contact </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Weddings </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Concerts </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Birthday </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Custom Food </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Photos Videos </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Transport </a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 01795552887 </a>
            <a href="#"> <i class="fas fa-phone"></i> 01317716367 </a>
            <a href="#"> <i class="fas fa-envelope"></i> noobsquad@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> teamnoob@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh </a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span style="color: Gold;">NoobSquadTeam</span> | all rights reserved 2022.</div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>




</body>

</html>