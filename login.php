<?php
session_start();
include 'php/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

if($result->num_rows > 0){
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Invalid email or password!'); window.location.href='login.html';</script>";
}
?>