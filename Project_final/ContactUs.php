<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
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
        <style>
            .colour{
                background:black;
            }
            </style>
        
        
        <header id="header" class="colour">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
          <h1><a href="index.php" class="scrollto"> <i class="ion-ios-briefcase"></i> Hostel</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
            <li><a href="index.php"><i class="ion-ios-home"></i> Home</a></li>
            <li><a href="Aboutus.php"><i class="ion-ios-analytics"></i> About Us</a></li>
            <li><a href="Service.php"><i class="ion-ios-checkmark"></i> Services</a></li>
            <li><a href="Profile.php"><i class="ion-ios-personadd"></i> Portfolio</a></li>
            <li class="menu-active"><a href="ContactUs.php"><i class="ion-ios-contact"></i> Contact</a></li>
            <li><a href="other/admin/index.php"><i class="ion-ios-locked"></i> Login As Admin</a></li>
          <li><a href="Registration.php"><i class="ion-ios-person"></i> Register</a></li>
          <li><a href="other/index.php"><i class="ion-ios-locked"></i> Login As Student</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
             <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
            <br>
            <br>
            <br>
          <h3>Contact Us</h3>
          <p>For more queries contact us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A V Parekh Technical Institute<br>
                  Surat<br>
              Dist: Surat</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p>+91 8155919430</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p>ABC@gmail.com</p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="mail.php" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" class="btn-xs">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Hostel</h3>
            <p>Hostels provide lower-priced, sociable accommodation where guests can rent a bed, usually a bunk bed, 
                in a dormitory and share a bathroom, lounge and sometimes a kitchen. Rooms can be mixed or single-category, 
                and private rooms may also be available..</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="Aboutus.php">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="Service.php">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="Terms.php">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="Privacy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                <strong> City : </strong>
                Surat , SCET <br>
               <strong>State :</strong> Gujarat<br>
              <strong>Country :</strong>India <br>
              <strong>Phone:</strong> +91 xxx,<br> +91 yyy<br>
              <strong>Email:</strong> abc@gmail.com<br>
              xyz@gmail.com <br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>A hostel is a low-budget accommodation shared among travelers. When a guest books a stay in a hostel, 
                he or she typically books a bed for the night, not a room</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright.  All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by  SSIP team
      </div>
    </div>
  </footer>
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
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
        <?php
        // put your code here
        ?>
    </body>
</html>
