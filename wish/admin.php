<?php
// include_once("header.php");
include_once("conn.php");

$query = "SELECT * FROM signup";

$result = mysqli_query($conn,$query);

if($result){
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>S/N</th> <th>regNo</th> <th>username</th> <th>email</th> <th>update</th> <th>delete</th>";
    echo "</tr>";

    while($row=mysqli_fetch_array($result)){
        $regNo = $row['regNo'];
        $dec_regNo = base64_decode($regNo);
        $username = $row['uusername'];
        $dec_username = base64_decode($username);
        $email = $row['email'];
        $dec_email = base64_decode($email);
    
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$dec_regNo."</td>";
        echo "<td>".$dec_username."</td>";
        echo "<td>".$dec_email."</td>";

        echo "<td><a href='update.php?id=".$row['id']."'>update</a></td>";
        echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}



// include_once("footer.php");
?>
