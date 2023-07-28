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


<body>


    <!-- header section starts  -->

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
                <a href="#about">About</a>
                <a href="#review">Review</a>
                <a href="contact.php">Contact</a>
                <a class="log" href="logout.php">Logout</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>
    <?php
    if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
    ?>


    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Celebrate your special day with us!</h3>
            <a href="contact.php" class="btn"> <i class="fa-solid fa-phone"></i> Contact Now </a>


        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-7.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- home section ends -->



    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> Our Services</h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-heart"></i>
                <h3><a href="weddings.php"><b>Wedding</b></a></h3>
                <p>Where there is love there is life. Make your special day memorable!</p>
            </div>

            <div class="box">
                <i class="fa fa-bus"></i>
                <h3><a href="transport.php"><b>Transport</b></a></h3>
                <p>“Transportation is the center of the world!" Book yours now.</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-cake-candles"></i>
                <h3><a href="birthday.php"><b>Birthday</b></a></h3>
                <p>It's your special day — get out there and celebrate!</p>
            </div>

            <div class="box">
                <i class="fas fa-guitar"></i>
                <h3><a href="concerts.php"><b>Concert</b></a></h3>
                <p>We're here because of the music!</p>
            </div>

            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3><a href="photosvideos.php"><b>Photos and Videos</b></a></h3>
                <p>"You don't take a photograph, you make it" - Ansel Adams.</p>
            </div>

            <div class="box">
                <i class="fa fa-cutlery"></i>
                <h3><a href="customfood.php"><b>Custom Food</b></a></h3>
                <p>Way too much happiness from good food!</p>
            </div>


        </div>

    </section>

    <!-- service section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading">About us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3 style="color: Maroon;"><b>We will give a very special celebration for you</b></h3>
                <p style="color: Maroon;">We're optimistic for a future where people will be able to organize their events without being stressed. We see a world where technology enhances human potential, and takes us into a new era of intelligence and progress that everyone can benefit from.</p>
                <a href="contact.php" class="btn">Contact us</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">Our Gallery</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a class="fas fa-heart"></a>
                    <a class="fas fa-share"></a>
                    <a class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <h3 class="title">Photos and Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->



    <!-- review section starts  -->

    <section class="reivew" id="review">

        <h1 class="heading">Client's Review</h1>

        <div class="review-slider swiper-container">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-1.jpg" alt="">
                        <div class="user-info">
                            <h3>Sayed</h3>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <p>Totally satisfied. Love for Fete N' Fiesta.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-3.jpg" alt="">
                        <div class="user-info">
                            <h3>Apurbo</h3>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <p>Their service was amazing, will definitely recommend them to others.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-4.jpg" alt="">
                        <div class="user-info">
                            <h3>Rudra</h3>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <p>So happy that I found your website 💖💖</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->



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
                <a href="index.html"> <i class="fas fa-arrow-right"></i> Home </a>
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
                <a href="#"> <i class="fas fa-phone"></i>  01795552887</a>
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