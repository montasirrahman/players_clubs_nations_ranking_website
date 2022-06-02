<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            max-width: 500px;
            width: 98%;
            margin: 0 auto;
        }
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class='wrapper'>
        <a href="u_player.php"><h2>Player Upload</h2></a>


<!-- <form action="#" method="post">
    <div class="form-group">
        <label>market value by transfermarkt</label><br>
        <input type="text" name="market_convert" class="form-control"><br>
        <input type="submit">
    </div>
</form> -->


<?php
// no errors 
// error_reporting(0);
// ini_set('display_errors', 0);


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
//     echo "Need to Add Market Value First";
// }
?>







<?php 
include_once '../database/db.php';


//Nation ------------------------------------------------------
    $query1 ="SELECT * FROM nation ";
    $result1 = $conn->query($query1);
    if($result1->num_rows> 0){
      $options1= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>

<?php
//Club ------------------------------------------------------
    $query2 ="SELECT * FROM club ";
    $result2 = $conn->query($query2);
    if($result2->num_rows> 0){
      $options2= mysqli_fetch_all($result2, MYSQLI_ASSOC);
    }
?>










                        
                    <form action="u_player_insert.php" method="post">
                        <div class="form-group">
                            <label>player_name</label>
                            <input type="text" required="required" name="player_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>age</label>
                            <input type="text" required="required" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Dominance Appearance</label>
                            <input type="text" required="required" name="dom_app" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>International Appearance</label>
                            <input type="text" required="required" name="int_app" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nation</label>
                            <select name="nation" class="form-select"  aria-label="Default select example">
                            <option>Select Country</option>
                            <?php 
                            foreach ($options1 as $option1) {
                            ?>
                                <option><?php echo $option1['name']; ?> </option>
                                <?php 
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Club</label>
                            <select name="club" class="form-select"  aria-label="Default select example">
                            <option>Select Club</option>
                            <?php 
                            foreach ($options2 as $option2) {
                            ?>
                                <option><?php echo $option2['club_name']; ?> </option>
                                <?php 
                                }
                            ?>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
    </div>
</body>
</html>