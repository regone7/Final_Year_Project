<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew") or die("Database connection error!");


if (isset($_POST['submit'])) {

    $email1 = $_POST['email'];
    $n_pass = md5($_POST['n_pass']);
    $r_pass = md5($_POST['r_pass']);

    if ($n_pass == $r_pass) {

        $query =  "SELECT * from users where email='$email1'";
        $query_check = mysqli_query($con, $query);
        if (mysqli_num_rows($query_check) > 0) {
            $query1 =  "UPDATE users SET pass = '$n_pass'  WHERE email='$email1'";
            $query_run = mysqli_query($con, $query1);
            if ($query_run) {
                echo "<script>alert('Update Sucessfully'); window.location='home.php'</script>";
            } else {
                echo "<script>alert('Password is not updated, Try again!'); window.location='forget_password.php'</script>";
            }
        } else {
            echo "<script>alert('Eamil not found, Please register first'); window.location='register.php'</script>";
        }
    } else {
        echo "<script>alert('Your new and Retype Password is not match'); window.location='forget_password.php'</script>";
    }
} else {
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
            <h1 style="color: purple;"><b>Reset Password</h1></b>
            <p style="background-color: palegreen;">Please Create a new password.</p>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="text-danger">' . $error . '</span>';
                };
            };
            ?>
            <form method="POST">
                <input type="email" placeholder="Enter Your Email" name="email" class="form-control" required />
                <input type="password" placeholder="Create new password" name="n_pass" class="form-control" required />
                <input type="password" placeholder="Confirm new password" name="r_pass" class="form-control" required />
                <input type="hidden" name="username" value="' . $username . '">
                <input type="hidden" name="id" value="' . $id . '">
                <button id="submit" name="submit" class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>

</body>

</html>



<!-- login section ends  -->