
<!-- saved from url=(0086)http://localhost/Hostel%20management%20System%20Project/hostel/admin/admin-profile.php -->
<html lang="en" class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
          <h1><a href="index.php" class="scrollto"> <i class="ion-ios-briefcase"></i> Hostel</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="index.php"><i class="ion-ios-home"></i> Home</a></li>
            <li><a href="Aboutus.php"><i class="ion-ios-analytics"></i> About Us</a></li>
            <li><a href="Service.php"><i class="ion-ios-checkmark"></i> Services</a></li>
            <li><a href="Profile.php"><i class="ion-ios-personadd"></i> Portfolio</a></li>
          <!--<li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>-->
          <li><a href="ContactUs.php"><i class="ion-ios-contact"></i> Contact</a></li>
          <li><a href="Login.php"><i class="ion-ios-locked"></i> Login</a></li>
          <li><a href="Registration.php"><i class="ion-ios-person"></i> Register</a></li>

        </ul>
      </nav>
    </div>
  </header>




<body style=""><br>
<b>Notice</b>:  Undefined index: update in <b>C:\xampp\htdocs\Hostel management System Project\hostel\admin\admin-profile.php</b> on line <b>7</b><br>



	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Admin Profile</title>
	<link rel="stylesheet" href="./adminprofilefinal_files/font-awesome.min.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/bootstrap.min.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/dataTables.bootstrap.min.css">&gt;
	<link rel="stylesheet" href="./adminprofilefinal_files/bootstrap-social.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/bootstrap-select.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/fileinput.min.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="./adminprofilefinal_files/style.css">
<script type="text/javascript" src="./adminprofilefinal_files/jquery-1.11.3-jquery.min.js.download"></script>
<script type="text/javascript" src="./adminprofilefinal_files/validation.min.js.download"></script>
<script type="text/javascript">
function valid()
{

if(document.changepwd.newpassword.value!= document.changepwd.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.changepwd.cpassword.focus();
return false;
}
return true;
}
</script>



	<div class="brand clearfix">
		<a href="admin-profile.php#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="http://localhost/Hostel%20management%20System%20Project/hostel/admin/admin-profile.php#"><img src="./adminprofilefinal_files/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="http://localhost/Hostel%20management%20System%20Project/hostel/admin/admin-profile.php">My Account</a></li>
					<li><a href="http://localhost/Hostel%20management%20System%20Project/hostel/admin/logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>	
		<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					

					<li><div class="more"></div><a href="admin-profile.php#" class="parent"><i class="fa fa-desktop"></i> Rooms</a>
					<ul>
						<li><a href="create-room.php">Add a Room</a></li>
						<li><a href="manage-rooms.php">Manage Rooms</a></li>
					</ul>
				</li>

				<li><a href="registration.php"><i class="fa fa-user"></i>Student Registration</a></li>
				<li><a href="manage-students.php"><i class="fa fa-users"></i>Manage Students</a></li>
				<li><a href="access-log.php"><i class="fa fa-file"></i>User Access logs</a></li>

			
		</ul></nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Admin Profile</h2>
							<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Admin profile details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Username </label>
												<div class="col-sm-10">
													<input type="text" value="admin" disabled="" class="form-control"><span class="help-block m-b-none">
													Username can't be changed.</span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
	<input type="email" class="form-control" name="emailid" id="emailid" value="anuj.lpu1@gmail.com" required="required">
						 
												</div>
											</div>
<div class="form-group">
									<label class="col-sm-2 control-label">Reg Date</label>
									<div class="col-sm-10">
									<input type="text" class="form-control" value="2016-04-05 02:01:45" disabled="">
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="submit">Cancel</button>
													<input class="btn btn-primary" type="submit" name="update" value="Update Profile">
												</div>
											</form></div>

										

									</div>
								</div>
																	<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Change Password</div>
									<div class="panel-body">
				<form method="post" class="form-horizontal" name="changepwd" id="change-pwd" onsubmit="return valid();">

 											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-4 control-label">old Password </label>
												<div class="col-sm-8">
				<input type="password" value="" name="oldpassword" id="oldpassword" class="form-control" onblur="checkpass()" required="required">
									 <span id="password-availability-status" class="help-block m-b-none" style="font-size:12px;"></span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">New Password</label>
												<div class="col-sm-8">
											<input type="password" class="form-control" name="newpassword" id="newpassword" value="" required="required">
												</div>
											</div>
<div class="form-group">
									<label class="col-sm-4 control-label">Confirm Password</label>
									<div class="col-sm-8">
				<input type="password" class="form-control" value="" required="required" id="cpassword" name="cpassword">
												</div>
											</div>



												<div class="col-sm-6 col-sm-offset-4">
													<button class="btn btn-default" type="submit">Cancel</button>
													<input type="submit" name="changepwd" value="Change Password" class="btn btn-primary">
											</div>

										</form>

									</div>
								</div>
							</div>
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		
	
	<script src="./adminprofilefinal_files/jquery.min.js.download"></script>
	<script src="./adminprofilefinal_files/bootstrap-select.min.js.download"></script>
	<script src="./adminprofilefinal_files/bootstrap.min.js.download"></script>
	<script src="./adminprofilefinal_files/jquery.dataTables.min.js.download"></script>
	<script src="./adminprofilefinal_files/dataTables.bootstrap.min.js.download"></script>
	<script src="./adminprofilefinal_files/Chart.min.js.download"></script>
	<script src="./adminprofilefinal_files/fileinput.js.download"></script>
	<script src="./adminprofilefinal_files/chartData.js.download"></script>
	<script src="./adminprofilefinal_files/main.js.download"></script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script>
function checkpass() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'oldpassword='+$("#oldpassword").val(),
type: "POST",
success:function(data){
$("#password-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


</body></html>