<html>
    <head>
        <title>Search Room</title>
        <style>
            table ,th,td{
                border:2px solid black;
            }
            </style>
    </head>
<body>

<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="select room_no,available_rooms,fees from rooms where available_rooms>1";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$num=mysqli_num_rows($result);


?>
<table >
<tr>
    <th>Room number</th>
    <th>Available seat</th>
    <th>Fees(per sem)</th>
    
</tr>
<?php

for($i=1;$i<=$num;$i++)
{



?>
<tr>
    <td><?php echo $row['room_no']; ?></td>
    <td><?php echo $row['available_rooms']; ?></td>
    <td><?php echo $row['fees']; ?></td>
</tr>
<?php
}
?>
</table>




</body>




</html>