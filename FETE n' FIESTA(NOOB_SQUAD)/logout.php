<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");

session_start();
session_unset();
session_destroy();

header('location:index.html');
?>
