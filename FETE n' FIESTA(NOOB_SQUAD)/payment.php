<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");

if (isset($_POST['create'])) {
    $f_name  = $_POST['f_name'];
    $l_name  = $_POST['l_name'];
    $u_name  = $_POST['u_name'];
    $gender  = $_POST['gender'];
    $d_birth  = $_POST['d_birth'];
    $p_num  = $_POST['p_num'];
    $email  = $_POST['email'];
    $pass  = md5($_POST['pass']);
    $c_pass  = md5($_POST['c_pass']);
    $agree  = $_POST['agree'];



    $select = "SELECT * FROM users WHERE email = '$email' && pass = '$pass' ";

    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        if ($pass != $c_pass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO users (f_name, l_name, u_name, gender, d_birth, p_num, email, pass, c_pass, agree) VALUES ('$f_name','$l_name', '$u_name','$gender','$d_birth','$p_num','$email', '$pass','$c_pass','$agree')";
            mysqli_query($con, $insert);
            header('location:login.php');
        }
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


<body>


    <!-- header section starts  -->

    <header class="header">

        <a href="home.php" class="logo">Fete n' Festa</a>
        <ul class="navbar-nav">
            <nav class="menu"><a href="home.php">Home</a>
                <a class="log" href="logout.php">Logout</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>
    <!-- login section starts  -->
    <link href="css/style.css" rel="stylesheet">

    <div class="form">

        <h1 style="color: Bottle Green;"><b>Make Your Payment</h1></b>
        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="text-danger">' . $error . '</span>';
            };
        };
        ?>

        <form method="POST"> 
            <input type="text" placeholder="Event Name" name="e_name" class="form-control" required />
            <input type="text" placeholder="Organization Name" name="o_name" class="form-control" required />
            <div class="nav">
                <li><label for="radioBox1">bKash</label>
                    <input id="radioBox1" type="radio" name="trans" value="bKash">
                </li>
                <li><label for="radioBox2">Nagad</label>
                    <input id="radioBox2" type="radio" name="trans" value="Nagad">
                </li>
                <li><label for="radioBox3">Cash</label>
                    <input id="radioBox3" type="radio" name="trans" value="Cash">
                </li>
            </div>

            <input type="date" placeholder="Date of payment" name="p_date" class="form-control" required />
            <input type="tel" placeholder="Phone Number" name="p_num" class="form-control" required />
            <input type="email" placeholder="Email" name="email" class="form-control" required />

            <button style= background:orange; id="create" name="create" class="btn btn-primary">Pay</button>
        </form>
    </div>


</body>

</html>