<?php
session_start();
include 'dbconnect.php';

$shop = htmlentities( $_POST['shop'] );
echo "<h2 class=\"title text-center\">$shop offers</h2>";
echo "<div class=\"col-sm-12\">
		<ul class=\"nav nav-tabs\">";
$queryot = mysqli_query($connect,"SELECT * FROM `offer_type`");
$cc = 1;
$offername = "";
while($rowot = mysqli_fetch_assoc($queryot)){
$offername = $rowot['offer_type'];
if($cc == 1){echo "<li class=\"active\"><a href=\"#$offername\" data-toggle=\"tab\">$offername</a></li>"; $cc=0;}
else{echo "<li><a href=\"#$offername\" data-toggle=\"tab\">$offername</a></li>";}}
echo "</ul>
</div>";


?>

<div class="tab-content">


<?php 
$queryot2 = mysqli_query($connect,"SELECT * FROM `offer_type`");
$cc2 = 1;
while($rowot2 = mysqli_fetch_assoc($queryot2)){
$offer_name = $rowot2['offer_type'];
if($cc2==1){echo "<div class=\"tab-pane fade active in\" id=\"$offer_name\" >"; $cc2=0;}
	else{echo "<div class=\"tab-pane fade\" id=\"$offer_name\" >";}
$query2 = mysqli_query($connect,"SELECT * FROM `product` WHERE `shop_id` = (SELECT `id` FROM `shops` where `shop_name` = '$shop')");
while($row2 = mysqli_fetch_assoc($query2)){
$offer_id = $row2['offer_id'];
$query3 = mysqli_query($connect,"SELECT * FROM `offers` WHERE `Offer_id` = $offer_id");
$row3 = mysqli_fetch_assoc($query3);
$offer_type = $row3['Offer_Type'];
if($offer_type == $offer_name){
$name = $row2['name'];
$brand_tag = $row2['brand_tag'];
$inshopname = $row2['inshopname'];
$productimage = $row2['productimage'];
$price = $row2['price'];
$offer_details = $row3['Offer_Details'];
$offer_percentage = $row3['percentage'];

echo "<a href=\"shopdetails.php\">
<div class=\"col-sm-3\">
<div class=\"product-image-wrapper\">
	<div class=\"single-products\">
		<div class=\"productinfo text-center\">
			<img src=\"$productimage\" alt=\"\" />
			<h2>&#8377;$price $offer_percentage%</h2>
			<p>$name</p>
			<a href=\"#\" class=\"btn btn-default add-to-cart\">Enter $shop</a>
		</div>
	</div>
</div>
</div></a>";
}
else{
}

}
echo "</div>";
}
?>
</div>