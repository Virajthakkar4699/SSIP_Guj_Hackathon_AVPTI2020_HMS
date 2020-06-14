<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$to_email='17bmiit018@gmail.com';
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $headers=$_POST['email'];
       
        if(mail($to_email, $subject, $message,$headers))
        {
            echo "Email  Sent";
        }
        else {echo "Email Failed";
     
        }
        ?>