<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="select * from admin where username='$user' And  password='$pass'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
if($row['username'==$user && $row['password']==$pass])
{
    $_SESSION['email']=$user;
 header('location:other/admin/dashboard.php');
}
else
{
    
    echo "<script type='text/javascript'>alert('Wrong credential');
window.location='adminlogin.php';
</script>";
}




?>