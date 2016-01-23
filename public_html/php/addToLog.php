<?php
    $username = $_GET['username'];
    $message = $_GET['message'];

        $con = mysqli_connect("localhost","root","root","LetsTalk","8889");

        $findFriend = "SELECT * FROM `LetsTalk`.`Log` WHERE `ListenerEmail` = '" . $username . "' OR `TalkerEmail` = '". $username ."';";
    $testResult = mysqli_query($con, $findFriend);

    if (mysqli_num_rows($testResult) > 0) {
        $row = mysqli_fetch_assoc($testResult);
        $listener = $row["ListenerEmail"];
        $talker = $row["TalkerEmail"];
    }

            $sql = "INSERT INTO `LetsTalk`.`Log`(`ListenerEmail`,`TalkerEmail`, `SenderEmail`, `Message`) VALUES ('". $listener ."','". $talker ."','". $username ."','". $message ."');";
    echo $sql;
    // Check connection
    $result = mysqli_query($con, $sql);
?>
