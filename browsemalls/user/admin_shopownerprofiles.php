<?php
session_start();
include 'dbconnect.php';
if(!isset($_SESSION['admin'])){
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_SESSION['admin']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/browsemalls/">BROWSEMALLS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Vignesh Mahalingam</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>New Offer request from shop #5123</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Sai Teja</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Did you accept reqest no.5, Jayanth</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Chandra Mouli</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Phoenix mall new request regarding</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#"> <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Calendar <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Bills paid <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['admin']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="admin_index.php"><i class="fa fa-fw fa-dashboard"></i> Admin Dashboard</a>
                    </l>
                    <li >
                        <a href="admin_bannermanager.php"><i class="fa fa-fw fa-dashboard"></i> Advertisement Banner</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Featured Adds</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-table"></i> Shop Owner Profiles</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Mall Manager Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> Footer Management</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Category Management</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <center><img src="accounts/JayanthKumar/profilepic.png" class="thumbnail" height="100" width="100"/>
                
                        </center>

                    </div>
                    <div class="col-lg-10">
                        <h3><?php echo $_SESSION['admin'];?></h3>
                        <p><?php echo $_SESSION['role'];?></p>
                    </div>
                </div>

                <div class="row">
                <div class="col-lg-12">
                        <h4>Shop Owner Details</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Owner pic</th>
                                        <th>Details</th>
                                        <th>Mall</th>
                                        <th>Registered data</th>
                                        <th>Bill Expire date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query1 = mysqli_query($connect,"SELECT * FROM `shopowners`");
                                        while($row = mysqli_fetch_assoc($query1)){
                                            $ufn = $row['UserFirstName'];
                                            $uln = $row['UserLastName'];
                                            $email = $row['Email'];
                                            $pn = $row['PhoneNumber'];
                                            $mall = $row['Mall_Name'];
                                            $verified = $row['verified'];
                                            $rd = $row['RegistrationDate'];
                                            $bexdate = $row['Bill_ExpireDate'];
                                            if($verified==1){echo "<tr class=\"success\"> <td>Verified</td>";}
                                            else echo "<tr class=\"danger\"> <td>Not Verified</td>";
                                            echo   "
                                                    <td><img src=\"/browsemalls/user/accounts/profilepic.png\" height=\"70\" width=\"70\"></td>
                                                    <td>$ufn $uln <br> $email <br> $pn</td>
                                                    <td>$mall</td>
                                                    <td>$rd</td>
                                                    <td>$bexdate</td>
                                                  </tr>";
                                        }
                                        
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
