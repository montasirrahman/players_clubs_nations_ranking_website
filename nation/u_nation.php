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
    </style>
</head>
<body>
    <div class='wrapper'>
        <a href="u_nation.php"><h2>Nation Upload</h2></a>


<form action="#" method="post">
    <div class="form-group">
        <label>market value by transfermarkt</label><br>
        <input type="text" name="market_convert" class="form-control"><br>
        <input type="submit">
    </div>
</form>


<?php
// no errors 
error_reporting(0);
ini_set('display_errors', 0);


$m1 = $_POST["market_convert"];
$bn = "bn";
$mi = "m";
 
// convert 
if(strpos($m1, $bn) !== false){
    $m2 = str_replace("bn","",$m1);
    $m3 = str_replace("€","",$m2);
    $re = $m3 * 1000000000 ;
    echo $re;
} elseif (strpos($m1, $mi) !== false) {
    $m2 = str_replace("m","",$m1);
    $m3 = str_replace("€","",$m2);
    $re = $m3 * 1000000 ;
    echo $re;
}
else{
    echo "Need to Add Market Value First";
}
?>










                        
                    <form action="u_nation_insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" required="required" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>market_value</label>
                            <textarea type="number" onkeypress="return isNumberKey(event)" required="required" name="market_value" class="form-control"><?php echo $re; ?></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
    </div>
</body>
</html>

<!-- this will accept only numbers from 0 to 9 -->
<script>
function isNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;

	return true;
}
</script>