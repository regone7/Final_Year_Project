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
    $insert = "INSERT INTO users (f_name, l_name, u_name, gender, d_birth, p_num, email, pass) VALUES ('$f_name','$l_name', '$u_name','$gender','$d_birth','$p_num','$email', '$pass')";
    mysqli_query($con, $insert)
        or die();
    echo "<script >alert('New Record Inserted Successfully'); window.location='view.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Insert New Record</title>
    <link rel="stylesheet" href="css/style.css" />
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
    <div class="form">
        <div>
            <h1 style="color: #EBA219 ;"><b>Insert New Record</h1></b>
            <form method="POST">
                <input type="text" placeholder="First Name" name="f_name" class="form-control" required />
                <input type="text" placeholder="Last Name" name="l_name" class="form-control" required />
                <input type="text" placeholder="Username" name="u_name" class="form-control" required />
                <div class="nav">
                    <li><label for="radioBox1">Male</label>
                        <input id="radioBox1" type="radio" name="gender" value="Male">
                    </li>
                    <li><label for="radioBox2">Female</label>
                        <input id="radioBox2" type="radio" name="gender" value="Female">
                    </li>
                    <li><label for="radioBox3">Other</label>
                        <input id="radioBox3" type="radio" name="gender" value="Other">
                    </li>
                </div>

                <input type="date" placeholder="BirthDay" name="d_birth" class="form-control" required />
                <input type="tel" placeholder="Phone Number" name="p_num" class="form-control" required />
                <input type="email" placeholder="Email" name="email" class="form-control" required />
                <input type="password" placeholder="Password" name="pass" class="form-control" required />
                <button style="color: #EBA219 ;" id="create" name="create" class="btn btn-primary"><b>Update</button></b>

            </form>
        </div>
    </div>
</body>

</html>