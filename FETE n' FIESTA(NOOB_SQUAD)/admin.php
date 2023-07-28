<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");
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
        <nav class="menu"><a href="admin.php">Adminstrator</a>
            <a class="log" href="admin_signin.php">Logout</a>

        </nav>
    </ul>


</header>

<body>


    <!-- header section starts  -->
    <?php
    if (isset($_SESSION['status'])) {
        echo  $_SESSION['status'];
        unset($_SESSION['status']);
    }
    ?>

    <div class="sidenav">
        <b><a href="admin.php">Home</a></b>
        <b><a href="insert.php">Insert New Record</a></p>
            <b><a href="view.php">View Records</a></b>
            <b><a href="logout.php">Logout</a></b>
    </div>


    <body>
        <section class="admin" id="admin">

            <div class="content">
                <h1><b>Welcome Admin!! Dashboard of Fete n' Fiesta❤</h1></b>

            </div>


    </body>

</html>