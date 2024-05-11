<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Movie Records</title>
<link rel="stylesheet" href="CSS/displaystyle.css">
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Movie Records</h1>
    <table>
        <tr>
            <th>Movie ID</th>
            <th>Movie Name</th>
            <th>Director Name</th>
            <th>Year of Release</th>
            <th>Genre</th>
            <th>Duration</th>
            <th>Rating</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        include 'includes/conn.php';
        $q = "SELECT * FROM movies";
        $query = mysqli_query($con, $q);
        while($res = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $res['movie_id']; ?></td>
                <td><?php echo $res['movie_title']; ?></td>
                <td><?php echo $res['primary_director']; ?></td>
                <td><?php echo $res['year_released']; ?></td>
                <td><?php echo $res['genre']; ?></td>
                <td><?php echo $res['duration']; ?></td>
                <td><?php echo $res['rating']; ?></td>
                <td><a href="delete.php?id=<?php echo $res['movie_id']; ?>">Delete</a></td>
                <td><a href="update.php?id=<?php echo $res['movie_id']; ?>">Update</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
