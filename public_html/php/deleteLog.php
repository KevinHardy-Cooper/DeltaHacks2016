<?php
	$username = $_GET['username'];

	$con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
    $sql = "DELETE FROM `2035081_letstalk`.`Log` WHERE `ListenerEmail` = '". $username ."' OR `TalkerEmail` = '". $username ."';";
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Fail";
    }
    $result = mysqli_query($con, $sql);
?>
