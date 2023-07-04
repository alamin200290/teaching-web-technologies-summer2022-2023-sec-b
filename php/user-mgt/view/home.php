<?php 
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home</h1>
        <a href="add_user.php"> Add New User </a> | 
        <a href="view_user.php"> View All User </a> |
        <a href="../controller/logout.php"> logout </a>


</body>
</html>