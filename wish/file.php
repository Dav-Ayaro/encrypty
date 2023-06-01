<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
<?php
/*echo $name = $_FILES['file']['name'] ."<br>";
echo $type = $_FILES['file']['type'] ."<br>";
echo $temp_location = $_FILES['file']['temp_name']. "<br>";
echo $error = $_FILES['file']['error'] ."<br>";*/
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myne" id="" required=""><br><br>
    <button type="submit" id="" name="submit">UPLOAD</button>
</form>


</body>
</html>