<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
<form action="" method="post">
    email<input type="text" name="email" id="" required=""><br><br>
    password<input type="password" name="pass" id="" required=""><br><br>
    <button type="submit" name="submitLogin">Login</button>
    <p>Don't have an Account? <a href="index.php">signup</a> </p>
    </div>
</form>        
<?php

include_once("conn.php");

if(isset($_POST['submitLogin'])){
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
    $first_enc_password = md5($sanitize_pasword);
    $new_enc_password = $first_enc_password."-".$key;
    $verified_password = sha1($new_enc_password);

if(!empty($email) && !empty($password)){

    $sql=("SELECT * FROM signup where email='$enc_email' LIMIT 1");
    
        $result=mysqli_query($conn,$sql);

        if($result){
            $row= mysqli_fetch_array($result);
            $very=password_verify($verified_password, $row['password']);
            if($very){
                if(mysqli_num_rows($result)>0){
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$password;
                
                    header("location:home.php");
                }
            }else{
                echo('verification fail');
            }
        }

}

}
?>
</body>
</html> 