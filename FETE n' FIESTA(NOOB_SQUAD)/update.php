<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");
	$id  =$_POST['id'];
	$f_name  = $_POST['f_name'];
	$l_name  = $_POST['l_name'];
	$u_name  = $_POST['u_name'];
	$gender  = $_POST['gender'];
	$d_birth  = $_POST['d_birth'];
	$p_num  = $_POST['p_num'];
	$email  = $_POST['email'];
	$pass  = md5($_POST['pass']);
 
	mysqli_query($con,"UPDATE users set  f_name= '$f_name', l_name='$l_name', u_name='$u_name', gender='$gender', d_birth='$d_birth', p_num='$p_num', email='$email', pass='$pass' WHERE id='$id'");
	header('location:view.php');
