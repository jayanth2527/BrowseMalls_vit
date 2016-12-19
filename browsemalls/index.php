<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['location'])){$_SESSION['location'] = "Chennai";}
if(!isset($_SESSION['mall'])){$_SESSION['mall'] = "Express Avenue Chennai";}
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
	<section><div class="container">
	<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="shopowner_login.php">Login</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronics <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="#">Mobiles</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Computers and Laptops</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Usage</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Washing Machine</a></li>
                                <li><a href="#">Refrigerator</a></li>
                                <li><a href="#">Air - Cooler</a></li>
                                <li><a href="#">Air Conditioner</a></li>
                                <li><a href="#">Refrigerator</a></li>
                                <li><a href="#">Music System</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Accessories</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clothing <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">T-shirts</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Trouser</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sarees</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Kurtis</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Ethnic wear</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">0 - 5 years</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Pants</a></li>
                                <li><a href="#">Festive Wear</a></li>
                            </ul>
                        </li>
                       	<li><a href="#">Family</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">FootWear<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mens</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Family</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home & Furniture<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tiles & Granites</a></li>
                        <li><a href="#">Interior Parts</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Furnitures</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Cots</a></li>
                                <li><a href="#">Sofas</a></li>
                                <li><a href="#">Tables</a></li>
                                <li><a href="#">Glasses</a></li>
                            </ul>
                        </li>
                      
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Films</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Fun Zones</a></li>
                        <li><a href="#">Digital Game World</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Foods & Beverages<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">North</a></li>
                        <li><a href="#">South</a></li>
                        <li><a href="#">Chinese</a></li>
                        <li><a href="#">All at One</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

</div>
	</section>







	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<?php
								$query1 = mysqli_query($connect,"SELECT count(*) FROM `imageslider`");
								$row = mysqli_fetch_array($query1);
								$total = $row[0];
								$i=1;
								while($i<$total){
									echo "<li data-target=\"#slider-carousel\" data-slide-to=\" $i\"></li>";
									$i++;
								}
							?>
						</ol>
						
						<div class="carousel-inner">
							


							<?php
								$query2 = mysqli_query($connect,"SELECT * FROM `imageslider`");
								while($row = mysqli_fetch_assoc($query2)){
										$id = $row['id'];
										$spanno = $row['spanno'];
										$h2 = $row['htext'];
										$p = $row['ptext'];
										$src = $row['imagelocation'];
										if($id == 1){
											echo "<div class=\"item active\">";
											echo "<div class=\"col-sm-6\">";
											echo "<h1><span> $spanno</span></h1>";
											echo "<h2>$h2</h2>";
											echo "<p>$p</p>";
											echo "<button type=\"button\" class=\"btn btn-default get\">Get it now</button>";
											echo"</div>";
											echo"<div class=\"col-sm-6\">";
											echo"<img src=\"$src\" class=\"girl img-responsive\" alt=\"\" />";

											echo "</div></div>";}
											else{
											echo "<div class=\"item\">";
											echo "<div class=\"col-sm-6\">";
											echo "<h1><span> $spanno</span></h1>";
											echo "<h2>$h2</h2>";
											echo "<p>$p</p>";
											echo "<button type=\"button\" class=\"btn btn-default get\">Get it now</button>";
											echo"</div>";
											echo"<div class=\"col-sm-6\">";
											echo"<img src=\"$src\" class=\"girl img-responsive\" alt=\"\" />";
											echo "</div></div>";
											}
										
									}
							?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
























	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2><div id="cityh2"><?php echo $_SESSION['location'];?></div></h2>
						<select class="mallselection" onchange="onmallselection(this); return false;" onclick="onmallselection(this); return false;">
								<?php
								$query2 = mysqli_query($connect,"SELECT `Mall_Name` FROM `malls` WHERE `City_id` = (SELECT `City_id` FROM `city` WHERE `City_Name` = '".$_SESSION['location']."' )");
								while($row2 = mysqli_fetch_assoc($query2)){
								$malls = $row2['Mall_Name'];
								echo "<option value=\"$malls\">$malls</option>";
								}
								?>
							</select>
							<div id="runhere"></div>
						<div class="panel-group category-products"><!--category-productsr-->
							<h2><div id="mallnamediv">Select a shop</div></h2>
							<div class="brands-name" id="containsshop">
								<?php
								$mall = $_SESSION['mall'];
								echo "<ul class=\"nav nav-pills nav-stacked\">";
								$query2 = mysqli_query($connect,"SELECT * FROM `shops` WHERE `inmall` = '$mall'");
								while($row2 = mysqli_fetch_assoc($query2)){
								$shop_name = $row2['shop_name'];
								$shop_id = $row2['id'];
								$query23 = mysqli_query($connect,"SELECT count(*) FROM `product` WHERE `shop_id` = $shop_id");
								$row=mysqli_fetch_array($query23,MYSQLI_NUM);
								echo "<li id=\"$shop_name\"><a href=\"#\"><div onclick=\"onshopselection('$shop_name'); return false;\"> <span class=\"pull-right\">($row[0])</span>$shop_name</div></a></li>";
								}
								echo "</ul>";
								?>
							</div>
						</div><!--/category-products-->



						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
						
						

					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items">
					</div>
					
					<div class="category-tab"><!--category-tab-->
						<h2 class="title text-center">offers</h2>
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
							
							<div class="tab-pane fade active in" id="Discount">
								
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
	
	<section>
		<div class="container">
			<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Similar Offers</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>Micromax Grand 2</h2>
													<p>20% Discount</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>Toaster</h2>
													<p>50 % Cash back Offer</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>80% Cash back</h2>
													<p>On purchase above 2000</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>New Year Sale</h2>
													<p>30% on Debit cards</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>80% Wallet</h2>
													<p>On purchase above 2000</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
								<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>Micromax Grand 2</h2>
													<p>20% Discount</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>Toaster</h2>
													<p>Festive Offer</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>New Year Sale</h2>
													<p>10% on Debit cards</p>
													<a href="#" class="btn btn-default add-to-cart">browse shop</a>
												</div>
												
											</div>
										</div>
									</div>
								
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
		</div>
	</section>


























	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<a href="index.php"><img src="images/home/logo.png" height="35" width="170" alt=""/></a>
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