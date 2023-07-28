<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew") or die();

if (isset($_POST['submit'])) {

    $email  = $_POST['email'];

    $select = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['email'] == $email) {
            $_SESSION['status'] = "Please reset your password.";
            header('location: set_pass.php');
        }
    } else {
 
    }
};
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


<body>


    <!-- header section starts  -->

    <header class="header">

        <a href="index.html" class="logo">Fete n' Festa</a>
        <ul class="navbar-nav">
            <nav class="menu">
                <a class="reg" href="register.php">Sign up</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>
    <!-- login section starts  -->
    <link href="css/style.css" rel="stylesheet">

    <div class="login">
        <div class="form">
            <h1 style="color: purple;"><b>Forgot Password?</h1></b>
            <p style="background-color: palegreen;">Enter your email address.</p>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="text-danger">' . $error . '</span>';
                };
            };
            ?>
            <form method="POST">
                <input type="email" placeholder="Enter Your Email" name="email" class="form-control" required/>
                <button id="submit" name="submit" class="btn btn-primary">Continue</button>
            </form>
        </div>
    </div>

</body>

</html>



<!-- login section ends  -->


