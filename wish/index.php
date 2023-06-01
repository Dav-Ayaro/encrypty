<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="container">
    <h1>register</h1>
    <form action="" method="post">
        <label for="regNo">regNo</label>
        <input type="text" name="regNo" id="" required=""><br><br>
        username<input type="text"name="username" id="" required=""><br><br>
        Email <input type="text"name="Email" id="" required=""><br><br>
        password<input type="password" name="pass" id="" required=""><br><br>
        <button type="submit"name="submitsignup">Register</button>
        <p>Already have an Account? <a href="login.php">login</a> </p>
    </form>
</div>   
<?php
include_once("conn.php");
if(isset($_POST['submitsignup'])){
    $regNo=$_POST['regNo'];
    $sanitize_regNo = htmlentities($regNo, ENT_QUOTES,"UTF-8");
    $enc_regNo = base64_encode($sanitize_regNo);
    $username=$_POST['username'];
    $sanitize_username = htmlentities($username, ENT_QUOTES,"UTF-8");
    $enc_username = base64_encode($sanitize_username);
    $email=$_POST['Email'];
    $sanitize_email = htmlentities($email, ENT_QUOTES,"UTF-8");
    $enc_email= base64_encode($sanitize_email);
    $password=$_POST['pass'];
    $sanitize_pasword = htmlentities($password, ENT_QUOTES,"UTF-8");
    $key = date('mdhs');
    // echo($passhash);
    $first_enc_password = md5($sanitize_pasword);
    $new_enc_password = $first_enc_password."-".$key;
    $verified_password = sha1($new_enc_password);

    if(!empty($regNo) && !empty($username) && !empty($email) && !empty($password)){

    $sql =("INSERT INTO signup(regNo,uusername,email,`password`,`key`) VALUES('$enc_regNo','$enc_username','$enc_email','$verified_password',$key)");
    $result=mysqli_query($conn,$sql);

if($result){
    header("location:login.php");
}else{
    echo 'no insertions';
}

}else{
    echo 'some fields are empty';
}

}

?>

</body>
</html>