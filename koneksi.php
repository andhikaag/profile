<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "cvku";

// Create connection
$conn = mysqli_connect($servername, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>