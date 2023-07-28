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

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #0D47A1;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>


</head>
<header class="header">
    <a href="home.php" class="logo">Fete n' Festa</a>
    <ul class="navbar-nav">
        <nav class="menu"><a href="admin.php">Home</a>
            <a class="log" href="admin_signin.php">Logout</a>
        </nav>
    </ul>


</header>
<div class="sidenav">
    <b><a href="admin.php">Home</a></b>
    <b><a href="insert.php">Insert New Record</a></p>
        <b><a href="view.php">View Records</a></b>
        <b><a href="logout.php">Logout</a></b>
</div>
<div class="main">
    <!-- add_event start -->
    <?php

    $mysqli = new mysqli("localhost", "root", "", "fetenew");

    // Checking for connections
    if ($mysqli->connect_error) {
        die('Connect Error (' .
            $mysqli->connect_errno . ') ' .
            $mysqli->connect_error);
    }

    // SQL query to select data from database
    $sql = " SELECT * FROM contact ORDER BY id DESC ";
    $result = $mysqli->query($sql);
    $mysqli->close();
    ?>
    <!-- HTML code to display data in tabular format -->




    <body>
        <section class="event" id="event">
            <h1><b>Event Details</h1></b>
            <!-- TABLE CONSTRUCTION -->
            <table>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Event Name</th>
                    <th>User Message</th>
                    <th>Confirmation Message</th>
                    <th>Update</th>
                    <th>Delation</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['name1']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['num']; ?></td>
                        <td><?php echo $rows['sub']; ?></td>
                        <td><?php echo $rows['msg']; ?></td>
                        <td style="color:blue"><b><?php echo $rows['conmsg']; ?></b></td>
                        <td text-align="center">
                        <a href="contact_edit.php?id=<?php echo $rows['id'];?>">Edit</a>
                        </td>
                        <td text-align="center">
                        <a href="contact_delete.php?id=<?php echo $rows['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </section>
        <!--add_event end-->

        <!--user_details start-->
        <!-- PHP code to establish connection with the localserver -->
        <?php

        $con = mysqli_connect("localhost", "root", "", "fetenew");

        $mysqli = new mysqli("localhost", "root", "", "fetenew");

        // Checking for connections
        if ($mysqli->connect_error) {
            die('Connect Error (' .
                $mysqli->connect_errno . ') ' .
                $mysqli->connect_error);
        }

        // SQL query to select data from database
        $sql = " SELECT * FROM users ORDER BY id DESC ";
        $result = $mysqli->query($sql);
        $mysqli->close();
        ?>
        <!-- HTML code to display data in tabular format -->



        <body>
            <section class="user" id="user">
                <h1><b>User Details</h1></b>
                <!-- TABLE CONSTRUCTION -->
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>UserName</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Agreement</th>
                        <th>Update</th>
                        <th>Delation</th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    // LOOP TILL END OF DATA
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
                            <td><?php echo $rows['f_name']; ?></td>
                            <td><?php echo $rows['l_name']; ?></td>
                            <td><?php echo $rows['u_name']; ?></td>
                            <td><?php echo $rows['gender']; ?></td>
                            <td><?php echo $rows['d_birth']; ?></td>
                            <td><?php echo $rows['p_num']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['pass']; ?></td>
                            <td><?php echo $rows['agree']; ?></td>
                            <td text-align="center">
                            <a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a>
                            </td>
                            <td text-align="center">
                            <a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </section>
            <!--user_details end-->

</div>


</body>

</html>