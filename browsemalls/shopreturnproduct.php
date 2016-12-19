<?php
session_start();
include 'dbconnect.php';

$shop = htmlentities( $_POST['shop'] );
$_SESSION['shop_name']= $shop;
echo "<h2 class=\"title text-center\">$shop</h2>";
$query2 = mysqli_query($connect,"SELECT * FROM `product` WHERE `shop_id` = (SELECT `id` FROM `shops` where `shop_name` = '$shop')");
while($row2 = mysqli_fetch_assoc($query2)){
$_SESSION['productid']= $row2['id'];
$_SESSION['shop_id']= $row2['shop_id'];
$_SESSION['name'] = $row2['name'];
$_SESSION['brand_tag'] = $row2['brand_tag'];
$_SESSION['inshopname'] = $row2['inshopname'];
$_SESSION['offer_id'] = $row2['offer_id'];
$offer_id = $row2['offer_id'];
$_SESSION['productimage'] = $row2['productimage'];
$query3 = mysqli_query($connect,"SELECT * FROM `offers` WHERE `Offer_id` = $offer_id");
$row3= mysqli_fetch_assoc($query3);
$_SESSION['offer_type'] = $row3['Offer_Type'];
$_SESSION['offer_details'] = $row3['Offer_Details'];
$_SESSION['offer_percentage'] = $row3['percentage'];

$productid= $row2['id'];
$name = $row2['name'];
$brand_tag = $row2['brand_tag'];
$inshopname = $row2['inshopname'];
$shop_id = $row2['shop_id'];
$productimage = $row2['productimage'];
$query3 = mysqli_query($connect,"SELECT * FROM `offers` WHERE `Offer_id` = $offer_id");
$row3 = mysqli_fetch_assoc($query3);
$offer_type = $row3['Offer_Type'];
$offer_details = $row3['Offer_Details'];
$offer_percentage = $row3['percentage'];

echo "<a href=\"shopdetails.php\">
<div class=\"col-sm-3\">
	<div class=\"product-image-wrapper\">
		<div class=\"single-products\">
				<div class=\"productinfo text-center\">
					<img src=\"$productimage\" alt=\"\" />
					<h2>&#8377;100</h2>
					<p>$name</p>
					<a href=\"#\" class=\"btn btn-default add-to-cart\">$offer_percentage% $offer_type</a>
				</div>
		</div>
		<div class=\"choose\">
			<ul class=\"nav nav-pills nav-justified\">
				<li><a href=\"#\"><i class=\"fa fa-plus-square\"></i>Add to wishlist</a></li>
				<li><a href=\"#\">$brand_tag</a></li>
			</ul>
		</div>
	</div>
</div></a>";
}
?>
