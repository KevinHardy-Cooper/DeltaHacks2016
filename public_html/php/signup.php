<?php
	$usernameNoun = $_GET['usernameNoun'];
	$usernameAdjective = $_GET['usernameAdjective'];
	$fName = $_GET['fName'];
	$lName = $_GET['lName'];
	$email = $_GET['email'];
	$password = crypt($_GET['password']);
	$aNum = $_GET['aNum'];
	$aStr = $_GET['aStr'];
	$aCit = $_GET['aCit'];
	$aCod = $_GET['aCod'];
	$aReg = $_GET['aReg'];
	$aCou = $_GET['aCou'];
	$signUpAch = $_GET['signUpAch'];
	$gender = $_GET['gender'];

	$personInsertCmd = "INSERT INTO `2035081_letstalk`.`Person` VALUES ('" . $email . "', '" . $fName . "', '" . $lName . "', '" . $password . 
		"', '" . $usernameNoun. "', '" . $usernameAdjective . "', '" . $gender . "', '" . $signUpAch . "', '" . $aCod . "', '" . $aStr .
		"', '" . $aNum . "', '" . $aCit . "', '" . $aReg . "', '" . $aCou . "');";

	//(`Email`, `FirstName`, `LastName`, `Password`, `UserAdjective`, `UserNoun`, `Gender`, `SmallAchievement`, `PostalCode`, `StreetName`, `StreetNum`, `City`, `Region`, `Country`)
	//TODO Implement Listener functionality.
	//$listenerInsertCmd = "INSERT INTO `2035081_letstalk`.`Listener` VALUES ('" . $email . "', '" . $solver . "', '" . $listenExp . "', '" .
	//	$personalExp . "', '" . $bluntness . "');";

	$con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Fail";
  	}
	mysqli_query($con, $personInsertCmd);
?>
