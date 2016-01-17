<?php
	start_session();
	$username = $_SESSION["Username"];
	$con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
	$sql = "SELECT * FROM `2035081_letstalk`.`Person` WHERE `Email` = '". $username ."';";
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Fail";
	}
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html>

<head>
	<!-- Meta Data -->
	<meta charset="UTF-8">
	<meta name="description" content="Let's Talk - Sign-Up">
	<meta name="keywords" content="chat, depression, help, messenger, social anxiety">
	<meta name="author" content="Spencer Deevy">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="shortcut icon" href="resources/images/tabIcon.ico">-->

	<!-- Title -->
	<title>Let's Talk | Chat Select</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="css/chat-select.css">

	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>
	
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav navbar-nav navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="#page-top">L e t 's &nbsp; T a l k</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" href="#page-top"class=" navbar-brand page-scroll" >Letstalkaboutthat.com</a><!--TODO-->
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid --> 
    </nav>

    <div id="profile-sidebar">
    	<div id="profile-picture">
    		<img src="img/avatar-2.png">
    	</div>

    	<div id="description">
    		
    	</div>

    	<div id="achievement">
    		<?php echo $row["Email"]?>
    	</div>
    </div>

</body>