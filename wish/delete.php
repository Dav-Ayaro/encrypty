<?php
include_once('conn.php');
//capture the id variable
$id = $_GET['id'];
echo $id;
$query = "DELETE FROM signup WHERE  id = '$id' ";
$result = mysqli_query($conn,$query);
if($result){
    header("location:admin.php");//redirection function
}else{
    echo "no";
}
?>