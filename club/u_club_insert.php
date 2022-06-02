<?php
include_once '../database/db.php';
if(isset($_POST['submit']))
{    
     $club_name = $_POST['club_name'];
     $market_value = $_POST['market_value'];
     $sql = "INSERT INTO club (club_name,market_value)
     VALUES ('$club_name','$market_value')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location: u_club.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>