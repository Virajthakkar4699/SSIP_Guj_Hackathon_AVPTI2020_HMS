<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



            include 'connection.php';
            session_start();
            $userid=$_POST['username'];
            $password=$_POST['password'];
            $_SESSION['user']=$userid;
            //echo $_SESSION['user'];
            $rector="Anand";
            $rector_pass="Anand";
            
            if($userid=="Anand" && $password="Anand")
            {
                  echo "<script language='javascript' type='text/javascript'>location.href='RectorHome.php'</script>";
            }
            else 
            {
            $con=@mysqli_connect(db_host,db_user,db_password,db_name) OR exit('could not connect '. mysqli_connect_error());
            
            $query=("SELECT User_ID from Login where User_ID='$userid' and Password='$password'; ");
            $result=@mysqli_query($con, $query);
           //echo $result;
            //echo $result;
            
            if(mysqli_num_rows($result)!=0)
            {
                  echo "<script language='javascript' type='text/javascript'>location.href='Welcome.php'</script>";
            }
            else
            {  
                  echo "<script language='javascript' type='text/javascript'>location.href='Login.php'</script>";
                
            }
            
            
            }
?>