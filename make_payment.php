<?php
session_start();
include "connect.php";
$user_id = $_SESSION['user_id'];
$booking_id = $_POST['booking_id'];
$amount = $_POST['amount'];
$query = "INSERT INTO payments (user_id, booking_id, amount) VALUES ('$user_id', '$booking_id', '$amount')";
if (mysqli_query($conn, $query)) {
    header("Location: receipt.html");
} else {
    echo "Payment failed.";
}
?>