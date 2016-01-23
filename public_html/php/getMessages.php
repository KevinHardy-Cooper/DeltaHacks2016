<?php
$username = $_GET['username'];
$lastSynced = $_GET['lastDate'];
$con = mysqli_connect("localhost","root","root","LetsTalk","8889");

$sql = "SELECT * FROM `LetsTalk`.`Log` WHERE (`ListenerEmail` = '". $username ."' OR `TalkerEmail` = ' ". $username ." ') AND `TimeStamp` > '" . $lastSynced . "';" ;

$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	echo $row["SenderEmail"] . ": " . $row["Message"] . "\r\n";
    }
}
?>
