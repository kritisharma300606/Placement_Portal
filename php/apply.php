<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    echo "<script>alert('Please login first to apply!'); window.location.href='../login.html';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$job_id = $_POST['job_id'];

// Check if already applied
$check = $conn->query("SELECT * FROM applications WHERE user_id='$user_id' AND job_id='$job_id'");

if($check->num_rows > 0){
    echo "<script>alert('You have already applied for this job!'); window.location.href='../jobs.php';</script>";
} else {
    $conn->query("INSERT INTO applications (user_id, job_id) VALUES ('$user_id', '$job_id')");
    echo "<script>alert('Application Submitted Successfully! 🎉'); window.location.href='../dashboard.php';</script>";
}
?>