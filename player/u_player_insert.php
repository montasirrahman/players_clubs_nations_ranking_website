<?php
include_once '../database/db.php';
if(isset($_POST['submit']))
{    


//--------------------------Nation---------------------------------------------

   $nation001 = $_POST['nation'];

   $query1 ="SELECT * FROM nation where name = '$nation001'";
   $result1 = $conn->query($query1);
   if($result1->num_rows> 0){
     $options1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
   }
   foreach ($options1 as $option1) {}

// echo $option1['name'];
// echo $option1['market_value']; 

//--------------------------Club-----------------------------------------------

$nation002 = $_POST['club'];

$query2 ="SELECT * FROM club where club_name = '$nation002'";
$result2 = $conn->query($query2);
if($result2->num_rows> 0){
  $options2= mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
foreach ($options2 as $option2) {}

//echo $option2['club_name'];
//echo $option2['market_value']; 





//Math
$po = ((($_POST['int_app'] * $option1['market_value']) + ($_POST['dom_app'] * $option2['market_value'])) / ($_POST['age'] * 100000));





     
     $player_name = $_POST['player_name'];
     $age = $_POST['age'];
     $dom_app = $_POST['dom_app'];
     $int_app = $_POST['int_app'];
     $nation = $_POST['nation'];
     $club = $_POST['club'];
     $point = $po;
     $sql = "INSERT INTO player (player_name,age,dom_app,int_app,nation,club,point)
     VALUES ('$player_name','$age','$dom_app', '$int_app', '$nation', '$club','$point')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully ! <br>";
        header("Location: u_player.php");
        echo ''.$point.'';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>