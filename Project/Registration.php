<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.colour{
                background:black;
            }

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
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
                      <li><a href="Login.php"><i class="ion-ios-locked"></i> Login</a></li>
                      <li class="menu-active"><a href="Registration.php"><i class="ion-ios-person"></i> Register</a></li>

                  </ul>
                </nav>
            </div>
        </header>
        <form action="ProcessRegister.php" method = "post" >
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="text"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="text"><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Middle Name" name="mname" required>

    <label for="text"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <div>
    <label for = "text"> <b> Gender </b> </label>
    <div class="radio">
      <label><input type="radio" name="gender" value = "male" checked>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value = "female">Female</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value = "other">Other</label>
    </div>
    </div>

     <label><b> Contact No </b> </label>
    <input type = "text" name  = "contact" placeholde = "Enter Your Contact Number" require > </input> <br> 

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name = "email">
  </div>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
           

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
</html>
