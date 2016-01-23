<?php
session_start();
$username = "";
$username = $_SESSION["Username"];
if($username == "") {
  //redirect
  header ('Location: index.php');
}

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
      <link href="css/begintalking.css" rel="stylesheet">
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

    <div id="mainContainer">
      <h1> What did you want to talk about? </h1>
      <input class="form-control" id="autoFillInput">
      <div id="topicDisplay">
        <!-- These Divs are added dynamically.. -->
      </div>
      <?php // TODO: Add "Just Talk Button w/ JS " ?>
      <button id="cancelButton" class="btn btn-warning dirButtons"><i class="fa fa-chevron-left"></i> Cancel </button>
      <button id="continueButton" class="btn disabled dirButtons"> Continue <i class="fa fa-chevron-right"></i> </button>
    </div>
  </body>

  <script>
  //Tags the user has actually picked
  var chosenTags = [];
  //Tags the user can pick from
  var availableTags = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
  ];

  //Used to assign the available tag array to the Input element
  $(function() {
    $( "#autoFillInput" ).autocomplete({
      source: availableTags
    });
  });

  // TODO: Fire this listener when option is clicked, rather than Enter + Enter - see Chris or Eric if confused
  //Handles the 'Enter' key, and any other keys if necessary
  document.querySelector('#autoFillInput').addEventListener('keypress', function (e) {
    var key = e.which || e.keyCode;
    if (key === 13) { // 13 is enter
      //get val from input
      var input = $("#autoFillInput").val();

      //Check it is actually in the available tags
      if( availableTags.indexOf(input) != -1 ) {
        var throwAwayDiv = "<p class=\"tagDisplay\">" + input + "</p>";
        //TODO Make elements reach right side, and evenly spread in between
        if(chosenTags.indexOf(input) == -1) {
          chosenTags.push(input);
        }
        //Add <p> to end of div
        $('#autoFillInput').val("");
        $("#topicDisplay").append(throwAwayDiv);
        $("#continueButton").removeClass("disabled");
        $("#continueButton").addClass("btn-success");
      } else {
        // TODO: Notify Users that tag is unavailable
      }
    }
    });

    $(".dirButtons").click(function() {
      var id = this.id;
      switch (id) {
        case "cancelButton":
          window.location.href = "home.php";
          break;
        case "continueButton":
          var toBeHref = "chooseListener.php?";
          for (var i = 0; i < chosenTags.length; i++) {
            if(i >= 0) {
              toBeHref += "&";
            }
            toBeHref += "tag" + i + "=" + chosenTags[i];
          }
          window.location.href = toBeHref;
          break;
        default:

      }
    });

  </script>
</html>
