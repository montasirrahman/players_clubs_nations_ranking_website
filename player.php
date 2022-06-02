

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

$order = 'ORDER BY point + 0 desc';
 
// Attempt select query execution with order by clause
$sql = "SELECT player.id, player.player_name, player.age, player.dom_app, player.int_app, player.nation, player.club, player.point, nation.market_value, club.market_value AS c_market_value FROM player LEFT JOIN nation ON player.nation = nation.name LEFT JOIN club ON player.club = club.club_name $order";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table' style='max-width: 400px; margin:0 auto;'>";
            echo "<tr>";
                echo "<th scope='col'>#</th>";
                echo "<th scope='col'>Player Name</th>";
                echo "<th scope='col'>Age</th>";
                echo "<th scope='col'>D.App</th>";
                echo "<th scope='col'>I.App</th>";
                echo "<th scope='col' style='display:none'>Nation</th>";
                echo "<th scope='col' style='display:none'>Nation market value</th>";
                echo "<th scope='col' style='display:none'>Club</th>";
                echo "<th scope='col' style='display:none'>Club market value</th>";
                echo "<th scope='col'>Point %</th>";
            echo "</tr>";
        $counter = 0;
        while($row = mysqli_fetch_array($result)){
            $counter++;
            echo "<tr>";
                echo "<td>" . $counter . "</td>";
                echo "<td>" . $row['player_name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['dom_app'] . "</td>";
                echo "<td>" . $row['int_app'] . "</td>";
                echo "<td style='display:none'>" . $row['nation'] . "</td>";
                echo "<td style='display:none'>" . $row['market_value'] . "</td>";
                echo "<td style='display:none'>" . $row['club'] . "</td>";
                echo "<td style='display:none'>" . $row['c_market_value'] . "</td>";
                // $point = (($row['int_app'] * $row['market_value']) + ($row['dom_app'] * $row['c_market_value'])) / $row['age'];
                // $point_01 = number_format($point, 0);
                // echo "<td>$point_01</td>";
                echo "<td>" . number_format($row['point'], 0) . "%</td>";
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

