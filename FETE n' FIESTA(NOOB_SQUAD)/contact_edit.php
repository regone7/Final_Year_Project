<?php
function valid($id, $name1, $email, $num, $sub, $msg, $conmsg)
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
                <h1 style="color: #EBA219 ;"><b>Contact Updating</h1></b>
                <form action="contact_update.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input type="text" placeholder="Name" name="name1" class="form-control" required value="<?php echo $name1; ?>" />
                    <input type="email" placeholder="Email" name="email" class="form-control" required value="<?php echo $email; ?>" />
                    <input type="tel" placeholder="Phone Number" name="num" class="form-control" required value="<?php echo $num; ?>" />
                    <input type="text" placeholder="Subject" name="sub" class="form-control" required value="<?php echo $sub; ?>" />
                    <input type="text" placeholder="Message" name="msg" class="form-control" required value="<?php echo $msg; ?>" />
                    <input type="text" placeholder="Confirmation Message" name="conmsg" class="form-control" required value="<?php echo $conmsg; ?>" />
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
        $name1  = mysqli_real_escape_string($con, $_POST['name1']);
        $email  = mysqli_real_escape_string($con, $_POST['email']);
        $num  = mysqli_real_escape_string($con, $_POST['num']);
        $sub  = mysqli_real_escape_string($con, $_POST['sub']);
        $msg  = mysqli_real_escape_string($con, $_POST['msg']);
        $conmsg  = mysqli_real_escape_string($con, $_POST['conmsg']);


        if ($name1 == '' || $email == '' || $num == '' || $sub == '' || $msg == '' || $conmsg == '') {

            $error = 'ERROR: Please fill in all required fields!';


            valid($id, $name1, $email, $num, $sub, $msg, $conmsg);
        } else {

            mysqli_query($con, "UPDATE contact SET  name1 ='$name1', email='$email', num='$num', sub='$sub', msg='$msg', conmsg='$conmsg' WHERE id='$id'")
                or die(mysqli_error($con));

            header("Location: view.php");
        }
    } else {

        echo 'Error1!';
    }
} else {

    if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {


        $id = $_GET['id'];
        $resultAll = mysqli_query($con, "SELECT * FROM contact WHERE id ='$id'");
        if(!$resultAll){
            die(mysqli_error($con));
        }

        # Check if result greater then 0
        if (mysqli_num_rows($resultAll) > 0){
            while($row = mysqli_fetch_assoc($resultAll)){
                $name1  = $row['name1'];
                $email  = $row['email'];
                $num  = $row['num'];
                $sub  = $row['sub'];
                $msg  = $row['msg'];
                $conmsg  = $row['conmsg'];
                valid($id, $name1, $email, $num, $sub, $msg, $conmsg);
            }
        }

    }
}
?>
