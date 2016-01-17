<?php
  session_start();
  $username = $_GET['username'];
  $password = $_GET['password'];
  $con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");

  // Check connection
  if (!$con) {
    echo "Fail";
  }

  if(strpos($username,' ') !== false) {
    $userNamePieces = explode(" ", $username);
    $sql = "SELECT * FROM `2035081_letstalk`.`Person` WHERE `UsernameAdjective` = '" . $userNamePieces[0] . "' AND `` = '" . $userNamePieces[1] . "';";
    $result = mysqli_query($con, $sql);
  } else {
    //TODO Check if it is a valid email address
    $sql = "SELECT * FROM `2035081_letstalk`.`Person` WHERE `Email` = '" . $username . "';";
    $result = mysqli_query($con, $sql);
  }

  if (mysqli_num_rows($result) > 0) {             //Did we get a result?
    $row = mysqli_fetch_assoc($result);
    $hashed = $row["Password"];             //Get the Hashed Password
    if (($hashed == crypt($password, $hashed))) {   //Check against input password
      echo "True";
      $_SESSION["Username"] = $username;                
    } else {
      echo "False";
    }
  } else {
    echo "DNE";
  }
?>