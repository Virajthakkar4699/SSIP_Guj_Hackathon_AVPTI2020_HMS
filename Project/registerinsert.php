<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';
        
        
$Registration_ID=31;
$Admission_ID=1;
$Stud_First_Name=$_POST['Fname'];
$Stud_Middle_Name=$_POST['Mname'];
$Stud_Last_Name=$_POST['Lname'];
$Date_of_birth=$_POST['dob'];
$Contact_no=$_POST['cno'];
$Father_First_Name=$_POST['f_Fname'];
$Father_Middle_Name=$_POST['f_Mname'];
$Father_Last_Name=$_POST['f_Lname'];
$Father_occupation=$_POST['occupation'];
$Father_contact_no=$_POST['Fcno'];
$Mother_First_Name=$_POST['m_Fname'];
$Mother_Middle_Name=$_POST['m_Mname'];
$Mother_Last_Name=$_POST['m_Lname'];
$Mother_occupation=$_POST['moccupation'];
$Mother_contact_no=$_POST['Mcno'];
$Student_Email=$_POST['email'];
$Room_no=$_POST['room'];
$Permanent_Address=$_POST['address'];
$Permanent_City=$_POST['city'];
$Permanent_State=$_POST['state'];
$Permanent_Pincode=$_POST['pincode'];
$R_Address=$_POST['Raddress'];
$R_City=$_POST['Rcity'];
$R_State=$_POST['Rstate'];
$R_Pincode=$_POST['Rpincode'];
$User_ID=$_POST['username'];
$Password=$_POST['password'];
echo $User_ID;
        
        $con=@mysqli_connect(db_host,db_user,db_password,db_name) OR exit('could not connect to mysqli :'. mysqli_connect_error());
        $query="insert into Registration(Registration_ID,Admission_ID,Stud_First_Name,Stud_Middle_Name,Stud_Last_Name,Date_of_birth,Contact_no,Father_First_Name,Father_Middle_Name,Father_Last_Name,Father_occupation,Father_contact_no,Mother_First_Name,Mother_Middle_Name,Mother_Last_Name,Mother_occupation,Mother_contact_no,Student_Email,Room_no,Permanent_Address,Permanent_City,Permanent_State,Permanent_Pincode,R_Address,R_City,R_State,R_Pincode)values('$Registration_ID','$Admission_ID','$Stud_First_Name','$Stud_Middle_Name','$Stud_Last_Name','$Date_of_birth','$Contact_no','$Father_First_Name','$Father_Middle_Name','$Father_Last_Name','$Father_occupation','$Father_contact_no','$Mother_First_Name','$Mother_Middle_Name','$Mother_Last_Name','$Mother_occupation','$Mother_contact_no','$Student_Email','$Room_no','$Permanent_Address','$Permanent_City','$Permanent_State','$Permanent_Pincode','$R_Address','$R_City','$R_State','$R_Pincode')";
        
        $query1="insert into login(User_ID,Password)values('$User_ID','$Password')";
        if($con->query($query1)){
            echo "Inserted succcessfully";
            echo "<script language='javascript' type='text/javascript'>location.href='Login.php'</script>";
        }
 else {
       
        echo "Fail ".$con->error;
 }       
            
        ?>

