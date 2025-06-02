<?php
include "connect.php";
$booking_id = $_POST['booking_id'];
$status = $_POST['status']; // 'accepted' or 'rejected'
$query = "UPDATE bookings SET status='$status' WHERE id=$booking_id";
if (mysqli_query($conn, $query)) {
    echo "Booking status updated.";
} else {
    echo "Failed to update.";
}
?>