<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");
	$id = $_POST['id'];
    $name1  = $_POST['name1'];
    $email  = $_POST['email'];
    $num  = $_POST['num'];
    $sub  = $_POST['sub'];
    $msg  = $_POST['msg'];
    $conmsg  = $_POST['conmsg'];
 
	mysqli_query($con,"UPDATE contact set  name1= '$name1', email='$email', num='$num', sub='$sub',msg='$msg', conmsg='$conmsg' WHERE id='$id'");
	header('location:view.php');
