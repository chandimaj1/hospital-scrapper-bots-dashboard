<?php
include 'db.php';
$conn = mysqli_connect("$servername","$username","$password","$dbname") or die ("could not connect database");

 $sql="SELECT * FROM logins ORDER BY id DESC 
 LIMIT 1000";
 
 $result = $conn->query($sql);

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
    
    <link href="datatables/datatables.min.css">
    
    <script type="text/javascript">
        //Global Variables
        var ip = '<?php echo $location['ip'] ?>';
        var country = '<?php echo $location['country'] ?>';
        var city = '<?php echo $location['city'] ?>';
    
    </script>
    
    <style type="text/css">
        table{
            margin: 40px 0px;
            border: solid 3px #eee;
            border-radius: 3px;
        }
        th.sorting, th.sorting_desc, th.sorting_asc {
    border-right: solid 1px #ccc;
    padding-right: 10px;
    padding-left: 10px;
    font-size: 10pt;
}
        tr.odd {
    background-color: #eee;
}
        td {
    font-size: 10pt;
    padding: 5px;
            border-right: solid 1px #ccc;
}
        th.sorting_desc:after {
    content: "\e0dd";
    font-family: iconfont;
    font-size: 10pt;
    color: #0376ab;
    padding-left: 5px;
}
        th.sorting_asc:after {
    content: "\e0da";
    font-family: iconfont;
    font-size: 10pt;
    color: #0376ab;
    padding-left: 5px;
}
        
    </style>
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
                <div class="col-sm-9 text-left">
					<h4 style="margin-top:50px; color:#eee">Healthcare Solutions</h4>
                    <h5 style="color:#ccc; font-weight:300;">For the future of medicine since 2008 </h5>
				</div>
			</div>
		</div>
        

	</header><!-- /Header -->
        
        
<!-- Navigation -->    
<header class="dfddf container-fluid">
    <div class="row">
        <div class="col-md-8">
        <ul class="fasdfdsf">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visits.php">Site Visits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Physician Registrations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clients.php">Hospital Clients</a>
            </li>
        </ul>
            </div>
        
        <div class="col-md-4">
            <ul class="fasdfdsf" style="text-align:right; float:right;">
                <li class="nav-item" style="float:right">
                    <a class="nav-link" href="#" onclick="logout();"><i class="icon icon-logout"></i> Log out</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- / Nav -->        

<header>
    <div class="container-fluid">
        <h4 style="padding:20px">Site Visitors</h4>
    </div>
</header>        


<header>
    <div class="container">
        <table id="table_id" class="display">
    <thead>
        <tr>
            <th>id</th>
            <th>ip</th>
            <th>Login Country</th>
            <th>login City</th>
            <th>Referred From</th>
            <th>login Time</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($row = $result->fetch_assoc()) {
	  	echo ("<tr>");
	  		echo "<td>".$row['id']."</td>";
	  		echo "<td>".$row['ip']."</td>";
	  		echo "<td>".$row['country']."</td>";
	  		echo "<td>".$row['city']."</td>";
	  		echo "<td>".$row['referer']."</td>";
	  		echo "<td>".$row['timestamp']."</td>";
		echo "</tr>";
		  }
    
    ?>
    </tbody>
</table>

    </div>
</header>
        
<header class="" style="background: linear-gradient(#2a659b,#2a659b,#1b82b6); padding:20px;">
    <div class="container text-left" style="color:#fff; font-size:10pt;">
            Copyright @ Remote ICU 2008
    </div>
</header>
		
   <div class="login_back" id="admin_login">
        <div class="box">
        <div class="loginbox">
                        <div class="login_title">Administrator Login</div>
            <h5 style="color:red; padding:5px 5px; font-size:10pt;" id="login-error"></h5>
                        <div class="login_set" style="padding:10px;">
                            <div class="login_txt_box">
                                <input type="text" class="login_txt" id="uname" placeholder="Username">
                            </div>
                            <div class="login_txt_box">
                                <input type="text" class="login_txt" id="pw" placeholder="Password">
                            </div>
                           
                            <input class="submitx fdfdf" onclick="logincheck();" style="width:100px;" value="Login" type="button">
                             <input class="submitx fdfdf" type="button" style="width:100px;" onclick=" document.location.href='index.php'" value="Cancel">
                        </div>
                    </div>
       </div>
</div> 
        
    </div>
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
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script type="text/javascript">
            
        $(document).ready( function () {
            $('#table_id').DataTable();
            
            var uname = getCookie('uname');
            var pw = getCookie('pw');
            
            if(uname=="admin" && pw=="admin"){
                $('#admin_login').hide();
            }else{
                $('#admin_login').show();
            }
            
        } );
    </script>

</body></html>