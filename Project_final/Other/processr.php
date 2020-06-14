<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');

$emailid=$_POST['email'];

$q="select emailid from registration where emailid='$emailid'";
$con=mysqli_connect('localhost','root','','hostel');
                $result=mysqli_query($con,$q);
                if($result==$emailid)
                {
echo"<script>alert('exist already');</script>";
header('location:dashboard.php');
                }
                else
                {
                    header('location:dashboard.php');
                }

?>