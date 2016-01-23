<?php
session_start();
$userCheck = "";
$userCheck = $_SESSION["Username"];
if($userCheck == "") {
  //redirect
  header ('Location: index.php');
}
//TODO add check to all pages if they dont have username, redirect
?>

<!DOCTYPE html>
<html>
<head>
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
  <link href="css/home.css" rel="stylesheet">
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

  <div id="panelContainer">
    <div class="panel col-md-6 col-sm-12" id="panel1">
      <i class="fa fa-comment"></i>
      <p> Talk </p>
    </div>
    <div class="panel col-md-6 col-sm-12" id="panel2">
      <i class="fa fa-comment-o fa-flip-horizontal"></i>
      <p> Listen </p>
    </div>
    <div class="panel col-md-6 col-sm-12" id="panel3">
      <i class="fa fa-users"></i>
      <p> Community </p>
    </div>
    <div class="panel col-md-6 col-sm-12" id="panel4">
      <i class="fa fa-tasks"></i>
      <p> Settings </p>
    </div>
  </div>
</body>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>

$(".panel").click(function() {
  var id = this.id;
  switch (id) {
    case "panel1":
      window.location.href = "beginTalk.php";
      break;
    case "panel2":
      //TODO go to listen page
      alert("Not Implemented");
      break;
    case "panel3":
      //TODO go to community page
      alert("Not Implemented");
      break;
    case "panel4":
      //TODO go to settings page
      window.location.href = "settings.php";
      break;
    default:
      console.log("Panel Click can't find which Panel was clicked.");
  }
});

$("#rightSide p").click(function() {
  var logout = confirm("Are you sure you want to logout?");
  if(logout) {
    $.ajax({
      method: 'get',
      url: 'php/logout.php',
      data: {},
      success: function(msg) {
        window.location.href = "index.php";
      }
    });
  }
});

</script>
</html>
