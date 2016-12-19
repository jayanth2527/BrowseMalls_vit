<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['location'])){$_SESSION['location'] = "Chennai";}
if(!isset($_SESSION['mall'])){$_SESSION['mall'] = "Express Avenue Chennai";}


$shopname = $_SESSION['shop_name'];
$shopid = $_SESSION['shop_id'];
$querysa = mysqli_query($connect,"SELECT * FROM `shops` WHERE `id` = $shopid");
$rowsa = mysqli_fetch_assoc($querysa);
$shopaddress = $rowsa['shop_address'];
$shopnumber = $rowsa['shop_number'];
$shopfloor = $rowsa['shop_floor'];
$productid = $_SESSION['productid'];
$productname = $_SESSION['name'];
$brandtag = $_SESSION['brand_tag'];
$productimage  =$_SESSION['productimage'];
$offertype = $_SESSION['offer_type'];
$offerid = $_SESSION['offer_id'];
$offerdetails = $_SESSION['offer_details'];
$offerpercentage = $_SESSION['offer_percentage'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BrowseMalls</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-md-2">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" height="35" width="170" alt=""/></a>
						</div>
					</div>
					<div class="col-sm-2 col-md-2">
						<div class="form-group">
						<select class="cityselection" class="form-control" onchange="oncityselection(this)">
							<?php
								$query1 = mysqli_query($connect,"SELECT `City_Name` FROM `city`");
									while($row = mysqli_fetch_assoc($query1)){
										$city = $row['City_Name'];
										if(isset($_SESSION['location'])){
											if($city == $_SESSION['location'])
											{echo "<option value=\"$city\" selected> $city </option>";}
											else {echo "<option value=\"$city\"> $city </option>";}
										}
									}
							?>
						</select>
						</div>
					</div>

					<div class="col-sm-3 col-md-3 pull-right">
				        <form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				            </div>
				        </div>
				        </form>
			        </div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->








<section>
		<div class="container">
			<div class="row" id="shopdetailscontainer">
				<div class="col-sm-6">
					
					<div class="col-sm-6">
							<?php echo "<h4 class=\"title text-center\">".$productname."</h4>";?>
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										
										<img class="thumbnail" src=<?php echo "\"".$productimage."\"";?> alt="" />
										
									</div>
								
								</div>
								
							</div>
					
				</div>
				<div class="col-sm-6" >
					<h2 class="title text-center"></h2>
					<table class="table table-hover">
					    <tbody>

					      <tr>
					      	<td>Product</td>
					        <td><?php echo $productname?></td>
					      </tr>
					      <tr>
					      	<td>Offer:</td>
					        <td><?php echo "on ".$offertype." ".$offerpercentage." Off!!";?></td>
					      </tr>

					       <tr>
					      	<td>Brand:</td>
					        <td><?php echo $brandtag;?></td>
					      </tr>
					      <tr>
					      	<td>Shop:</td>
					        <td><?php echo $shopname;?></td>
					      </tr>
					      <tr>
					      	<td>Mall:</td>
					        <td><?php echo "Shop No.".$shopnumber.", ".$_SESSION['mall'].", ".$shopfloor;?></td>
					      </tr>
					    </tbody>
					</table>
					
				</div>


				</div>
				
				<div class="col-sm-6">
					<h2 class="title text-center"><?php echo $shopname;?></h2>
					<img src="images/home/partner4.png" width="100%" height="150px">
					
					<table class="table table-bordered" id="shopdetailscontainer">
					    
					    <tbody>
					      <tr>
					        <td><?php echo "Shop No.".$shopnumber.", ".$_SESSION['mall'].", ".$shopfloor;?></td>
					       
					        
					      </tr>
					     
					   
					    </tbody>
					</table>
					
				</div>
			</div>
			<div class="row">
				
				
				<div class="col-sm-12 padding-right">
					
					
					<div class="category-tab"><!--category-tab-->
						<h2 class="title text-center"> Offers from <?php echo $shopname;?> </h2>
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#cashbackoffers" data-toggle="tab" onclick="onofferselection('Cash back');">Cash Back offers</a></li>
								<li class="active"><a href="#discountoffers" data-toggle="tab" onclick="onofferselection('Discount');">Discount sale</a></li>
								<li><a href="#walletoffers" data-toggle="tab" onclick="onofferselection('Wallet');">Wallet Discounts</a></li>
								<li><a href="#debitcardoffers" data-toggle="tab" onclick="onofferselection('Debit Card');">Debit card Dicounts</a></li>
								<li><a href="#otheroffers" data-toggle="tab" onclick="onofferselection('Other Offers');">Others</a></li>
							</ul>
						</div>

						<div class="tab-content">
							
							<div class="tab-pane fade" id="Discount">
								
							</div>
							
							<div class="tab-pane fade" id="Cash back" >
								
							</div>
							
							<div class="tab-pane fade" id="Wallet" >
								
							</div>
							
							<div class="tab-pane fade" id="Debit Card" >
								
							</div>

							<div class="tab-pane fade" id="Other Offers" >
								
							</div>
							
							
						</div>
					</div><!--/category-tab-->

					
					
				</div>
			</div>

		</div>
	</section>


















	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Browse</span>Malls</h2>
							<p>India's biggest offline shopping store. </p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
								</a>
								<p> Debit cards</p>
								<h2>offers</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
								</a>
								<p>Wallet</p>
								<h2>offers</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									
								</a>
								<p>Cash Back</p>
								<h2>Offers</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									
								</a>
								<p>Discounts</p>
								<h2>offers</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>BrowseMalls shops</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Partners</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About BrowseMalls</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 BrowseMalls Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.quikieapps.org">QuikieApps</a></span></p>

				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
	    <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/price-range.js"></script>
	    <script src="js/jquery.prettyPhoto.js"></script>
	    <script src="js/main.js"></script>
	    <script src="js/jsintegration.js"></script>
</body>
</html>