<?php
include 'includes/conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "DELETE FROM movies WHERE movie_id = $id";
    mysqli_query($con, $q);
    header('location:display.php');
}
?>
