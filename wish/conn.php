<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="wish";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("failed to connect".mysqli_connect_error());
}else{
    
}
?>
