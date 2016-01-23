<?php
session_start();
$username = "";
$username = $_SESSION["Username"];
if($username == "") {
  //redirect
  header ('Location: index.php');
}
$con = mysqli_connect("localhost","root","root","LetsTalk","8889");
// Check connection
if (!$con) {
  echo "Fail";
}

$sql = "SELECT * FROM `LetsTalk`.`Person` WHERE `Email` = '" . $username . "';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

/*To Access UserData, use <p class="userData"><?php echo $row["AttributeNameHere"]; ?></p> */
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
  <link href="css/settings.css" rel="stylesheet">
</head>

<body>
  <div id="banner">
    <div id="leftSide" class="bannerItem">
      <p> Let's Talk </p>
    </div>
    <div id="rightSide" class="bannerItem">
      <p> Help Guide </p>
    </div>
  </div>

  <div id="editForm">
    <p class="formHeading"> Username </p>
    <p class="userData"><?php echo $row["UserAdjective"]; echo " "; echo $row["UserNoun"];  ?></p>
    <p class="formHeading col-md-6" data-attrType="fName"> First Name <i class="fa fa-pencil"></i> </p>
    <p class="formHeading col-md-6" data-attrType="lName"> Last Name <i class="fa fa-pencil"></i></p>
    <p class="userData col-md-6" data-attrType="fNameEdit"><?php echo $row["FirstName"]; ?></p>
    <p class="userData col-md-6" data-attrType="lNameEdit"><?php echo $row["LastName"]; ?></p>
    <p class="formHeading" data-attrType="gender"> Gender <i class="fa fa-pencil"></i></p>
    <p class="userData" data-attrType="genderEdit"><?php echo $row["Gender"]; ?></p>
    <p class="formHeading"> Email </p>
    <p class="userData"><?php echo $row["Email"]; ?></p>
    <p class="formHeading col-md-6" data-attrType="aNumber"> Number <i class="fa fa-pencil"></i></p>
    <p class="formHeading col-md-6" data-attrType="aStreet"> Street <i class="fa fa-pencil"></i></p>
    <p class="userData col-md-6" data-attrType="aNumberEdit"><?php echo $row["StreetNum"]; ?></p>
    <p class="userData col-md-6" data-attrType="aStreetEdit"><?php echo $row["StreetName"]; ?></p>
    <p class="formHeading col-md-6" data-attrType="aCity"> City <i class="fa fa-pencil"></i></p>
    <p class="formHeading col-md-6" data-attrType="aRegion"> Region <i class="fa fa-pencil"></i></p>
    <p class="userData col-md-6" data-attrType="aCityEdit"><?php echo $row["City"]; ?></p>
    <p class="userData col-md-6" data-attrType="aRegionEdit"><?php echo $row["Region"]; ?></p>
    <p class="formHeading col-md-6" data-attrType="aPostal"> Postal Code <i class="fa fa-pencil"></i></p>
    <p class="formHeading col-md-6" data-attrType="aCountry"> Country <i class="fa fa-pencil"></i></p>
    <p class="userData col-md-6" data-attrType="aPostalEdit"><?php echo $row["PostalCode"]; ?></p>
    <p class="userData col-md-6" data-attrType="aCountryEdit"><?php echo $row["Country"]; ?></p>
    <p class="formHeading" data-attrType="smallAch"> Your Small Achievement of the Day <i class="fa fa-pencil"></i></p>
    <p class="userData" data-attrType="smallAchEdit"><?php echo $row["SmallAchievement"]; ?></p>

    <button id="becomeListen" class="btn btn-info">Become a Listener </button>
    <div id="saveButtonRow">
      <button class="col-md-5 btn btn-primary"> Save </button>
      <button class="col-md-5 btn btn-danger" id="cancelChanges"> Cancel </button>
    </div>

  </div>
</body>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
//TODO Decide what is able to be edited
//TODO make button listeners for first 2 of 3 buttons
//TODO insert img for user at top of form
$(".formHeading").click(function() {
  var attr = this.getAttribute("data-attrType");
  $("p[data-attrType='"+attr+"Edit']").addClass("editable").attr("contenteditable","true");
  switch (attr) {
    case "fName":
    //TODO maybe delete switch/case? idk...
      break;
    case "lName":

      break;
    case "gender":

      break;
    case "aNumber":

      break;
    case "aStreet":

    break;
    case "aCity":

    break;
    case "aRegion":

    break;
    case "aPostal":

    break;

    case "aCountry":

    break;
    case "smallAch":

    break;
    default:
      console.log("Form heading clicked, should not be editable.");
  }
});


$("#cancelChanges").click(function() {
  $(".userData").removeClass("editable").attr("contenteditable","false");
  location.reload();
});

$("#leftSide").click(function() {
  $("#cancelChanges").click();
  window.location.href = "home.php";
});


</script>
</html>
