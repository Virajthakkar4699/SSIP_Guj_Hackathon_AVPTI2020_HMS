

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$contact_no = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['psw'];
$confirm_password = $_POST['psw-repeat'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="insert into userRegistration(firstName,middleName,lastName,gender,contactNo,email,password) values('$fname','$mname','$lname','$gender',$contact_no,'$email','$password')";

mysqli_query($con,$q);
echo "<script type='text/javascript'>alert('Registration Successfully');
window.location='index.php';
</script>";


?>