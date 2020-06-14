<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <?php
        include("rectorheader.php");
        session_start();
        $userid=$_SESSION['user'];
        
        ?>
        <br><br><br><br><br><br>
        
        <div class="container wow fadeInUp">
            <hr>
            <div class="row">
                <div class=" col-lg-offset-10 col-md-2">
                    <p style="align-items: flex-end">
                        <strong>Welcome <?php echo $userid;?></strong>
                    </p>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/rector1.PNG" alt="" width="500px" height="263px"/>
                    <p>Hostel facility is available within the campus for boys.</p>
                </div>
                
                <div class="col-md-6">
                    <img src="images/rector2.PNG" alt="" width="500px" height="263px"/>
                    <p>The hostels provides excellent environment for living in terms of food, recreations, and a conducive atmosphere for study.</p> 
                </div>
                
                
            </div>
        </div>
        <?php include("rectorfooter.php"); ?>
    </body>
</html>
