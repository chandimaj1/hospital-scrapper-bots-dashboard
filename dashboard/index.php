<?php



    if (($_SERVER['HTTP_REFERER'] == "https://remoteicu.com/")OR($_SERVER['HTTP_REFERER'] == "https://remoteicu.com/index.php")) {
        // continue
    } else {
        header("Location: https://remoteicu.com");
        exit(); //Stop running the script
        // go to form page again.
    }
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--META-DESCRIPTION-->
    <!--META-KEYWORDS-->
    <title>MARKETING DATABASE INTERFACE</title>
    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Loading Elements Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/acustom.css" rel="stylesheet">
    <!-- Loading Magnific-Popup Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet">
    <!-- WOW Animate-->
    <link href="scripts/animations/animate.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.png">
    <!--CUSTOM-JS-->
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    <!--headerIncludes-->
</head>
    <body data-spy="scroll" onclick="onloads();" data-target=".navMenuCollapse" style="background-color:#ddd">
    <!--PRELOADER-->
    <div id="wrap">
        <div class="container-fluid">
            <div class="row" id="nav_back">
                <div class="col-sm-11 text-left nav_title">MARKETING DATABASE INTERFACE</div>
                <div class="col-sm-1 text-right logout_col"><a href="https://remoteicu.com"><div class="logout"><i class="icon icon-logout"></i> Logout</div></a> </div>
            </div>
        </div>
        <div class="contianer-fluid" id="bot_set">
            <div class="row">
                <div class="col-sm-4">
                    <div class="bot">
                        <div class="section_title">
                            <h4>Daily BCD Bot</h4>
                            <div class="status">
                                <div class="circle"></div>
                                <div class="status_text">Not Connected</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/smoothscroll.js"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/placeholders.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/video.js"></script>
    <script src="scripts/bigvideo.js"></script>
    <script src="scripts/animations/wow.min.js"></script>
    <script src="scripts/jquery.jCounter-0.1.4.js"></script>
    <script src="scripts/bootstrap-datepicker.min.js"></script>
    <script src="scripts/audio.min.js"></script>
    <!--
    <script src="scripts/goodshare.min.js"></script>
-->
    <script src="scripts/custom.js"></script>
    


</body></html>