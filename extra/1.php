<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "16";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php 

$nation00 = 'France';

    $query ="SELECT * FROM nation where name = '$nation00'";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<select name="name">
   <option>Select Course</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['name']; ?> </option>
    <?php 
    }
   ?>
</select>
<?php echo $option['name']; ?>
<!----------------------------------------------------------------------->

<?php 

$nation001 = 'England';

    $query1 ="SELECT * FROM nation where name = '$nation001'";
    $result1 = $conn->query($query1);
    if($result1->num_rows> 0){
      $options1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
    foreach ($options1 as $option1) {}
?>
<?php echo $option1['name']; ?>
<?php echo $option1['market_value']; ?>