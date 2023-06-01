<?php
include_once("file.php");
include_once("conn.php");
if(isset($_FILES['file']['submit'])){
    $name=$_FILES['file']['myne'];
    $type=$_FILES['file']['type'];
    $temp_name=$_FILES['file']['temp_name'];
    $size=$_FILES['file']['size'];
    $error=$_FILES['file']['error'];

$tempExtension = explode('.', $name);

$fileExtension = strtolower(end($tempExtension));

$isAllowed = array("jpeg","jpg","png","pdf","gif");

if(in_array($fileExtension,$isAllowed)){
    if($error === 0){
        if($size < 100000){
            $newFileName = uniqid('',true).".".$fileExtension;
            $fileDestination ="upload/".$newFileName;
            move_uploaded_file($temp_name,$fileDestination);

            header("location:upload.php?upload=succesfully!");
        }else{
            echo "the size is too big";
        }

    }else{
        echo "sorry there was an error";
    }
}else{
    echo "file type is not accepted";
}

}
?>
