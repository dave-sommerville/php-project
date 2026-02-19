<?php
$host = "localhost";
$user = "root"; // Default XAMPP username
$pass = "";     // Default XAMPP password is empty
$dbname = "simple_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>