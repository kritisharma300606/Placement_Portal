<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: ../login.html");
    exit();
}

$application_id = $_POST['application_id'];
$user_id = $_SESSION['user_id'];

// Make sure user can only withdraw their own application
$conn->query("DELETE FROM applications WHERE id='$application_id' AND user_id='$user_id'");

echo "<script>alert('Application withdrawn successfully!'); window.location.href='../dashboard.php';</script>";
?>