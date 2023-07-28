<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fetenew");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM contact WHERE id='$id'")
        or die(mysqli_error($con));

    header("Location: view.php");
} else {
    header("Location: view.php");
}
?>