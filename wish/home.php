<?php
include_once("conn.php");
//resume session
session_start();
//using session varibales

if(!isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['username'])){
    header("location:login.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<?php
echo "welcome:<b>".$_SESSION['email']."</b>" ."</br>"."</br>"."</br>";
?>

<a href="logout.php">logout</a>
<br>
<br>
<br>
<a href="about.php">About</a>
</body>
</html>