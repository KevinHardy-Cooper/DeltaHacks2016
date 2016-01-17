<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Settings</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/settings.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--for text forms-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body id="page-top">
    <?php
       $username=$_SESSION["Username"];
       $con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");

       //Check connection
       if(mysqli_connect_errno()){
        echo"Fail";
       }
       $usernameSplit=explode(" ", $username);
       $sql="SELECT*FROM `Person` WHERE `UserAdjective` = '". $usernameSplit[0] ."' AND `UserNoun` = '" . $usernameSplit[1] . "'";
       $result=mysqli_query($con, $sql);
        $person = $result->fetch_assoc();

    ?>

    <?php
    $smallAchievement = mysql_escape_string($_POST['SmallAchievement']);                                          //Retrieve patient information to be updated
    $description = mysql_escape_string($_POST['Description']);                                          //Retrieve patient information to be updated

    $firstName = mysql_escape_string($_POST['FirstName']);                                          //Retrieve patient information to be updated
    $lastName = mysql_escape_string($_POST['LastName']);  
    $gender = mysql_escape_string($_POST['Gender']);
    $streetNum = mysql_escape_string($_POST['StreetNum']);
    $streetName = mysql_escape_string($_POST['StreetName']);
    $city = mysql_escape_string($_POST['City']);
     $region = mysql_escape_string($_POST['Region']);
     $country = mysql_escape_string($_POST['Country']);
     $postalCode = mysql_escape_string($_POST['PostalCode']);                                                                                       // Create connection
    $con = mysqli_connect("fdb3.awardspace.net","2035081_letstalk","SimplyCoded1","2035081_letstalk","3306");
                                                                                            // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sqlComman = "UPDATE `chrism12_mysql`.`Person` SET 
                `SmallAchievement` = '" . $smallAchievement . "',
                `Description` = '" . $description . "',
                `FirstName` = '" . $firstName . "',
                `LastName` = '" . $lastName . "',
                `gender` = '" . $gender . "', 
                `StreetNum` = '" . $streetNum . "', 
                `StreetName` = '" . $streetName . "',
                `City` = '" . $city . "'
                `Region` = '" . $region . "'
                `Country` = '" . $country . "'
                `postalCode` = '" . $postalCode . "'

                WHERE `Person`.`Email` = '" . $email . "';";                           //Make SQL cmd to update Patient Information
    mysqli_query($conn,$sqlComman);                                                     //Execute Update
?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="settings.php">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class="page-scroll" href="settings.php" >WebsiteName</a><!--TODO-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid -->
    </nav>

    <header>
                       
        <div class="header-content">
           

            <div class="header-content-inner">
                <h1><i class="fa fa-circle-o fa-5x"></i></h1>
                <hr>
                <p class="smallAchievement" id="smallAchievement"> SmallAchievement: </p>
                <p class="editable" id="smallAchievementEdit"><?php echo $Person["SmallAchievement"] ?> </p>
                 <p class="desciption" id="description"> Description: </p>
                 <p class="editable" id="description" ><?php echo $Person["Description"] ?> </p>
                
            </div>
        </div>
    </header>
<div class="tableHeading">
<p>First Name:</p>
<p class="editable" id="firstNameEdit"><?php echo $Person["FirstName"]?></p>
<p>Last Name:</p>
    <p class="editable" id="lastNameEdit"><?php echo $Person["LastName"]?></p>
            <p id="editButton1"  class="btn btn-default" ><i class="fa fa-pencil"></i></p>

</div>

<div class="tableHeading1">
<p>Gender:</p>
    <p class="editable" id="gender"><?php echo $Person["Gender"]?></p>
<p>Email:</p>
    <p id="email"><?php echo $Person["Email"]?></p>
             <p id="editButton2"  class="btn btn-default" ><i class="fa fa-pencil"></i></p>

</div>
   
   <div class="tableHeading2">
<p>StreetNum:</p>
    <p class="editable" id="streetNum"><?php echo $person["StreetNum"]?></p>
<p>StreetName:</p>
    <p class="editable" id="streetName"><?php echo $person["StreetName"]?></p>
    <p>City:</p>
    <p class="editable" id="city"><?php echo $person["City"]?></p>
<p>Region:</p>
    <p class="editable" id="region"><?php echo $person["Region"]?></p>
    <p>Country:</p>
    <p class="editable" id="country"><?php echo $person["Country"]?></p>
<p>Postal Code:</p>
    <p class="editable" id="postalCode"><?php echo $person["PostalCode"]?></p>
             <p id="editButton3"  class="btn btn-default" ><i class="fa fa-pencil"></i></p>

</div>
   
    <section>
         <a id="saveButton"  class="btn btn-default" >Save</a>
          <a id="discardButton" class="btn btn-default" >Discard</a>
          <a id="becomeListenerButton" href="sign-up.php"  class="btn btn-default" >Become A Listener!</a>
                   
    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <script>
    $("#editButton1").click(function() {
                $(".editable").attr("contenteditable", true);
            } 
                $("#saveButton").html("saveButton");
                $(".editable").attr("contenteditable", false);
                $.ajax({
                    type: "POST",
                    url: "settings.html",
                    data: { 
                            firstName: $("#FirstName").html(),
                            lastName: $("#LastName").html()
                            
                        }
                }).done(function( msg ) {
                    //alert(msg);
                    location.reload();
                });
            }
        });
    $("#editButton1").click(function() {
                $(".editable").attr("contenteditable", true);
            } 
                $("#saveButton").html("saveButton");
                $(".editable").attr("contenteditable", false);
                $.ajax({
                    type: "POST",
                    url: "settings.html",
                    data: { 
                            firstName: $("#FirstName").html(),
                            lastName: $("#LastName").html()
                            
                        }
                }).done(function( msg ) {
                    //alert(msg);
                    location.reload();
                });
            }
        });
    $("#editButton2").click(function() {
                $(".editable").attr("contenteditable", true);
            } 
                $("#saveButton").html("saveButton");
                $(".editable").attr("contenteditable", false);
                $.ajax({
                    type: "POST",
                    url: "settings.html",
                    data: { 
                            gender: $("#Gender").html(),                            
                        }
                }).done(function( msg ) {
                    //alert(msg);
                    location.reload();
                });
            }
        });
    $("#editButton3").click(function() {
                $(".editable").attr("contenteditable", true);
            } 
                $("#saveButton").html("saveButton");
                $(".editable").attr("contenteditable", false);
                $.ajax({
                    type: "POST",
                    url: "settings.html",
                    data: { 
                            streetNum: $("#StreetNum").html(),
                            streetName: $("#streetName").html()
                            city: $("#City").html()
                            region: $("#Region").html()
                            country: $("#Country").html()
                            postalCode: $("#PostalCode").html()
                            
                        }
                }).done(function( msg ) {
                    //alert(msg);
                    location.reload();
                });
            }
        });
</script>

</body>

</html>