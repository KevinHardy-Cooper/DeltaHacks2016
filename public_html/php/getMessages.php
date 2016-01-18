<?php
$username = $_GET['username'];
$lastSynced = $_GET['lastDate'];
$con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");

$sql = "SELECT DISTINCT * FROM `2035081_letstalk`.`Log` WHERE (`ListenerEmail` = '". $username ."' OR `TalkerEmail` = ' ". $username ." ') AND `TimeStamp` > '" . $lastSynced . "';" ;

$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	echo $row["SenderEmail"] . ": " . $row["Message"] . "\r\n";
    }
}
?>