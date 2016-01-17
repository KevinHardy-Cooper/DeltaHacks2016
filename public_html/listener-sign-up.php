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
	<title>Let's Talk | Sign-Up</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="css/listener-sign-up.css">

	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>

<body>

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav navbar-nav navbar-header">
            <a id="logo" class="navbar-brand page-scroll" onclick="scrollToTop()">L e t 's &nbsp; T a l k</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class=" navbar-brand page-scroll" onclick="scrollToTop()">Letstalkaboutthat.com</a><!--TODO-->
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid -->   
    </nav>

    <div id="title">Let's Get To Know You</div>

    <div id="slider-wrapper">
	    <div id="passive-solver-section" class="slider">
	    	<div class="att-title">Listener Style</div>
	    	<div id="passive-solver-slider">
	    		<div class="bar-values-left">Passive Listener</div>
	    		<div class="bar-values-right">Problem Solver</div>
	    		<input type ="range" min ="1" max="100" step ="1" id="style"/>		
	    	</div>
		</div>


		<div id="gentle-blunt-section" class="slider">
		<div class="att-title">Listener Type</div>
	    	<div id="gentle-blunt-slider">
	    		<div class="bar-values-left">Gentle</div>
	    		<div class="bar-values-right">Blunt</div>
	    		<input type ="range" min ="1" max="100" step ="1" id="type"/>	
	    	</div>	
		</div>


		<div id="listening-experience-section" class="slider">
			<div class="att-title">Listening Experience</div>
	    	<div id="listening-experience-slider">
	    		<div class="bar-values-left">Experienced</div>
	    		<div class="bar-values-right">Amateur</div>
	    		<input type ="range" min ="1" max="100" step ="1" id="lexp"/>	
	    	</div>	
		</div>


		<div id="personal-experience-section" class="slider">
			<div class="att-title">Personal Experience</div>
	    	<div id="personal-experience-slider">
	    		<div class="bar-values-left">Storming Seas</div>
	    		<div class="bar-values-right">Calm Waters</div>
				<input type ="range" min ="1" max="100" step ="1" id="pexp"/>	
	    	</div>	
		</div>    	
    </div>

	<div id="next-button">Next</div>
	
	<script>
    $("#next-button").click(function() {
        //get login attempt info
        //pass to php function to verify exists in JSON
        var style = $("#style").val();
        var type = $("#type").val();
        var lexp = $("#lexp").val();
        var pexp = $("#pexp").val();
        $.ajax({
            method: 'get',
            url: 'php/listener-setter.php',
            data: {
                'style': style,
                'type': type,
                'lexp': lexp,
                'pexp': pexp
            },
            success: function(msg) {
                if(msg == "True"){
                    window.location.href="home.php";
                }
            }
        });
    });
</script>
</body>