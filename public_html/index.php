<!DOCTYPE html>
<html>
<head>

  <!-- Landing Page for Let's Talk. Purpose: Login, Sign up Link, Warm Welcome and About Us -->

  <title> #Name | Powered by SimplyCoded </title>
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

  <!-- Font Begins... -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
  crossorigin="anonymous">
  </script>
  <link href="css/index.css" rel="stylesheet">
</head>

<body>
  <div id="banner">
    <div id="leftSide" class="bannerItem">
      <p> Let's Talk </p>
    </div>
    <div id="rightSide" class="bannerItem">
      <p> About Us </p>
    </div>
  </div>
  <div id="mainFrame">
    <h1> Let's Talk </h1>
    <h2> What do you want to talk about? </h2>
    <input type="email" class="form-control formInput" id="InputEmail1" placeholder="Email">
    <input type="password" class="form-control formInput" id="InputPassword1" placeholder="Password">
    <div id="buttonRow">
      <button type="submit" class="btn btn-default buttonRowItem" id="login"> Log In </button>
      <button type="submit" class="btn btn-default buttonRowItem" id="signup"> Sign Up </button>
    </div>
  </div>

  <div id="aboutUs">
    <h1> About Us </h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit
      in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
      anim id est laborum.
    </p>
    <div id="aboutUsDone">
      <p>
        Go Back
      </p>
    </div>
  </div>
</body>

<script>

$("#rightSide p").click(function() {
  $("#aboutUs").animate({top: "15vh"}, 1000);
  $("#mainFrame").animate({opacity: "0.8"}, 500);
  $("#banner").animate({opacity: "0.8"}, 500);
});
$("#aboutUsDone").click(function() {
  $("#aboutUs").animate({top: "-100vh"}, 500);
  $("#mainFrame").animate({opacity: "1.0"}, 500);
  $("#banner").animate({opacity: "1.0"}, 500);
});
$("#login").click(function() {
  //get login attempt info
  //pass to php function to verify exists in JSON
  var username = $("#InputEmail1").val();
  var password = $("#InputPassword1").val();
  console.log(username);
  console.log(password);
  $.ajax({
    method: 'get',
    url: 'php/verifyUser.php',
    data: {
      'username': username,
      'password': password
    },
    success: function(msg) {
      console.log(msg);
      if(msg == "True"){
        window.location.href="home.php";
      }
    }
  });
});
$("#signup").click(function() {
  window.location.href="signup.php";
});

</script>
</html>
