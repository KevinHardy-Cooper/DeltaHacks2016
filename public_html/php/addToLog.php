<?php
	$username = $_GET['username'];
	$message = $_GET['message'];

	$findFriend = "SELECT * FROM `2035081_letstalk`.`Log` WHERE `ListenerEmail` = '" . $username . "' OR `TalkerEmail` = '". $username ."';";
    $testResult = mysqli_query($con, $findFriend);

    if (mysqli_num_rows($testResult) > 0) {
        $row = mysqli_fetch_assoc($testResult)
        $listener = $row["ListenerEmail"];
        $talker = $row["TalkerEmail"];
    }

	$con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
    $sql = "INSERT INTO `2035081_letstalk`.`Log` VALUES ('". $listener ."','". $talker ."','". $username ."','". $message ."');";
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Fail";
    }
    $result = mysqli_query($con, $sql);

    if($result) {
    	echo "Added!";
    } else {
    	echo "Not Added... :(";
    }
?>