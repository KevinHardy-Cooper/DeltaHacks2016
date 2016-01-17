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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat</title>

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
    <link rel="stylesheet" href="css/chat.css" type="text/css">

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
               
                <a id="logo" class="navbar-brand page-scroll" >LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li>
                        <a id="webname" class="page-scroll"  >WebsiteName</a><!--TODO-->
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
            </div>
        </div>
    </header>


    <div id="wrapper">

        <div id="leftside">
            <i class="fa fa-circle-o fa-3x"></i>
            <p id="userEmail"><?php echo $username?></p>
            <p> You are speaking with </p> 

            <p id="friendEmail">

            <?php 
            //Get Friends Email, from Conversation Table
            $findFriend = "SELECT * FROM `2035081_letstalk`.`Log` WHERE `ListenerEmail` = '" . $username . "';";
            $testResult = mysqli_query($con, $findFriend);

            if (mysqli_num_rows($testResult) > 0) {
                while($row = mysqli_fetch_assoc($testResult)) {
                    echo $row["TalkerEmail"];
                }
            } else {
                $findFriend = "SELECT * FROM `2035081_letstalk`.`Log` WHERE `TalkerEmail` = '" . $username . "';";
                $testResult = mysqli_query($con, $findFriend);
                if (mysqli_num_rows($testResult) > 0) {
                    while($row = mysqli_fetch_assoc($testResult)) {
                        echo $row["ListenerEmail"];
                    }
                } else {
                    echo "You are not in Conversation with anyone.";
                }
            }
            ?>

            </p> 

        </div>

        <div id="rightside">
            <div id="msgBoxAndEndRow"> 
                <div id="msgBox"> </div>
                <div id="endButton"> <button class="btn sendBtn"> Say Good-Bye! </button> </div>
            </div>
            <div id="inputAndSendRow"> 
                <div id="inputText"> 
                <textarea rows="5" cols="76" id="inputTextArea" class="form-control"> </textarea>
                </div>
                <div id="sendButton"> 
                <button id="sendMsgButton" class="btn"> <i class="fa fa-envelope-o fa-3x"></i> </button>
                </div>
            </div>
        </div>
    </div>

    <div id="flag"> <i class="fa fa-flag fa-2x"></i> </div>


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

    Date lastMessage;

    window.onload = function() {
        lastMessage = new Date();
        setInterval(getNewMessages(), 1000);
    };

    function getNewMessages() {
        var username = $("#userEmail").text();
        var friendemail = $("#friendEmail").text();
        var lastDate = lastMessage;
        $.ajax({
            method: 'get',
            url: 'php/getMessages.php',
            data: {
                'username': username,
                'friendemail': friendemail,
                'lastDate': lastDate
            },
            success: function(msg) {
                
            }
        });
        //PHP makes SQL to get new messages
        //Build HTML with PHP, send back here
        //msgBox.write();
    };

    $("#endButton").click(function() {
        var username = $("#userEmail").text();
        $.ajax({
            method: 'get',
            url: 'php/deleteLog.php',
            data: {
                'username': username
            },
            success: function(msg) {
                alert("Deleted");
            }
        });
    });
    </script>

</body>

</html>
