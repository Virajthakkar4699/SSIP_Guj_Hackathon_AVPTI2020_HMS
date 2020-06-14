<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
        <link href="Logincss/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="Logincss/style.css" rel="stylesheet" type="text/css"/>
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <style>
            .colour{
                background:black;
            }

            </style>
        <header id="header" class="colour">
          <div class="container-fluid">

              <div id="logo" class="pull-left">
                <h1><a href="index.php" class="scrollto"> <i class="ion-ios-briefcase"></i> Hostel</a></h1>
              </div>

                <nav id="nav-menu-container" >
                  <ul class="nav-menu">
                      <li><a href="index.php"><i class="ion-ios-home"></i> Home</a></li>
                      <li><a href="Aboutus.php"><i class="ion-ios-analytics"></i> About Us</a></li>
                      <li><a href="Service.php"><i class="ion-ios-checkmark"></i> Services</a></li>
                      <li><a href="Profile.php"><i class="ion-ios-personadd"></i> Portfolio</a></li>
                      <li><a href="ContactUs.php"><i class="ion-ios-contact"></i> Contact</a></li>
                      <li class="menu-active"><a href="Login.php"><i class="ion-ios-locked"></i> Login</a></li>
                      <li><a href="Registration.php"><i class="ion-ios-person"></i> Register</a></li>

                  </ul>
                </nav>
            </div>
        </header>
        <div class="main-bg">
            <header class="section-header wow fadeInUp">
                  <br>
                  <br>
                  <br><br><br><br><br>
                
                <h3> Admin Login </h3>

            </header>
    
	<div class="w3ls-login box box--big wow fadeInUp" id="loginadmin" >
		<!-- form starts here -->
                <form action="processadminlogin.php" method="post">
			<div class="agile-field-txt" >
				<label>
                                <span class="fa fa-user" ></span> Username </label>
				<input type="text" name="username" placeholder="Enter Username " required="true" />
			</div>
			<div class="agile-field-txt">
				<label>
					<span class="fa fa-lock" ></span> Password </label>
				<input type="password" name="password" placeholder="Enter Password " required="true" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
				
				<div class="form-end">
					<input type="submit" name="login" value="LOGIN">
				</div>
                                <div class="agile_label">
                                    <a href="Login.php">Click here to login as Student! </a>
                                </div>
				<div class="clearfix"></div>
			</div>
		</form>
                
	</div>
            <br><br><br>
     <div class="copyright">
     </div>
    <footer id="footer">
    
      <div class="copyright">
        &copy; Copyright.  All Rights Reserved
      </div>
      <div class="credits">
          Designed by  SSIP team
        <div class="social-links">
              <a href="www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="www.google-plus.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      
    </footer>
            
    <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
<?php

            
        
?>

</html>