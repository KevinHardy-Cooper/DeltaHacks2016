<?php
	$username = $_GET['username'];
	$password = $_GET['password'];

	$con = mysqli_connect("localhost:8889","root","root","mysql");

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Fail";
  	}

  	if(strpos($username,' ') !== false) {
  		$userNamePieces = explode(" ", $username);
		$sql = "SELECT * FROM `Person` WHERE `UsernameAdjective` = '" . $userNamePieces[0] . "' AND `` = '" . $userNamePieces[1] . "';";
		$result = mysqli_query($con, $sql);
  	} else {
  		//TODO Check if it is a valid email address
  		$sql = "SELECT * FROM `Person` WHERE `Email` = '" . $username . "';";
  		$result = mysqli_query($con, $sql);
  	}

	if (mysqli_num_rows($result) > 0) {							//Did we get a result?
    	while($row = mysqli_fetch_assoc($result)) {		
        	$hashed = $row["Password"];							//Get the Hashed Password
        	if (($hashed == crypt($password, $hashed))) {		//Check against input password
  				echo "True";
  				session_start();
  				$_SESSION["Username"] = $username;									
			} else {
				echo "False";
			}
    	}
	} else {
		echo "DNE";
	}

?>