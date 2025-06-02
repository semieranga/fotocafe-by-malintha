<?php
include "connect.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = 'user';
$query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
if (mysqli_query($conn, $query)) {
    header("Location: signin.html");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>