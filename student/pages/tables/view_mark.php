<?php
session_start();
include('../../../config.php');
$l=$_SESSION['loginid'];
if($l)
{

    $res=mysqli_query($con,"select * from studtbl where loginid=$l ");

    $result=mysqli_query($con,"select * from tlb_stud where loginid=$l ");


    if(mysqli_num_rows($res)!=0){
        $row=mysqli_fetch_assoc($res);

        $fname=$row['fname'];
    }
    else if(mysqli_num_rows($result)!=0){
        $row=mysqli_fetch_assoc($result);

        $fname=$row['name'];

    }
    else
    {
        echo "<script>alert('error');</script>";
    }
    ?>
    <?php


//$se="select staffid form staff where loginid='$loginid'";
    $re=mysqli_query($con,"SELECT * FROM `studtbl` WHERE  loginid='$l'");
    $row1=mysqli_fetch_array($re);
    $sid=$row1['signid'];


    $se="SELECT * FROM `student_marks` WHERE student_id='$sid'";
    $rel=mysqli_query($con,$se) or die(mysqli_error($con));
    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | LEAVE STATUS</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b></b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b></b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <?php include('../../notification.php'); ?>

                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!--<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                                <img src="logo.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $fname;?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="logo.jpg" class="img-circle" alt="User Image">
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/student/prof.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php include('../../menu.php');?>
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="logo.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>&nbsp;<?php echo $fname;?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <!-- <li class="header">MAIN NAVIGATION</li>-->
                    <li class="treeview">
                        <<!--a href="ican/staff/staffhome.php">
           <!-- <i class="fa fa-dashboard"></i> <span>HOME</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--<ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Leave Status

                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../studenthome.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <!--<li><a href="../../../studleave.php">Apply</a></li>-->
                    <li class="active">status</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <!--<div class="box">
                          <div class="box-header">
                            <h3 class="box-title">Hover Data Table</h3>
                          </div>
                          <!-- /.box-header -->
                        <!-- <div class="box-body">
                           <table id="example2" class="table table-bordered table-hover">
                             <thead>
                             <tr>
                               <th>Rendering engine</th>
                               <th>Browser</th>
                               <th>Platform(s)</th>
                               <th>Engine version</th>
                               <th>CSS grade</th>
                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                               <td>Trident</td>
                               <td>Internet
                                 Explorer 4.0
                               </td>
                               <td>Win 95+</td>
                               <td> 4</td>
                               <td>X</td>
                             </tr>
                             <tr>
                               <td>Trident</td>
                               <td>Internet
                                 Explorer 5.0
                               </td>
                               <td>Win 95+</td>
                               <td>5</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Trident</td>
                               <td>Internet
                                 Explorer 5.5
                               </td>
                               <td>Win 95+</td>
                               <td>5.5</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Trident</td>
                               <td>Internet
                                 Explorer 6
                               </td>
                               <td>Win 98+</td>
                               <td>6</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Trident</td>
                               <td>Internet Explorer 7</td>
                               <td>Win XP SP2+</td>
                               <td>7</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Trident</td>
                               <td>AOL browser (AOL desktop)</td>
                               <td>Win XP</td>
                               <td>6</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Firefox 1.0</td>
                               <td>Win 98+ / OSX.2+</td>
                               <td>1.7</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Firefox 1.5</td>
                               <td>Win 98+ / OSX.2+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Firefox 2.0</td>
                               <td>Win 98+ / OSX.2+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Firefox 3.0</td>
                               <td>Win 2k+ / OSX.3+</td>
                               <td>1.9</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Camino 1.0</td>
                               <td>OSX.2+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Camino 1.5</td>
                               <td>OSX.3+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Netscape 7.2</td>
                               <td>Win 95+ / Mac OS 8.6-9.2</td>
                               <td>1.7</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Netscape Browser 8</td>
                               <td>Win 98SE+</td>
                               <td>1.7</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Netscape Navigator 9</td>
                               <td>Win 98+ / OSX.2+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.0</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.1</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.1</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.2</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.2</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.3</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.3</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.4</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.4</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.5</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.5</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.6</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>1.6</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.7</td>
                               <td>Win 98+ / OSX.1+</td>
                               <td>1.7</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Mozilla 1.8</td>
                               <td>Win 98+ / OSX.1+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Seamonkey 1.1</td>
                               <td>Win 98+ / OSX.2+</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Gecko</td>
                               <td>Epiphany 2.20</td>
                               <td>Gnome</td>
                               <td>1.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>Safari 1.2</td>
                               <td>OSX.3</td>
                               <td>125.5</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>Safari 1.3</td>
                               <td>OSX.3</td>
                               <td>312.8</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>Safari 2.0</td>
                               <td>OSX.4+</td>
                               <td>419.3</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>Safari 3.0</td>
                               <td>OSX.4+</td>
                               <td>522.1</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>OmniWeb 5.5</td>
                               <td>OSX.4+</td>
                               <td>420</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>iPod Touch / iPhone</td>
                               <td>iPod</td>
                               <td>420.1</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Webkit</td>
                               <td>S60</td>
                               <td>S60</td>
                               <td>413</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 7.0</td>
                               <td>Win 95+ / OSX.1+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 7.5</td>
                               <td>Win 95+ / OSX.2+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 8.0</td>
                               <td>Win 95+ / OSX.2+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 8.5</td>
                               <td>Win 95+ / OSX.2+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 9.0</td>
                               <td>Win 95+ / OSX.3+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 9.2</td>
                               <td>Win 88+ / OSX.3+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera 9.5</td>
                               <td>Win 88+ / OSX.3+</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Opera for Wii</td>
                               <td>Wii</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Nokia N800</td>
                               <td>N800</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Presto</td>
                               <td>Nintendo DS browser</td>
                               <td>Nintendo DS</td>
                               <td>8.5</td>
                               <td>C/A<sup>1</sup></td>
                             </tr>
                             <tr>
                               <td>KHTML</td>
                               <td>Konqureror 3.1</td>
                               <td>KDE 3.1</td>
                               <td>3.1</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>KHTML</td>
                               <td>Konqureror 3.3</td>
                               <td>KDE 3.3</td>
                               <td>3.3</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>KHTML</td>
                               <td>Konqureror 3.5</td>
                               <td>KDE 3.5</td>
                               <td>3.5</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Tasman</td>
                               <td>Internet Explorer 4.5</td>
                               <td>Mac OS 8-9</td>
                               <td>-</td>
                               <td>X</td>
                             </tr>
                             <tr>
                               <td>Tasman</td>
                               <td>Internet Explorer 5.1</td>
                               <td>Mac OS 7.6-9</td>
                               <td>1</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Tasman</td>
                               <td>Internet Explorer 5.2</td>
                               <td>Mac OS 8-X</td>
                               <td>1</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>NetFront 3.1</td>
                               <td>Embedded devices</td>
                               <td>-</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>NetFront 3.4</td>
                               <td>Embedded devices</td>
                               <td>-</td>
                               <td>A</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>Dillo 0.8</td>
                               <td>Embedded devices</td>
                               <td>-</td>
                               <td>X</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>Links</td>
                               <td>Text only</td>
                               <td>-</td>
                               <td>X</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>Lynx</td>
                               <td>Text only</td>
                               <td>-</td>
                               <td>X</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>IE Mobile</td>
                               <td>Windows Mobile 6</td>
                               <td>-</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Misc</td>
                               <td>PSP browser</td>
                               <td>PSP</td>
                               <td>-</td>
                               <td>C</td>
                             </tr>
                             <tr>
                               <td>Other browsers</td>
                               <td>All others</td>
                               <td>-</td>
                               <td>-</td>
                               <td>U</td>
                             </tr>
                             </tbody>
                             <tfoot>
                             <tr>
                               <th>Rendering engine</th>
                               <th>Browser</th>
                               <th>Platform(s)</th>
                               <th>Engine version</th>
                               <th>CSS grade</th>
                             </tr>
                             </tfoot>
                           </table>
                         </div>
                         <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <!--<h3 class="box-title">Leave Status</h3>
                          </div>
                          <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>sl no:</th>
                                        <th>Exam name</th>
                                        <th>Subject</th>
                                        <th>Total mark</th>
                                        <th>Mark obtained</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $no=1;

                                    while($row3=mysqli_fetch_array($rel))

                                    {


                                        ?>

                                        <tr>
                                            <td><?php
                                                echo $no;
                                                ?></td>
                                            <td><?php
                                                echo $row3['exam_name'];
                                                ?></td>
                                            <td><?php
                                                echo $row3['subject'];
                                                ?></td>
                                            <td><?php
                                                echo $row3['total_mark'];
                                                ?></td>


                                            <td><?php
                                                echo $row3['mark'];
                                                ?></td>






                                        </tr>


                                        <?php
                                        ++$no;

                                    }














                                    ?>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
    </body>
    </html>
    <?php
}
else
{
    echo "<script>window.location=('/ican/index.php')</script>";
}

?>