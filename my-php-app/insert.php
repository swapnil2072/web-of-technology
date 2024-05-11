<?php
include 'includes/conn.php';

if(isset($_POST['sub'])){
    $title = $_POST['moviename'];
    $director = $_POST['directorname'];
    $yearelease = $_POST['yearelease'];
    $genre = $_POST['genre'];
    $duration = $_POST['duration'];
    $rating = $_POST['rating'];

    $q = "INSERT INTO `movies`(`movie_title`, `primary_director`, `year_released`, `genre`, `duration`, `rating`)
    VALUES ('$title','$director','$yearelease','$genre','$duration','$rating')";

    $query = mysqli_query($con,$q);

    header('location:display.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert</title>
<link rel="stylesheet" href="CSS/insertstyle.css">
</head>
<body>
<div class="container">
    <h2>Enter Movie Details</h2>
    <form method="post">
        <label for="moviename">Movie Title:</label>
        <input type="text" name="moviename" required>
        <label for="directorname">Director Name:</label>
        <input type="text" name="directorname" required>
        <label for="yearelease">Release Year:</label>
        <input type="number" name="yearelease" required>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" required>
        <label for="duration">Duration (in minutes):</label>
        <input type="number" name="duration" required>
        <label for="rating">Movie Rating:</label>
        <select name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit" name="sub">Insert</button>
    </form>
</div>
</body>
</html>
