<?php
session_start();
include 'db.php';

$email=$_SESSION['user'];
$job=$_POST['job_id'];

$user=$conn->query("SELECT id FROM users WHERE email='$email'")->fetch_assoc();

$conn->query("INSERT INTO applications (user_id,job_id)
VALUES ('$user[id]','$job')");

echo "Applied";
?>