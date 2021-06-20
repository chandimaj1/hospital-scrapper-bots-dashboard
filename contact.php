<?php
    $output = 'dasd';
    include 'getip.php';
    $location = getLocationInfoByIp();
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--META-DESCRIPTION-->
    <!--META-KEYWORDS-->
    <title>Remote ICU</title>
    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" href="images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png"/>
    <link href="css/acustom.css" rel="stylesheet"/>
    
    <script type="text/javascript">
        //Global Variables
        var ip = '<?php echo $location['ip'] ?>';
        var country = '<?php echo $location['country'] ?>';
        var city = '<?php echo $location['city'] ?>';
    </script>
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">
    <!--PRELOADER-->
    <div id="wrap">
    <!-- Header -->
        
	<header id="intro-half-left-3" class="intro-block bg-color3" style="background: linear-gradient(#2a659b,#2a659b,#1b82b6);">
        <div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 text-left">
					<img  style="padding:25px 0px; margin-top:25px; width:100%; padding-right:30px; border-right:solid 1px #ccc;" src="images/logo.png" />
				</div>
                <div class="col-sm-6 text-left">
					<h4 style="margin-top:50px; color:#eee">Healthcare Solutions</h4>
                    <h5 style="color:#ccc; font-weight:300;">For the future of medicine since 2008 </h5>
				</div>
                <div class="col-sm-3 text-right">
                    <h6 style="margin-top:50px; font-size:10pt; color:#eee">Your Ip : <span style="color:#ccc"><?php echo $location['ip'] ?></span>
                    </h6>
                    <h6 style="margin-top:0px;font-size:10pt; color:#eee">Location : <span style="color:#ccc"><?php echo ($location['city'].", ".$location['country']) ?></span>
                    </h6>
                    <h6 style="margin-top:0px;font-size:10pt; color:#eee">Login Status : <span style="color:#ccc">Not logged in</span>
                    </h6>
				</div>
			</div>
		</div>
        

	</header><!-- /Header -->
        
        
<!-- Navigation -->    
<header class="dfddf container-fluid">
    <div class="row">
        <ul class="fasdfdsf">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="$('#phy_login').show();">My Physician Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
    </div>
</header>
<!-- / Nav -->        
        

<!-- Mid -->
    <header>
        <div class="container-fluid" style="background-color: #fff; padding:40px;">
			<div class="row fdsfased">
                <div class="col-md-7">
                    <h3>Contact us</h3>
                     <h5 style="color:#0e5e9f; margin-bottom:30px; margin-top:40px; color:#000; background-color:#eee; padding:5px;" >Message Us</h5>
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                   
                    <form class="needs-validation" id="message" novalidate="">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="xsubject">Subject*</label>
                            <input type="text" class="form-control" id="xsubject">
                            <div class="invalid-feedback">
                              Message subject is required.
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:15px;">
                              <div class="col-md-6 mb-3">
                                <label for="xfirstname">First name*</label>
                                <input type="text" class="form-control" id="xfirstname" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Valid first name is required.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="xlastname">Last name*</label>
                                <input type="text" class="form-control" id="xlastname" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                        </div>

                        <div class="row" style="margin-top:15px;">
                              <div class="col-md-6 mb-3">
                                <label for="xemail">Email*</label>
                                <input type="text" class="form-control" id="xemail" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                  Please enter a valid email.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="xphone">Phone</label>
                                <input type="text" class="form-control" id="xphone" placeholder="" value="" required="">
                              </div>
                        </div>

                        <div class="mb-3">
                          <label for="xmessage">Message*</label>
                            <textarea type="text" class="form-control" id="xmessage" style="height:200px;" ></textarea>
                          <div class="invalid-feedback">
                            Message cannot be empty.
                          </div>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="xagree" value="true">
                          <label class="custom-control-label" for="xagree">I hereby agree to the company rules and <a href="#"  onclick="terms();">terms and conditions</a></label>
                            <div class="invalid-feedback">
                              You must agree to terms and conditions.
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="g-recaptcha" data-sitekey="6LftilYUAAAAADDZfFwUPvn8tmDeaDkkw6oSoess"></div>
                        <hr class="mb-4">
                        <button class="btn btn-secondary btn-lg btn-block" style="width:200px; background-color:#2877a8" type="button" onclick="checkcaptcha('contact')">Send</button>
                        </form>
                </div>
                
                    </div>
                </div>
                
                
                
                
                <div class="col-sm-1"></div>
                
				<div class="col-sm-4" style="border-left:dashed 1px #ccc;">
                     <img src="images/contact.png" style="margin-bottom:4px;">
				</div>
			</div>
		</div><!-- / mid container -->
    </header>

        
<header class="" style="background: linear-gradient(#2a659b,#2a659b,#1b82b6); padding:20px;">
    <div class="container text-left" style="color:#fff; font-size:10pt;">
             RemoteICU Copyright &copy; 2008. All rights reserved.
    </div>
</header>
		
        
        
        
        <div class="login_back" id="msgbox">
        <div class="box">
        <div class="loginbox">
            <div class="login_title" id="msg_title">Account Recovery</div>
            <h5 style="color:#444; padding:10px 10px; font-size:10pt;" id="msg-error">Invalid login information.<br> Please enter your email address for account recovery.</h5>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box" id="askemail">
                                <input type="text" class="login_txt" id="uname" placeholder="Your Email">
                            </div>
                            <input class="submitx fdfdf" onclick="$('#msgbox').hide();" style="width:100px;" value="Send" type="button">
                             <input class="submitx fdfdf" type="button" style="width:100px;" onclick=" document.location.href='index.php'" value="Cancel">
                        </div>
                    </div>
       </div>
        </div> 
        
        <div class="login_back" id="phy_login">
        <div class="box">
        <div class="loginbox">
                        <div class="login_title">Log in</div>
                        <div class="login_set" style="padding:10px;">
                            <h6>
                                This feature requires verified registration. Please sign in to view this profile.
                            </h6>
                            <div class="login_txt_box">
                                <label class="login_label" onclick="$('#phy_login').hide()">Forgot?</label>
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <label class="login_label" onclick="$('#phy_login').hide()">Forgot?</label>
                                <input type="text" class="login_txt" id="pw" placeholder="Password">
                            </div>
                           
                            <input type="submit" class="submitx fdfdf" value="Login" onclick="$('#phy_login').hide()">
                             <input class="submitx fdfdf" type="button" style="width:100px;" onclick=" document.location.href='index.php'" value="Cancel">
                        </div>
                    </div>
        </div>
        </div>
    
    </div>
    <!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js"></script>
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
    <script src="scripts/goodshare.min.js"></script>
    <script src="scripts/custom.js"></script>
    <script src="scripts/scripts.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
    $('.loginbox .login_label').click(function(){
        loginopt();
    });
    $('.loginbox input[type="submit"]').click(function(){
        loginopt();
    });
});
    
    </script>

</body></html>