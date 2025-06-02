<?php
session_start();
include "connect.php";
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
if ($user) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = $user['role'];
    if ($user['role'] == 'admin') {
        header("Location: adminpanel.html");
    } else {
        header("Location: welcome.html");
    }
} else {
    echo "Invalid email or password.";
}
?>