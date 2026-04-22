<?php
include 'php/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$check = $conn->query("SELECT * FROM users WHERE email='$email'");
if($check->num_rows > 0){
    echo "<script>alert('Email already registered! Please login.'); window.location.href='login.html';</script>";
} else {
    $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
    echo "<script>alert('Registration Successful! Please login.'); window.location.href='login.html';</script>";
}
?>