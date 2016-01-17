<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomePage</title>

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
    <link rel="stylesheet" href="css/home.css" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

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
            <div class="nav navbar-nav navbar-header">
               
                <a id="logo" class="navbar-brand page-scroll" href="home.php">L e t 's &nbsp; T a l k</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" href="home.php"class=" navbar-brand page-scroll" >Letstalkaboutthat.com</a><!--TODO-->
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container-fluid -->
       
    </nav>
                <div id="talk">
                    <a href="talk.html" class="portfolio-box">
                    <i id="talkIcon"class="fa fa-comment big-icon" ></i>
                     <p id="talkCaption">Talk</p>          
                    </a>
                </div>
                <div id="listen">
                    <a href="listen.html" class="portfolio-box">
                    
                                    <i id="listenIcon" class="fa fa-headphones big-icon"></i>
                                    <p id="listenCaption">Listen</p>
                            
                    </a>
                </div>
                 <div id="community">
                    <a href="community.html" class="portfolio-box">
                       
                                    <i id="communityIcon" class="fa fa-users big-icon"></i>
                                    <p id="communityCaption">Community</p>
                               
                    </a>
                </div>
            </div>
                <div id="settings">
                    <a href="settings.html" class="portfolio-box">
                      
                                    <i id="settingsIcon" class="fa fa-cogs big-icon"></i>
                                    <p id="settingsCaption">Settings</p>
                               
                    </a>
            </div>
            
        <!-- <div class="row no-gutter">-->
               
               
        

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
</body>

</html>
