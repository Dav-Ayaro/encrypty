<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pass']);
session_destroy();
header("location:login.php");

?>