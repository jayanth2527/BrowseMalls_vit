<!DOCTYPE html>
<?php
session_start();

include 'dbconnect.php';

if(isset($_POST['abutton']))
{
	$tbl_name="admin";
	if(!empty($_POST['aid']) && !empty($_POST['password']) && !empty($_POST['code']))
	{
		$aid = $_POST['aid']; 
		$password = $_POST['password'];
		$code = $_POST['code'];
		$query=mysqli_query($connect,"SELECT * FROM `$tbl_name` WHERE admin_password='$password' AND (admin_user_name='$aid' OR phone_number='$aid') AND code='$code' ");
		$countv=mysqli_num_rows($query);

		if($countv==1)
		{
			$row = mysqli_fetch_assoc($query);
			$afn = $row['admin_first_name'];
			$aln = $row['admin_last_name'];
			$role = $row['role'];
			$_SESSION['orglevel'] = $row['admin_level'];
			$_SESSION['admin'] = $afn." ".$aln;
			$_SESSION['role'] = $role;
			header('Location: user/admin_index.php');
		}
		else 
		{		
			echo "<script>
			alert(\"Wrong credentials\");
			</script>";
		}
	}
	else
	{
		echo "<script>
			alert(\"Enter credentials\");
			</script>";
	}
}

?>
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



	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Administrator Login</h2>
						<form action="#" method="post">
							<input type="text" name="aid" placeholder="User Name or Mobile Number" required/>
							<input type="password" name="password" placeholder="Password" required/>
							<input type="password" name="code" placeholder="Code" required/>
							<button type="submit" name="abutton" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-6">
				<section id="slider"><!--slider-->
					
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
								
							
				</section><!--/slider-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
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