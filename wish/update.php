<?php
include_once("conn.php");
$id = $_GET['id'];
$sql=" SELECT * FROM signup WHERE id ='$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>

<?php
include_once("conn.php");
if(isset($_POST['submit'])){
    $regNo=$_POST['regNo'];
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    if(empty($name) && empty($regNo) && empty($email) && empty($password)){
        $query = "UPDATE signup set regNo = '$regNo', uusername = '$name', email = '$email', password = '$password' where id = '$id'";
        $result = mysqli_query($conn,$query);
        if($result){
            header("location:admin.php");
        }else{
            echo mysqli_error($conn);
        }
            
}else{
    echo 'yes';
}
} 
// include_once("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<form action="" method="post">
    <label for="username">name
        <input type="text" name="username" id=""  required="" value="<?php echo $row['uusername']?>">
    </label><br><br>
    <label for="regNo">regNo
        <input type="text" name="regNo" id=""  required="" value ="<?php echo $row['regNo']; ?>">
    </label><br><br>
    <label for="email">email
        <input type="email" name="email" id=""  required="" value="<?php echo $row['email']; ?>">
    </label><br><br>
    <label for="password">password
        <input type="password" name="pass"  id="" required=""  placeholder="*******">
    </label><br><br>
    <button type="submit" value="register" name="submit">update</button>
</form>   


</body>
</html>