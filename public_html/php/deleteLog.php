<?php
	$username = $_GET['username'];

	$con = mysqli_connect("localhost","root","root","LetsTalk","8889");
    $sql = "DELETE FROM `LetsTalk`.`Log` WHERE `ListenerEmail` = '". $username ."' OR `TalkerEmail` = '". $username ."';";
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Fail";
    }
    $result = mysqli_query($con, $sql);
?>
