<?php
  session_start();
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

eg.
<?php echo $row["FirstName"]?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Talk</title>

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
    <link rel="stylesheet" href="css/talk.css" type="text/css">

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
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="index.php">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class="page-scroll" href="index.php" >WebsiteName</a><!--TODO-->
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
                <h1>What do you want to talk about?</h1>
                  
                <!--
                   <button class="btn btn-primary dropdown-toggle" >

                        
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu" >
                          <li ><a role="menuitem"value="Abuse/Violence" onclick="this.form.value().submit()">Abuse/Violence</a></li>
                           <li><a role="menuitem"value="Addictions" onclick="this.form.submit()">Addictions</a></li>
                           <li ><a role="menuitem"value="Anger Management" onclick="this.form.submit()">Anger Management</a></li>
                           <li ><a role="menuitem"value="Another Perspective" onclick="this.form.submit()">Another Perspective</a></li>
                          <li ><a role="menuitem"value="Child Birth" onclick="this.form.submit()">Child Birth</a></li>
                          <li><a role="menuitem"value="Clinical Disorder" onclick="this.form.submit()">Clinical Disorder</a></li>
                          <li><a role="menuitem"value="Death of a Loved One" onclick="this.form.submit()">Death of a Loved One</a></li>
                          <li ><a role="menuitem"value="Depression" onclick="this.form.submit()">Depression</a></li>
                          <li ><a role="menuitem"value="Divorce" onclick="this.form.submit()">Divorce</a></li>
                          <li><a role="menuitem"value="Eating Disorder" onclick="this.form.submit()">Eating Disorder</a></li>
                          <li><a role="menuitem"value="Get Something Off Your Chest" onclick="this.form.submit()">Get Something Off Your Chest</a></li>
                           <li><a role="menuitem"value="Gender Orientation" onclick="this.form.submit()">Gender Orientation</a></li>
                          <li><a role="menuitem"value="Home Life" onclick="this.form.submit()">Home Life</a></li>
                          <li ><a role="menuitem"value="Jealousy" onclick="this.form.submit()">Jealousy</a></li>
                          <li ><a role="menuitem"value="Job Improvement" onclick="this.form.submit()">Job Improvement</a></li>
                          <li><a role="menuitem"value="Marriage" onclick="this.form.submit()">Marriage</a></li>
                          <li><a role="menuitem"value="Overcome Fear" onclick="this.form.submit()">Overcome Fear</a></li>
                          <li><a role="menuitem"value="Post Traumatic Stress Disorder" onclick="this.form.submit()">Post Traumatic Stress Disorder</a></li>
                           <li><a role="menuitem"value="Rant" onclick="this.form.submit()">Rant</a></li>
                           <li><a role="menuitem"value="Relationship Improvement" onclick="this.form.submit()">Relationship Improvement</a></li>
                          <li ><a role="menuitem"value="Relieve Emotional Distress" onclick="this.form.submit()">Relieve Emotional Distress</a></li>
                          <li><a role="menuitem"value="Self Exploration" onclick="this.form.submit()">Self Exploration</a></li>
                         <li><a role="menuitem"value="Sexuality" onclick="this.form.submit()">Sexuality</a></li>
                          <li><a role="menuitem"value="Sexual Dysfunction" onclick="this.form.submit()">Sexual Dysfunction</a></li>
                           <li><a role="menuitem"value="Social Anxiety" onclick="this.form.submit()">Social Anxiety</a></li>
                          <li><a role="menuitem"value="Sterility" onclick="this.form.submit()">Sterility</a></li>
                          <li ><a role="menuitem"value="Social Anxiety" onclick="this.form.submit()">Social Anxiety</a></li>
                          <li><a role="menuitem"value="Work Life" onclick="this.form.submit()">Work Life</a></li>
                        </ul>
                      </div>

                    <input type="submit"</input>

                   </form>-->
                   <!-- Large button group -->
<div class="dropdown">
  <button id="dLabel "type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Topics<span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-toggle" aria-labelledby="dLabel">
    <li><a href='talkHome.php?topic=Rant'>Rant</a></li>
    <li><a href='talkHome.php?topic=Abuse/Violence'>Abuse/Violence</a></li>
    <li><a href='talkHome.php?topic=Addictions'>Addictions</a></li>
    <li><a href='talkHome.php?topic=Anger Management'>Anger Maanagement</a></li>
    <li><a href='talkHome.php?topic=Another Perspective'>Another Perspective</a></li>
  </ul>
</div>

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
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
function submit(){
  var obj=document.getElementById("topicForm");
  window.location="talkHome.php?"+obj;
}
    </script>
    

</body>

</html>
