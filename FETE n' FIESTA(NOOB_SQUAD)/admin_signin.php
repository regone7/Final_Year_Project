<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew") or die();

if (isset($_POST['submit'])) {
    $a_name  = $_POST['a_name'];
    $a_pass  = $_POST['a_pass'];
    $select = " SELECT * FROM admins WHERE a_name = '$a_name' && a_pass = '$a_pass' ";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['status'] = "Login Successfully.";
        header("location: admin.php");
    } elseif (!empty($a_name)) {
        $error[] = "You did not fill out the required fields.";
    } elseif (!empty($a_pass)) {
        $error[] = "You did not fill out the required fields.";
    } elseif (($a_name['a_name'] != $a_name) ||
        ($a_pass['a_pass'] != $a_pass)
    ) {
        $error[] = 'incorrect username or password!';
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

        <a href="#" class="logo">Fete n' Festa</a>
        <ul class="navbar-nav">
            <nav class="menu">
                <a class="reg" href="admin_signup.php">Sign up</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>
    <!-- login section starts  -->
    <link href="css/style.css" rel="stylesheet">

    <div class="login">
        <div class="form">
            <h1 style="color: #13084E;"><b>Welcome Admin!<br>
                    Sign In with Fete n' Fiesta❤</h1></b>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="text-danger">' . $error . '</span>';
                };
            };
            ?>
            <form method="POST">
                <input type="text" placeholder="Username" name="a_name" class="form-control" required />
                <input type="password" placeholder="Password" name="a_pass" class="form-control" required />
                <button id="submit" name="submit" class="btn btn-primary">SignIn</button>
                <p class="message">Forgot password? <a href="forget_password.php"><b style="color: black;"> Reset Password</b></a></p>
                <p class="message">Don't have an account? <a href="register.php"><b style="color: black;"> Create an account</b></a></p>
            </form>
        </div>
    </div>

</body>

</html>



<!-- login section ends  -->