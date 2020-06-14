<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8" />
<title>Notice Board</title>
<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
*{
  margin:0;
  padding:0;
}
a{
    color: #000;
}
body{
  font-family:arial,sans-serif;
  font-size:100%;
  margin:3em;
  background:#ffffff;
  color:#000;
}
h2,p{
  font-size:100%;
  font-weight:normal;
}
.unordered,ordered{
  list-style:none;
}
.unordered{
  overflow:hidden;
  padding:3em;
}
.unordered ordered a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}
.unordered ordered a{
  margin:1em;
  float:left;
}
.unordered ordered h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
.unordered ordered p{
  font-family:"Reenie Beanie",arial,sans-serif;
  font-size:180%;
}
.unordered ordered {
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform:rotate(-6deg);
}
.unordered ordered:nth-child(even) a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
.unordered ordered:nth-child(3n) a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
.unordered ordered:nth-child(5n) a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
.unordered ordered a:hover,ordered unordered a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}

</style>
    </head>
    <body>
        <?php include("./header.php"); ?>
        <header class="section-header wow fadeInUp">
            <br>
            <br>
            <br><br><br><br>
          <h3>Notice Board</h3>
          <p>The online notice board of Kabir Hostel gives daily updates regarding the hostel and other stuffs.</p>
        </header>
    <center>
    <div class="container wow fadeInUp">
        <div class="row">
        <div class="unordered">
                <div class="ordered col-lg-4 wow fadeInUp">
                   <button class="w3-button w3-red" onclick="document.getElementById('id01').style.display='block'">Monday</button> 

                    <div id="id01" class="w3-panel w3-red w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
                <div class="ordered col-lg-4 wow fadeInUp">
                   <button class="w3-button w3-green" onclick="document.getElementById('id02').style.display='block'">Tuesday</button> 
                    <div id="id01" class="w3-panel w3-green w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
                <div class="ordered col-lg-4 wow fadeInUp">

                    <button class="w3-button w3-grey" onclick="document.getElementById('id03').style.display='block'">Wednesday</button> 

                    <div id="id01" class="w3-panel w3-grey w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
        </div>
        <div class="unordered">
                <div class="ordered col-lg-4 wow fadeInUp">
                    <button class="w3-button w3-purple" onclick="document.getElementById('id04').style.display='block'">Thursday</button> 

                    <div id="id01" class="w3-panel w3-purple w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
                <div class="ordered col-lg-4 wow fadeInUp">

                    <button class="w3-button w3-yellow" onclick="document.getElementById('id05').style.display='block'">Friday</button> 

                    <div id="id01" class="w3-panel w3-yellow w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
                <div class="ordered col-lg-4 wow fadeInUp">

                    <button class="w3-button w3-blue" onclick="document.getElementById('id06').style.display='block'">Saturday</button> 

                    <div id="id01" class="w3-panel w3-blue w3-display-container" style="display:none">
                      <span onclick="this.parentElement.style.display='none'"
                      class="w3-button w3-red w3-display-topright">x</span>
                      <p>Content</p>
                    </div> 
                </div>
        </div>
            <div class="unordered">
            <div class="ordered col-lg-4 wow fadeInUp">
                
                <button class="w3-button w3-black" onclick="document.getElementById('id07').style.display='block'">Sunday</button> 

                <div id="id01" class="w3-panel w3-black w3-display-container" style="display:none">
                  <span onclick="this.parentElement.style.display='none'"
                  class="w3-button w3-red w3-display-topright">x</span>
                  <p>Content</p> 
                </div>    
            </div>
        </div>
        </div>
    </div>
    </center>
        <?php include("./footer.php"); ?>
    </body>
    
</html>
