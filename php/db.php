<?php
$conn = new mysqli("localhost", "root", "", "placement_portal");

if($conn->connect_error){
    die("DB Error");
}
?>