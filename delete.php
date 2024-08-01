<?php
include("connection2.php");
include("connection.php");

session_start();

    $fname = $_GET['fname'];
    $query = "DELETE FROM signup1 WHERE fname='$fname'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Data Deleted')</script>";
        header('location:donors.php');
    } else {
        echo "<script>alert('Failed to Delete Data')</script>";
    }

?>


