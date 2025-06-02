<?php
session_start();
include "connect.php";
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.html");
    exit();
}
$user_id = $_SESSION['user_id'];
$place = $_POST['place'];
$date = $_POST['date'];
$time = $_POST['time'];
$price = $_POST['price'];
$status = "pending";
$query = "INSERT INTO bookings (user_id, place, date, time, price, status)
          VALUES ('$user_id', '$place', '$date', '$time', '$price', '$status')";
if (mysqli_query($conn, $query)) {
    header("Location: display.html");
} else {
    echo "Booking failed!";
}
?>