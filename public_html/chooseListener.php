<?php
	session_start();
	$username = $_SESSION["Username"];
	$con = mysqli_connect("localhost","root","root","LetsTalk","8889");
	$sql = "SELECT * FROM `LetsTalk`.`Person` WHERE `Email` = '". $username ."';";
	// Check connection
	if (!$con) {
		echo "Database not available";
	}
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);

	$chosenTopics = array();									//Loop through this to use in Algo
	for ($i=0; true; $i++) {
		$topic = "";
		$topic = $_GET["topic" . $i];
		if($topic != "") {
			$chosenTopics[$i] = "\"" . $topic . "\"";
		} else {
			break;
		}
	}
	if($chosenTopics[0] == "") {
		header ('Location: beginTalk.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Time to Talk | Let's Talk</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
	crossorigin="anonymous">

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<!-- <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Font Begins... -->
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified JavaScript -->
	<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
	crossorigin="anonymous">
	</script>
	<link href="css/chooseListener.css" rel="stylesheet">
</head>

<body>
	<div id="banner">
		<div id="leftSide" class="bannerItem">
			<p> Let's Talk </p>
		</div>
		<div id="rightSide" class="bannerItem">
			<p> Log Out </p>
		</div>
	</div>

	<div id="fixedHeader">
		<p>
			We liked these people enough, we thought you'd like them too.
		</p>
	</div>

	<div id="navButtons" class="col-md-1">
		<div class="navButtonItem"><i class="fa fa-chevron-up"></i></div>
		<div class="navButtonItem"><i class="fa fa-chevron-down"></i></div>
	</div>

	<div id="listenerContainer">

	</div>
	<i class="fa fa-spinner fa-spin spinner"></i>
</body>
<?php
	echo "<script>
					var topics = [". implode(",",$chosenTopics) ."];
					var user = '" . $username . "';
	</script>";
?>
<script>
$(document).ready(function() {
	while(typeof topics == 'undefined' && typeof user == 'undefined') {
		//wait to be initialized...
	}
	$.ajax({
		method: 'get',
		url: 'php/retrieveListeners.php',
		data: {
			'user': user,
			'topics': topics
		},
		success: function(msg) {
			console.log(msg);
			$("#listenerContainer").append(msg);
		}
	});
});

$("#rightSide p").click(function() {
	// TODO: Do something check this is clicked
});

$("#leftSide p").click(function() {
	window.location.href = "home.php";
});
</script>

</html>
