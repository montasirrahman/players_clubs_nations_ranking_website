

<header>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <?php include 'header.php';?>
</header>
<?php
// connection mysql
include_once './database/db.php';
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution with order by clause
$sql = "SELECT * FROM nation ORDER BY market_value  + 0 desc";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table' style='max-width: 400px; margin:0 auto;'>";
            echo "<tr>";
                echo "<th scope='col'>#</th>";
                echo "<th scope='col'>Nation Name</th>";
                echo "<th scope='col' style='text-align: right'>Market Value</th>";
            echo "</tr>";
        $counter = 0;
        while($row = mysqli_fetch_array($result)){
            $counter++;
            echo "<tr>";
                echo "<td>" . $counter . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td align='right'>" . $row['market_value'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>


<!-- <form action="#" method="post">
market_value: <input type="text" name="market_convert"><br>
<input type="submit">
</form>


<?php
// $m1 = $_POST["market_convert"];
// $bn = "bn";
// $mi = "m";
 
// // convert 
// if(strpos($m1, $bn) !== false){
//     $m2 = str_replace("bn","",$m1);
//     $m3 = str_replace("€","",$m2);
//     $re = $m3 * 1000000000 ;
//     echo $re;
// } elseif (strpos($m1, $mi) !== false) {
//     $m2 = str_replace("m","",$m1);
//     $m3 = str_replace("€","",$m2);
//     $re = $m3 * 1000000 ;
//     echo $re;
// }
// else{
//     echo "Word Not Found!";
// }
?> -->
