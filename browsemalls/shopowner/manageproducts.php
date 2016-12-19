<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['so']) && !isset($_SESSION['shop_id'])){
    header('Location: /Browsemalls/');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?php echo $_SESSION['so']."- Browsemalls";?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>BrowseMalls</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">1</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 1 pending tasks</p>
                            </li>
                            <li>
                                <a href="">
                                    <div class="task-info">
                                        <div class="desc">Complete Verification</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">CEO</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi, <?php echo $_SESSION['so'];?>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['so'];?></h5>
                    
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="advertise_manager.php" >
                          <i class="fa fa-desktop"></i>
                          <span>Advertise</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="billdetails.php" >
                          <i class="fa fa-book"></i>
                          <span>Bill Details</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" >
                          <i class="fa fa-th"></i>
                          <span>Manage Products</span>
                      </a>
                      
                  </li>


                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                  </li>
                  
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                      
                      <div class="row mt">

                        <div class="col-lg-8">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Upload new Product</h4>
                      <form class="form-horizontal style-form" onsubmit="return showFileSize();" method="post" action="#">
                         <div class="form-group">
                              
                              <div class="col-sm-12">
                                  <input type="text" class="form-control" name="product_name" placeholder="Name" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" placeholder="Price in &#8377;" name="product_price" class="form-control round-form" required>
                              </div>
                          </div>
                        
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-3 control-label">Category:</label>
                              <div class="col-sm-10">
                                <select class="form-control" onselect="oncategoryselection(this)"
                                 onchange="oncategoryselection(this)" name="product_category">
                                  <?php
                                  $query1 = mysqli_query($connect,"SELECT distinct main FROM `category1`");
                                  echo "<option value=\"\" selected></option>";
                                  while($row = mysqli_fetch_assoc($query1)){
                                    $cat = $row['main'];
                                      echo "<option value=\"$cat\"> $cat </option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                          </div>

                          <div id="sub1"></div>
                          <div id="sub2"></div>
                          <div id="sub3"></div>
                          
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="file" id="fileinput" name="fileinput" onchange="showFileSize();" required>
                                  <div id="filestatus"></div>
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-3 control-label">Brand:</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="brand_tag">
                                  <?php
                                  $query1 = mysqli_query($connect,"SELECT distinct BrandName FROM `brands`");
                                  while($row = mysqli_fetch_assoc($query1)){
                                    $brand = $row['BrandName'];
                                      echo "<option value=\"$brand\"> $brand </option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-3 control-label">Offer:</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="offer_id">
                                  <?php
                                  $query1 = mysqli_query($connect,"SELECT distinct * FROM `offers`");
                                  while($row = mysqli_fetch_assoc($query1)){
                                    $OT = $row['Offer_Type'];
                                      echo "<option value=\"$OT\"> $OT </option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">Shop:</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static"><?php echo ($_SESSION['shop_name']);?></p>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-10">
                                  <input type="submit" name="product_upload_button" class="btn btn-info" value="Upload Product">
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->




                      </div><!-- /row -->
                    
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                 <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>My Products</h3>
                                        
                      <?php
                      $shop_id = $_SESSION['shop_id'];
                      echo($shop_id);
                          $query1 = mysqli_query($connect,"SELECT * FROM `product` WHERE `id` = 3");
                          while($row = mysqli_fetch_assoc($query1)){
                            $product_name = $row['name'];
                            $product_image = $row['productimage'];
                            $product_price = $row['price'];
                            $product_brandtag = $row['brand_tag'];
                            echo "<div class=\"desc\">
                        <div class=\"thumb\">
                          <img src=\" /browsemalls/$product_image\" height=\"50px\" width=\"50px\" padding=\"15px\">
                        </div>
                        <div class=\"details\" margin-left=\"15px\">
                          <p>$product_name<br/>
                            $product_price<br/>
                            $product_brandtag
                          </p>
                        </div>
                      </div>";
                          }
                      ?>    


                      
                        
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - BrowseMalls
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
