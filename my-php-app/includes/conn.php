<?php
// Database connection
$con = mysqli_connect('localhost', 'root', 'swapnil@2072', 'movie');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
