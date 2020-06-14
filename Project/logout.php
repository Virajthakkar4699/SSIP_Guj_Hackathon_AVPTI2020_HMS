<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

 if(isset($_SESSION['email']))
                {
                    unset($_SESSION['email']);
                    session_destroy();
                    session_start();
                    $_SESSION['email']="";

                    header('location:index.php');
                }
                
               
 ?>