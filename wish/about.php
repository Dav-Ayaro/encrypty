<?php
include_once("conn.php");
//resume session
session_start();
//use the restored variables
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])&& !isset($_SESSION['username'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    
<h1>About us</h1>
<a href="home.php">Home</a>

</body>
</html>