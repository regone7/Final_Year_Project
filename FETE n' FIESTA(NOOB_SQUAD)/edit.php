<?php
function valid($id, $f_name, $l_name, $u_name, $gender, $d_birth, $p_num, $email, $pass, $error)
{
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
            <nav class="menu"><a href="admin.php">Home</a>
                <a class="log" href="admin_signin.php">Logout</a>
            </nav>
        </ul>
    </header>

    <body>
        <?php

        if ($error != '') {
            echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
        }
        ?>
        <div class="form">

            <div>
                <h1 style="color: #EBA219 ;"><b>Update Users Details</h1></b>
                <form action="update.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input type="text" placeholder="First Name" name="f_name" class="form-control" required value="<?php echo $f_name; ?>" />
                    <input type="text" placeholder="Last Name" name="l_name" class="form-control" required value="<?php echo $l_name; ?>" />
                    <input type="text" placeholder="Username" name="u_name" class="form-control" required value="<?php echo $u_name; ?>" />
                    <input type="text" placeholder="Gender" name="gender" class="form-control" required value="<?php echo $gender; ?>" />
                    <input type="date" placeholder="BirthDay" name="d_birth" class="form-control" required value="<?php echo $d_birth; ?>" />
                    <input type="tel" placeholder="Phone Number" name="p_num" class="form-control" required value="<?php echo $p_num; ?>" />
                    <input type="email" placeholder="Email" name="email" class="form-control" required value="<?php echo $email; ?>" />
                    <input type="password" placeholder="Password" name="pass" class="form-control" required value="<?php echo $pass; ?>" />
                    <button style="color: #EBA219 ;" id="submit" name="submit" class="btn btn-primary"><b>Update</button></b>

                </form>

            </div>
        </div>

    </body>

    </html>
<?php
}
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");

if (isset($_POST['submit'])) {

    if (is_numeric($_POST['id'])) {

        $id = $_POST['id'];
        $f_name  = mysqli_real_escape_string($con, $_POST['f_name']);
        $l_name  = mysqli_real_escape_string($con, $_POST['l_name']);
        $u_name  = mysqli_real_escape_string($con, $_POST['u_name']);
        $gender  = mysqli_real_escape_string($con, $_POST['gender']);
        $d_birth  = mysqli_real_escape_string($con, $_POST['d_birth']);
        $p_num  = mysqli_real_escape_string($con, $_POST['p_num']);
        $email  = mysqli_real_escape_string($con, $_POST['email']);
        $pass  = mysqli_real_escape_string($con, md5($_POST['pass']));

        if ($f_name == '' || $l_name == '' || $gender == '' || $d_birth == '' || $p_num == '' || $email == '' || $pass == '') {

            $error = 'ERROR: Please fill in all required fields!';


            valid($id, $f_name, $l_name, $u_name, $gender, $d_birth, $p_num, $email, $pass, $error);
        } else {

            mysqli_query($con, "UPDATE users set  f_name='$f_name', l_name='$l_name',u_name='$u_name', gender='$gender', d_birth='$d_birth', p_num='$p_num',email='$email', pass='$pass' WHERE id='$id'")
                or die(mysqli_error($con));

            header("Location: view.php");
        }
    } else {

        echo 'Error1!';
    }
} else {

    if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {


        $id = $_GET['id'];
        $resultAll = mysqli_query($con, "SELECT * FROM users WHERE id ='$id'");
        if(!$resultAll){
            die(mysqli_error($con));
        }

        # Check if result greater then 0
        if (mysqli_num_rows($resultAll) > 0){
            while($row = mysqli_fetch_assoc($resultAll)){
                $f_name  = $row['f_name'];
                $l_name  = $row['l_name'];
                $u_name  = $row['u_name'];
                $gender  = $row['gender'];
                $d_birth  = $row['d_birth'];
                $p_num  = $row['p_num'];
                $email  = $row['email'];
                $pass  = md5($row['pass']);
                valid($id, $f_name, $l_name, $u_name, $gender, $d_birth, $p_num, $email, $pass, $error);           
            }
        }

    }
}
?>