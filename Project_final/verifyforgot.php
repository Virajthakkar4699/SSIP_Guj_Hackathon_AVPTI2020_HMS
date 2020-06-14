<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 include 'connection.php';
            session_start();
            $userid=$_POST['username'];
            $password=$_POST['password1'];
            $_SESSION['user']=$userid;
            //echo $_SESSION['user'];
            
            $con=@mysqli_connect(db_host,db_user,db_password,db_name) OR exit('could not connect '. mysqli_connect_error());
            
            $query=("UPDATE Login set Password='$password' where User_ID='$userid'; ");
            $result=@mysqli_query($con, $query);
           //echo $result;
            //echo $result;
            
            if(mysqli_query($con, $query))
            {
                  echo "<script language='javascript' type='text/javascript'>location.href='Login.php'</script>";
            }
            else {
                   echo "<script language='javascript' type='text/javascript'>location.href='ForgotPassword.php'</script>";
            }
            
?>