<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $market_value = $_POST['market_value'];
     $sql = "INSERT INTO nation (name,market_value)
     VALUES ('$name','$market_value')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header("Location: u_nation.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>