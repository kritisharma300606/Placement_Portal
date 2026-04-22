<?php
include 'db.php';

$company = $_POST['company'];
$role = $_POST['role'];
$salary = $_POST['salary'];

$conn->query("INSERT INTO jobs (company,role,salary)
VALUES ('$company','$role','$salary')");
?>