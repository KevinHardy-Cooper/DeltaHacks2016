<!DOCTYPE html>
<html>
<head>
  <title> Welcome | Let's Talk </title>
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Font Begins... -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
  crossorigin="anonymous">
  </script>
  <link href="css/signup.css" rel="stylesheet">
</head>

<body>

  <div id="errorNotice">
    <p id="dynamic">
    </p>
  </div>
  <div id="banner">
    <div id="leftSide" class="bannerItem">
      <p> Let's Talk </p>
    </div>
    <div id="rightSide" class="bannerItem">
      <p> Help Guide </p>
    </div>
  </div>

  <div id="mainFrame1" class="mainframe">
    <div class="option" id="talk">
      <i class="fa fa-comment"></i>
      <p> Talker </p>
    </div>
    <div class="option" id="both">
      <i class="fa fa-comments-o"></i>
      <p> Both </p>
    </div>
    <div class="option" id="listen">
      <i class="fa fa-headphones"></i>
      <p> Listener </p>
    </div>
  </div>
  <div class="next" id="next1">
    <p>
      Continue
    </p>
  </div>
  <div id="mainFrame2" class="mainframe">
    <div id="scrollableForm">

      <div class="input-group basicForm">
        <span class="input-group-addon" id="basic-addon1">First Name</span>
        <input type="text" class="form-control" id="firstName" placeholder="Dorothy" aria-describedby="basic-addon1">
      </div>

      <div class="input-group basicForm">
        <span class="input-group-addon" id="basic-addon1">Last Name</span>
        <input type="text" class="form-control" id="lastName" placeholder="Gale" aria-describedby="basic-addon1">
      </div>

      <div class="input-group basicForm">
        <span class="input-group-addon" id="basic-addon1">Email</span>
        <input type="text" class="form-control" id="email" placeholder="DorothyGale@kansasu.edu" aria-describedby="basic-addon1">
      </div>

      <div class="input-group basicForm">
        <span class="input-group-addon" id="basic-addon1">Password</span>
        <input type="password" class="form-control" id="password" placeholder="This must be at least 8 characters" aria-describedby="basic-addon1">
      </div>

      <div id="addressNumberAndStreet" class="addressBlock">
        <div class="input-group col-md-3" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">Number</span>
          <input type="text" class="form-control"  id="addressNumber" placeholder="42" aria-describedby="basic-addon1">
        </div>

        <div class="input-group col-md-9" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">Street</span>
          <input type="text" class="form-control" id="addressStreet" placeholder="Yellow Brick Road" aria-describedby="basic-addon1">
        </div>
      </div>

      <div id="addressCityAndCode" class="addressBlock">
        <div class="input-group col-md-8" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">City</span>
          <input type="text" class="form-control" id="addressCity" placeholder="Emerald City" aria-describedby="basic-addon1">
        </div>

        <div class="input-group col-md-4" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">Code</span>
          <input type="text" class="form-control" id="addressCode" placeholder="123456" aria-describedby="basic-addon1">
        </div>
      </div>

      <div id="addressRegionAndCountry" class="addressBlock">
        <div class="input-group col-md-6" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">Region</span>
          <input type="text" class="form-control" id="addressRegion" placeholder="Munchkin Village" aria-describedby="basic-addon1">
        </div>

        <div class="input-group col-md-6" style="float: left;">
          <span class="input-group-addon" id="basic-addon1">Country</span>
          <input type="text" class="form-control" id="addressCountry" placeholder="Oz" aria-describedby="basic-addon1">
        </div>
      </div>

      <div id="selectWrapper">
        <div class="select">
          <span class="arr"></span>
          <select id="adjective" class="usernameDrop">
            <option value="Sexy">Altruistic</option>
            <option value="Erotic">Jubilant</option>
            <option value="Alluring">Pragmatic</option>
            <option value="Capricious">Sublime</option>
            <!--TODO: Replace with generated function -->
          </select>
        </div>

        <div class="select">
          <span class="arr"></span>
          <select id="noun" class="usernameDrop">
            <option value="Lemur">Lemur</option>
            <option value="Frog">Frog</option>
            <option value="Mantis Shrip">Mantis Shrimp</option>
            <option value="Cuttlefish">Cuttlefish</option>
            <!--TODO: Replace with generated function -->
          </select>
        </div>
      </div>

      <textarea rows="4" cols="50" maxlength="140" hint="Hello"id="signUpAchievement">Tell your small Achievement of the Day! It can be anything small that brightened your day.</textarea>

      <form action="">
        <input type="radio" name="gender" value="male" class="gender col-md-3" id="male"> Male<br>
        <input type="radio" name="gender" value="female" class="gender col-md-3" id="female"> Female<br>
        <input type="radio" name="gender" value="other" class="gender col-md-3" id="other"> Not Specified
      </form>
    </div>
    <div class="next" id="next2"><p>Next</p></div>

  </div>
  <div id="mainFrame3" class="mainframe">
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

	<div class="next" id="next3"><p>Next</p></div>

</body>

<script>

var userChoice;

$("#rightSide p").click(function() {
  //TODO Add help page maybe?
});

$(".option").click(function() {
  //$(this.id).stop().css({backgroundColor:'red'});
  //TODO get above working
  switch (this.id) {
    case "talk":
      console.log("talk");
      userChoice = 0;
      break;
    case "both":
      console.log("both");
      userChoice = 1;
      break;
    case "listen":
      console.log("listen");
      userChoice = 2;
      break;
    default:
      moveErrorLog("Option Click Not Recognized. Add Switch/Case");
  }
});

$("#next1").click(function() {
  //TODO Slide down one option
});

$("#next2").click(function() {

  var listenTalkVal = $("#listen-talk-val").val();
	var fName = $("#firstName").val();
	var lName = $("#lastName").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var usernameNoun = $("#noun").val();
	var usernameAdjective = $("#adjective").val();
	var aNum = $("#addressNumber").val();
	var aStr = $("#addressStreet").val();
	var aCit = $("#addressCity").val();
	var aCod = $("#addressCode").val();
	var aReg = $("#addressRegion").val();
	var aCou = $("#addressCountry").val();
	var signUpAch = $("#signUpAchievement").val();
	var gender;

	//Gender radio button selection
	if($('#male').is(':checked') == true) {
		gender = "M";
	} else if($('#female').is(':checked') == true) {
		gender = "F";
	} else if($('#other').is(':checked') == true) {
		gender = "O";
	}

	//Checking value bounds
	if(fName.length < 1 || fName.length > 255) {
		moveErrorLog("First Name needs to be entered to make account.");
	} else if(lName.length < 1 || lName.length > 255) {
		moveErrorLog("Last Name needs to be entered to make account");
	} else if(password.length < 7 || password.length > 32) {
		moveErrorLog("Password needs to be longer than 7 characters");
	} else if(aNum.length < 1 || aNum.length > 9) {
		moveErrorLog("Address Number needs to be entered");
	} else if(aStr.length < 1 || aStr.length > 255) {
		moveErrorLog("Address Street needs to be entered");
	} else if(aCit.length < 1 || aCit.length > 255) {
		moveErrorLog("Address City needs to be entered");
	} else if(aCod.length < 1 || aCod.length > 7) {
		moveErrorLog("Address Code cannot be verified check spelling and length.");
	} else if(aReg.length < 1 || aReg.length > 255) {
		moveErrorLog("Region needs to be entered.");
	} else if(aCou.length < 4 || aCou.length > 35) {
		moveErrorLog("Country Code needs to be entered.");
	} else if(signUpAch.length < 5 || signUpAch.length > 140) {
		moveErrorLog("Sign Up Architecture needs to be between 5 and 140 characters");
	}
  switch (userChoice) {
    case 0:
      $.ajax({
        method: 'get',
        url: 'php/signupScript.php',
        data: {
          'gender': gender,
          'fName': fName,
          'lName': lName,
          'email': email,
          'password': password,
          'aNum': aNum,
          'aStr': aStr,
          'aCit': aCit,
          'aCod': aCod,
          'aReg': aReg,
          'aCou': aCou,
          'signUpAch': signUpAch,
          'usernameNoun': usernameNoun,
          'usernameAdjective': usernameAdjective
        }, success: function(msg) {
        $.ajax({
          method: 'get',
          url: 'php/verifyUser.php',
          data: {
            'username': email,
            'password': password
          },
          success: function(msg) {
            if(msg == "True"){
              window.location.href="home.php";
            } else {
              window.location.href="index.php";
            }
          }
        });
      }});
      break;
    case 1:
      //TODO send down
      break;
    case 2:
      //TODO send down further
      break;
    default:
      console.log("UserChoice has not been assigned.");
  }
});

$("#next3").click(function() {
  var listenTalkVal = $("#listen-talk-val").val();
	var fName = $("#firstName").val();
	var lName = $("#lastName").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var usernameNoun = $("#noun").val();
	var usernameAdjective = $("#adjective").val();
	var aNum = $("#addressNumber").val();
	var aStr = $("#addressStreet").val();
	var aCit = $("#addressCity").val();
	var aCod = $("#addressCode").val();
	var aReg = $("#addressRegion").val();
	var aCou = $("#addressCountry").val();
	var signUpAch = $("#signUpAchievement").val();
	var gender;

	//Gender radio button selection
	if($('#male').is(':checked') == true) {
		gender = "M";
	} else if($('#female').is(':checked') == true) {
		gender = "F";
	} else if($('#other').is(':checked') == true) {
		gender = "O";
	}
  $.ajax({
    method: 'get',
    url: 'php/signupScriptListener.php',
    data: {
      'gender': gender,
      'fName': fName,
      'lName': lName,
      'email': email,
      'password': password,
      'aNum': aNum,
      'aStr': aStr,
      'aCit': aCit,
      'aCod': aCod,
      'aReg': aReg,
      'aCou': aCou,
      'signUpAch': signUpAch,
      'usernameNoun': usernameNoun,
      'usernameAdjective': usernameAdjective,
      'style': $("#style").val(),
      'type': $("#type").val(),
      'lexp': $("#lexp").val(),
      'pexp': $("#pexp").val()
    }, success: function(msg) {
    $.ajax({
      method: 'get',
      url: 'php/verifyUser.php',
      data: {
        'username': email,
        'password': password
      },
      success: function(msg) {
        console.log(msg);
        if(msg == "True"){
          window.location.href="home.php";
        } else {
          moveErrorLog("Something went wrong with signup. Please try again later.");
          //window.location.href="index.php";
        }
      }
    });
  }});
});

$("#leftSide").click(function() {
  window.location.href = "index.php";
});

function moveErrorLog(msg) {
  $("#errorNotice p").text(msg);
  $("#errorNotice").animate({top: "0vh"}, 500);
  $("#errorNotice").delay(1000).animate({top: "-20vh"}, 500);
};

</script>
</html>
