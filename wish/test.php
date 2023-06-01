<?php
// Count total files
$countfiles = count($_FILES['event_Img']['name']);
for($i=0;$i<$countfiles;$i++){
    $filename = $_FILES['event_Img']['name'][$i];

    // Get extension
    $ext = end((explode(".", $filename)));
    move_uploaded_file($_FILES['event_Img']['tmp_name'][$i], "uploads/".$filename);
    $sqlBrand = 'INSERT INTO ot_event_images 
                SET 
                event_id=:event_id, 
                imagepath=:imagepath, 
                imagemimetype=:imagemimetype';
    $query2 = $conn->prepare($sqlBrand);
    $query2->bindParam(':event_id', $eventid);
    $query2->bindParam(':imagepath', $filename);
    $query2->bindParam(':imagemimetype', $ext);
    $status2 = $query2->execute();
}
if($status2)
{

    echo "File upload successfully";
}
else
{
    echo "error";
}
?>