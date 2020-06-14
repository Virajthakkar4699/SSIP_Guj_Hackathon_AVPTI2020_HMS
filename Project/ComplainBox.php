<!DOCTYPE html>
<html>
<head>
<title>Complain Box</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="complainbox.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php include("./header.php");?>
    <header class="section-header wow fadeInUp">
            <br><br><br><br><br><br>
          <h3>Complain Box</h3>
          <p>The Online Complain Box provides facility to share a complain regarding their problems to their respective Hostel Rectors.</p>
        </header>
<div class="container wow fadeInUp">
	<div id="content" align="center">
		<form action="#" method="post">
                    
                    Complain Type
                    <select name="position" class="ed" required="true">
                            <option value="">--NA--</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Electricity Supply">Electricity Supply</option>
                            <option value="Water Supply">Water Supply</option>
                            <option value="Others">Others</option>
                    </select><br>
                    <br>
                  
                    <br>
                    <textarea placeholder="Enter Description" id="text" name="text" rows="7" style="overflow: auto; word-wrap: break-word; resize: none; height: 200px; "></textarea>  
		<br>
		<input id="button" type="submit" value="Create">
		</form>
            <br><br>
	</div>
</div>
    <?php include("./footer.php"); ?>
</body>
</html>