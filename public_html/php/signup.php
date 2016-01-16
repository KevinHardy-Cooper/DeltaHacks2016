<?php

/* 
Script:

$(#signUpButton).click(function (){
	//Grab all data
	var fName = $(#firstName).val();	
	var lName = $(#lastName).val();	
	var email = $(#email).val();	
	var password = $(#password).val();
	var username; //TODO Grab from slider/selector?
	
	var aNum = $(#addressNumber).val();
	var aStr = $(#addressStreet).val();
	var aCit = $(#addressCity).val();
	var aCod = $(#addressCode).val();
	var aReg = $(#addressRegion).val();
	var aCou = $(#addressCountry).val();

	var signUpAch = $(#signUpAchievement).val();

	var gender;
	if($("#male").attr("checked")) {
		gender = "M";
	} else if($("#female").attr("checked")) {
		gender = "F";
	} else if($("#other").attr("checked")) {
		gender = "O";
	} else {
		//TODO Spencer Notify User that northing was clicked, but needs to be.
	}
	
	if(fName.length < 1 || fName.length > 255) {
		moveToError("First Name");
	} else if(lName.length < 1 || lName.length > 255) {
		moveToError("Last Name");
	} else if(password.length < 7 || password.length > 32) {
		moveToError("Password");
	} else if(aNum.length < 1 || aNum.length > 9) {
		moveToError("Address Number");
	} else if(aStr.length < 1 || aStr.length > 255) {
		moveToError("Address Street");
	} else if(aCit.length < 1 || aCit.length > 255) {
		moveToError("Address City");
	} else if(aCod.length < 1 || aCod.length > 6) {
		moveToError("Address Code");
	} else if(aReg.length < 1 || aReg.length > 255) {
		moveToError("Postal Code/Zip Code");
	} else if(aCou.length < 4 || aCou.length > 35) {
		moveToError("Country Code");
	} else if(signUpAch.length < 5 || signUpAch.length > 140) {
		moveToError("Sign Up Architecture");
	} 
	//TODO PHP Validate email
	//TODO Verify Address
	//TODO Send Valid stuff to PHP

	$.ajax({
			method: 'get',
  			url: 'php/signUpScript.php',
  			data: {
    			'fname': fname,
    			'lname': lname,
    			'email': email,
    			'password': password,
    			'aNum': aNum,
    			'aStr': aStr,
    			'aCit': aCit,
    			'aCod': aCod,
    			'aReg': aReg,
    			'aCou': aCou,
    			'signUpAch': signUpAch,
    			'username': username
  			},
  			success: function(msg) {

  			}
		});
});

*/
	$username = $_GET['username'];
	$usernamePieces = explode(" ", $username);
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

	$personInsertCmd = "INSERT INTO `2035081_letstalk`.`Person` VALUES (`" . $email . "`, `" . $fName . "`, `" . $lName . "`, `" . $password . 
		"`, `" . $usernamePieces[0]. "`, `" . $usernamePieces[1] . "`, `" . $gender . "`, `" . $signUpAch . "`, `" . $aCod . "`, `" . $aStr .
		"`, `" . $aNum . "`, `" . $aCit . "`, `" . $aReg . "`, `" . $aCou . "`)";

	$listenerInsertCmd = "INSERT INTO `2035081_letstalk`.`Listener` VALUES (`" . $email . "`, `" . $solver . "`, `" . $listenExp . "`, `" .
		$personalExp . "`, `" . $bluntness . "`);";

	$con = mysqli_connect("localhost:8889","root","root","mysql");

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Fail";
  	}
	$result = mysqli_query($con, $sql);


?>

