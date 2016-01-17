<?php
    $username = $_GET['username'];
    $message = $_GET['message'];
        
        $con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
        
        $findFriend = "SELECT * FROM `2035081_letstalk`.`Log` WHERE `ListenerEmail` = '" . $username . "' OR `TalkerEmail` = '". $username ."';";
    $testResult = mysqli_query($con, $findFriend);
    
    if (mysqli_num_rows($testResult) > 0) {
        $row = mysqli_fetch_assoc($testResult);
        $listener = $row["ListenerEmail"];
        $talker = $row["TalkerEmail"];
    }
    
            $sql = "INSERT INTO `2035081_letstalk`.`Log`(`ListenerEmail`,`TalkerEmail`, `SenderEmail`, `Message`) VALUES ('". $listener ."','". $talker ."','". $username ."','". $message ."');";
    echo $sql;
    // Check connection
    $result = mysqli_query($con, $sql);
?>