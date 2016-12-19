<?php
session_start();
include 'dbconnect.php';


$city = htmlentities( $_POST['city'] );
$_SESSION['location'] = $city;
$query2 = mysqli_query($connect,"SELECT `Mall_Name` FROM `malls` WHERE `City_id` = (SELECT `City_id` FROM `city` WHERE `City_Name` = '$city' )");
$var = 1;
while($row2 = mysqli_fetch_assoc($query2)){
$malls = $row2['Mall_Name'];
if($var ==1){$_SESSION['first_mall']=$malls; $var=0;}
echo "<option value=\"$malls\">$malls</option>";
}


?>