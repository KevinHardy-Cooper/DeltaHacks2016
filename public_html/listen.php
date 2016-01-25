<!DOCTYPE html>
<html>
<head>
  <title> Finding a Talker | Let's Talk </title>
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
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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
  <link href="css/listen.css" rel="stylesheet">
  <link rel="stylesheet" href="../resources/fonts/font-awesome/css/font-awesome-animation.min.css">
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

  <div id="mainframe">
    <h1> Finding a talker... </h1>
    <?php // TODO: Make better waiting icon. ?>
    <i class="fa fa-spinner faa-spin animated"></i>
  </div>

</body>

<script>
// TODO: Write function on exit to delete from active listener table

$("#leftSide p").click(function() {
  window.location.href = "home.php";
});

$("#rightSide p").click(function() {

});

</script>
</html>
