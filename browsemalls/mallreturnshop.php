<?php
session_start();
include 'dbconnect.php';

echo "<ul class=\"nav nav-pills nav-stacked\">";
$mall = htmlentities( $_POST['mall'] );
$_SESSION['mall'] = $mall;
$query2 = mysqli_query($connect,"SELECT * FROM shops WHERE `inmall` = '$mall'");
while($row2 = mysqli_fetch_assoc($query2)){
$shop_name = $row2['shop_name'];
$shop_id = $row2['id'];

$query23 = mysqli_query($connect,"SELECT count(*) FROM `product` WHERE `shop_id` = $shop_id");
$row=mysqli_fetch_array($query23,MYSQLI_NUM);

					

echo "<li><a href=\"#\"><div onclick=\"onshopselection('$shop_name','$shop_id'); return false;\"> <span class=\"pull-right\">($row[0])</span>$shop_name</div></a></li>";
}
echo "</ul>";


?>