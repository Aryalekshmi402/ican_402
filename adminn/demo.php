<?php
session_start();
include('../config.php');
if(isset($_SESSION['login']))
{
    $l = $_SESSION['login'];
    $sq = "Select * from studtbl where loginid='$l'";
    $res = mysqli_query($con,$sq);
    $row = mysqli_fetch_assoc($res);
    $n = ucwords($row['fname']);
    $add = ucwords($row['gname']);
    $gen = ucwords($row['ge']);
    $da = strtotime($row['dob']);
    $ph = $row['mob'];
    $sta = $row['stateid'];
    $di = $row['districtid'];
    $pin = ucwords($row['pin']);
    $city = ucwords($row['city']);
    $dob = date('d/m/Y', $da);

    $s=mysqli_query($con,"SELECT * FROM tlb_state where stateid='$sta'");
    $ss=mysqli_fetch_assoc($s);
    $state=$ss['state_name'];

    $s1=mysqli_query($con,"SELECT * FROM tlb_district where districtid='$di'");
    $ss1=mysqli_fetch_assoc($s1);
    $dist=$ss1['district'];

    $sq1 = "Select * from logintbl where loginid='$l'";
    $res1 = mysqli_query($con,$sq1);
    $row1 = mysqli_fetch_assoc($res1);
    $em=$row1['emailid']

    ?>




    <html>
    <head>
        <style>
            body{
                margin-top:20px;
                background:#eee;
            }

            .profile-header {
                position: relative;
                overflow: hidden
            }

            .profile-header .profile-header-cover {
                background-color: #00b5ec;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0
            }

            .profile-header .profile-header-cover:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .75) 100%)
            }

            .profile-header .profile-header-content {
                color: #fff;
                padding: 25px
            }

            .profile-header-img {
                float: left;
                width: 120px;
                height: 120px;
                overflow: hidden;
                position: relative;
                z-index: 10;
                margin: 0 0 -20px;
                padding: 3px;
                border-radius: 4px;
                background: #fff
            }

            .profile-header-img img {
                max-width: 100%
            }

            .profile-header-info h4 {
                font-weight: 500;
                color: #fff
            }

            .profile-header-img+.profile-header-info {
                margin-left: 140px
            }

            .profile-header .profile-header-content,
            .profile-header .profile-header-tab {
                position: relative
            }

            .b-minus-1,
            .b-minus-10,
            .b-minus-2,
            .b-minus-3,
            .b-minus-4,
            .b-minus-5,
            .b-minus-6,
            .b-minus-7,
            .b-minus-8,
            .b-minus-9,
            .b-plus-1,
            .b-plus-10,
            .b-plus-2,
            .b-plus-3,
            .b-plus-4,
            .b-plus-5,
            .b-plus-6,
            .b-plus-7,
            .b-plus-8,
            .b-plus-9,
            .l-minus-1,
            .l-minus-2,
            .l-minus-3,
            .l-minus-4,
            .l-minus-5,
            .l-minus-6,
            .l-minus-7,
            .l-minus-8,
            .l-minus-9,
            .l-plus-1,
            .l-plus-10,
            .l-plus-2,
            .l-plus-3,
            .l-plus-4,
            .l-plus-5,
            .l-plus-6,
            .l-plus-7,
            .l-plus-8,
            .l-plus-9,
            .r-minus-1,
            .r-minus-10,
            .r-minus-2,
            .r-minus-3,
            .r-minus-4,
            .r-minus-5,
            .r-minus-6,
            .r-minus-7,
            .r-minus-8,
            .r-minus-9,
            .r-plus-1,
            .r-plus-10,
            .r-plus-2,
            .r-plus-3,
            .r-plus-4,
            .r-plus-5,
            .r-plus-6,
            .r-plus-7,
            .r-plus-8,
            .r-plus-9,
            .t-minus-1,
            .t-minus-10,
            .t-minus-2,
            .t-minus-3,
            .t-minus-4,
            .t-minus-5,
            .t-minus-6,
            .t-minus-7,
            .t-minus-8,
            .t-minus-9,
            .t-plus-1,
            .t-plus-10,
            .t-plus-2,
            .t-plus-3,
            .t-plus-4,
            .t-plus-5,
            .t-plus-6,
            .t-plus-7,
            .t-plus-8,
            .t-plus-9 {
                position: relative!important
            }

            .profile-header .profile-header-tab {
                background: #fff;
                list-style-type: none;
                margin: -10px 0 0;
                padding: 0 0 0 140px;
                white-space: nowrap;
                border-radius: 0
            }

            .text-ellipsis,
            .text-nowrap {
                white-space: nowrap!important
            }

            .profile-header .profile-header-tab>li {
                display: inline-block;
                margin: 0
            }

            .profile-header .profile-header-tab>li>a {
                display: block;
                color: #929ba1;
                line-height: 20px;
                padding: 10px 20px;
                text-decoration: none;
                font-weight: 700;
                font-size: 12px;
                border: none
            }

            .profile-header .profile-header-tab>li.active>a,
            .profile-header .profile-header-tab>li>a.active {
                color: #242a30
            }

            .profile-content {
                padding: 25px;
                border-radius: 4px
            }

            .profile-content:after,
            .profile-content:before {
                content: '';
                display: table;
                clear: both
            }

            .profile-content .tab-content,
            .profile-content .tab-pane {
                background: 0 0
            }

            .profile-left {
                width: 200px;
                float: left
            }

            .profile-right {
                margin-left: 240px;
                padding-right: 20px
            }

            .profile-image {
                height: 175px;
                line-height: 175px;
                text-align: center;
                font-size: 72px;
                margin-bottom: 10px;
                border: 2px solid #E2E7EB;
                overflow: hidden;
                border-radius: 4px
            }

            .profile-image img {
                display: block;
                max-width: 100%
            }

            .profile-highlight {
                padding: 12px 15px;
                background: #FEFDE1;
                border-radius: 4px
            }

            .profile-highlight h4 {
                margin: 0 0 7px;
                font-size: 12px;
                font-weight: 700
            }

            .table.table-profile>thead>tr>th {
                border-bottom: none!important
            }

            .table.table-profile>thead>tr>th h4 {
                font-size: 20px;
                margin-top: 0
            }

            .table.table-profile>thead>tr>th h4 small {
                display: block;
                font-size: 12px;
                font-weight: 400;
                margin-top: 5px
            }

            .table.table-profile>tbody>tr>td,
            .table.table-profile>thead>tr>th {
                border: none;
                padding-top: 7px;
                padding-bottom: 7px;
                color: #242a30;
                background: 0 0
            }

            .table.table-profile>tbody>tr>td.field {
                width: 20%;
                text-align: right;
                font-weight: 600;
                color: #2d353c
            }

            .table.table-profile>tbody>tr.highlight>td {
                border-top: 1px solid #b9c3ca;
                border-bottom: 1px solid #b9c3ca
            }

            .table.table-profile>tbody>tr.divider>td {
                padding: 0!important;
                height: 10px
            }

            .profile-section+.profile-section {
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid #b9c3ca
            }

            .profile-section:after,
            .profile-section:before {
                content: '';
                display: table;
                clear: both
            }

            .profile-section .title {
                font-size: 20px;
                margin: 0 0 15px
            }

            .profile-section .title small {
                font-weight: 400
            }

            body.flat-black {
                background: #E7E7E7
            }

            .flat-black .navbar.navbar-inverse {
                background: #212121
            }

            .flat-black .navbar.navbar-inverse .navbar-form .form-control {
                background: #4a4a4a;
                border-color: #4a4a4a
            }

            .flat-black .sidebar,
            .flat-black .sidebar-bg {
                background: #3A3A3A
            }

            .flat-black .page-with-light-sidebar .sidebar,
            .flat-black .page-with-light-sidebar .sidebar-bg {
                background: #fff
            }

            .flat-black .sidebar .nav>li>a {
                color: #b2b2b2
            }

            .flat-black .sidebar.sidebar-grid .nav>li>a {
                border-bottom: 1px solid #474747;
                border-top: 1px solid #474747
            }

            .flat-black .sidebar .active .sub-menu>li.active>a,
            .flat-black .sidebar .nav>li.active>a,
            .flat-black .sidebar .nav>li>a:focus,
            .flat-black .sidebar .nav>li>a:hover,
            .flat-black .sidebar .sub-menu>li>a:focus,
            .flat-black .sidebar .sub-menu>li>a:hover,
            .sidebar .nav>li.nav-profile>a {
                color: #fff
            }

            .flat-black .sidebar .sub-menu>li>a,
            .flat-black .sidebar .sub-menu>li>a:before {
                color: #999
            }

            .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
            .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
            .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
            .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
            .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
            .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
                color: #000
            }

            .flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
            .flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
                background: #323232
            }

            .flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
            .flat-black .sidebar .nav>li.active>a,
            .flat-black .sidebar .nav>li.active>a:focus,
            .flat-black .sidebar .nav>li.active>a:hover,
            .flat-black .sidebar .nav>li.nav-profile,
            .flat-black .sidebar .sub-menu>li.has-sub>a:before,
            .flat-black .sidebar .sub-menu>li:before,
            .flat-black .sidebar .sub-menu>li>a:after {
                background: #2A2A2A
            }

            .flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
            .flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
                background: #3e3e3e
            }

            .flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
                background: rgba(42, 42, 42, .75)
            }

            .bg-white {
                background-color: #fff!important;
            }
            .p-10 {
                padding: 10px!important;
            }
            .media.media-xs .media-object {
                width: 32px;
            }
            .m-b-2 {
                margin-bottom: 2px!important;
            }
            .media>.media-left, .media>.pull-left {
                padding-right: 15px;
            }
            .media-body, .media-left, .media-right {
                display: table-cell;
                vertical-align: top;
            }
            select.form-control:not([size]):not([multiple]) {
                height: 34px;
            }
            .form-control.input-inline {
                display: inline;
                width: auto;
                padding: 0 7px;
            }
        </style>
    </head>

    <body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="content" class="content content-full-width">
                                <!-- begin profile -->
                                <div class="profile">
                                    <div class="profile-header">
                                        <!-- BEGIN profile-header-cover -->
                                        <div class="profile-header-cover"></div>
                                        <!-- END profile-header-cover -->
                                        <!-- BEGIN profile-header-content -->
                                        <div class="profile-header-content">
                                            <!-- BEGIN profile-header-img -->
                                            <div class="profile-header-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                            </div>
                                            <!-- END profile-header-img -->
                                            <!-- BEGIN profile-header-info -->
                                            <div class="profile-header-info">
                                                <h4 class="m-t-10 m-b-5">John Doe</h4>
                                                <p class="m-b-10">Web And Frontend Developer</p>
                                                <a href="#" class="btn btn-xs btn-success">Edit Profile</a>
                                            </div>
                                            <!-- END profile-header-info -->
                                        </div>
                                        <!-- END profile-header-content -->
                                        <!-- BEGIN profile-header-tab -->
                                        <ul class="profile-header-tab nav nav-tabs">
                                            <li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">POSTS</a></li>
                                            <li class="nav-item"><a href="#profile-about" class="nav-link active show" data-toggle="tab">ABOUT</a></li>
                                            <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                                            <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                                            <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                                        </ul>
                                        <!-- END profile-header-tab -->
                                    </div>
                                </div>
                                <!-- end profile -->
                                <!-- begin profile-content -->
                                <div class="profile-content">
                                    <!-- begin tab-content -->
                                    <div class="tab-content p-0">

                                        <!-- begin #profile-about tab -->
                                        <div class="tab-pane fade in active show" id="profile-about" style="margin-left: 190px;">
                                            <!-- begin table -->
                                            <div class="table-responsive" style="margin-left: 190px;">


                                                <!DOCTYPE html>
                                                <html lang="en">

                                                <head>
                                                    <meta charset="utf-8">
                                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                    <meta name="description" content="">
                                                    <meta name="author" content="Dashboard">
                                                    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
                                                    <title>Dashio - Bootstrap Admin Template</title>

                                                    <script>
                                                        function getdistrict(val) {
                                                            $.ajax({
                                                                type: "POST",
                                                                url: "get_district.php",
                                                                data:'state='+val,
                                                                success: function(data){
                                                                    $("#district-list").html(data);
                                                                }
                                                            });
                                                        }
                                                    </script>

                                                    <script type="application/javascript" language="javascript">

                                                        function onBtnClick(x){
                                                            if(x==1){
                                                                document.getElementById("txthide1").style.display='block';
                                                                document.getElementById("txthide2").style.display='block';
                                                                document.getElementById("txthide3").style.display='block';
                                                                document.getElementById("txthide4").style.display='block';
                                                                document.getElementById("txtshow1").style.display='none';
                                                                document.getElementById("txtshow2").style.display='none';
                                                                document.getElementById("txtshow3").style.display='none';

                                                            }
                                                            else{
                                                                document.getElementById("txthide").style.display='none';
                                                            }
                                                        }
                                                    </script>

                                                    <!-- Favicons -->
                                                    <link href="img/favicon.png" rel="icon">
                                                    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

                                                    <!-- Bootstrap core CSS -->
                                                    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                                    <!--external css-->
                                                    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
                                                    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
                                                    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
                                                    <!-- Custom styles for this template -->
                                                    <link href="css/style.css" rel="stylesheet">
                                                    <link href="css/style-responsive.css" rel="stylesheet">
                                                    <script src="lib/chart-master/Chart.js"></script>

                                                    <style rel="stylesheet" type="text/css">
                                                        .con {
                                                            color: black;
                                                        }
                                                    </style>
                                                    <!-- =======================================================
                                                      Template Name: Dashio
                                                      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
                                                      Author: TemplateMag.com
                                                      License: https://templatemag.com/license/
                                                    ======================================================= -->
                                                </head>

                                                <body>
                                                <section id="container">
                                                    <!-- **********************************************************************************************************************************************************
                                                        TOP BAR CONTENT & NOTIFICATIONS
                                                        *********************************************************************************************************************************************************** -->
                                                    <!--header start-->
                                                    <!-- <header class="header black-bg">

                                                       <!--<div class="sidebar-toggle-box">
                                                         <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                                                       </div>
                                                       <!--logo start-->
                                                    <!-- <a href="index.php" class="logo"><b>My<span>Lawyer</span></b></a>
                                                     <!--logo end-->
                                                    <!--  <div class="nav notify-row" id="top_menu">
                                                        <!--  notification start -->
                                                    <!--<ul class="nav top-menu">
                                                      <!-- settings start -->
                                                    <!--   <li class="dropdown">
                                                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                                                        <i class="fa fa-tasks"></i>
                                                        <span class="badge bg-theme">4</span>
                                                        </a>
                                                      <ul class="dropdown-menu extended tasks-bar">
                                                        <div class="notify-arrow notify-arrow-green"></div>
                                                        <li>
                                                          <p class="green">You have 4 pending tasks</p>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <div class="task-info">
                                                              <div class="desc">Dashio Admin Panel</div>
                                                              <div class="percent">40%</div>
                                                            </div>
                                                            <div class="progress progress-striped">
                                                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                <span class="sr-only">40% Complete (success)</span>
                                                              </div>
                                                            </div>
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <div class="task-info">
                                                              <div class="desc">Database Update</div>
                                                              <div class="percent">60%</div>
                                                            </div>
                                                            <div class="progress progress-striped">
                                                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                <span class="sr-only">60% Complete (warning)</span>
                                                              </div>
                                                            </div>
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <div class="task-info">
                                                              <div class="desc">Product Development</div>
                                                              <div class="percent">80%</div>
                                                            </div>
                                                            <div class="progress progress-striped">
                                                              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                                <span class="sr-only">80% Complete</span>
                                                              </div>
                                                            </div>
                                                          </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <div class="task-info">
                                                              <div class="desc">Payments Sent</div>
                                                              <div class="percent">70%</div>
                                                            </div>
                                                            <div class="progress progress-striped">
                                                              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                                <span class="sr-only">70% Complete (Important)</span>
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
                                                    <!--   <li id="header_inbox_bar" class="dropdown">
                                                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <span class="badge bg-theme">5</span>
                                                        </a>
                                                      <ul class="dropdown-menu extended inbox">
                                                        <div class="notify-arrow notify-arrow-green"></div>
                                                        <li>
                                                          <p class="green">You have 5 new messages</p>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                                            <span class="subject">
                                                            <span class="from">Zac Snider</span>
                                                            <span class="time">Just now</span>
                                                            </span>
                                                            <span class="message">
                                                            Hi mate, how is everything?
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
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
                                                          <a href="index.php#">
                                                            <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
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
                                                          <a href="index.php#">
                                                            <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                                            <span class="subject">
                                                            <span class="from">Dj Sherman</span>
                                                            <span class="time">4 hrs.</span>
                                                            </span>
                                                            <span class="message">
                                                            Please, answer asap.
                                                            </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">See all messages</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <!-- inbox dropdown end -->
                                                    <!-- notification dropdown start-->
                                                    <!--   <li id="header_notification_bar" class="dropdown">
                                                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                                                        <i class="fa fa-bell-o"></i>
                                                        <span class="badge bg-warning">7</span>
                                                        </a>
                                                      <ul class="dropdown-menu extended notification">
                                                        <div class="notify-arrow notify-arrow-yellow"></div>
                                                        <li>
                                                          <p class="yellow">You have 7 new notifications</p>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                            Server Overloaded.
                                                            <span class="small italic">4 mins.</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                                            Memory #2 Not Responding.
                                                            <span class="small italic">30 mins.</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                                            Disk Space Reached 85%.
                                                            <span class="small italic">2 hrs.</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">
                                                            <span class="label label-success"><i class="fa fa-plus"></i></span>
                                                            New User Registered.
                                                            <span class="small italic">3 hrs.</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                          <a href="index.php#">See all notifications</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <!-- notification dropdown end -->
                                                    </ul>
                                                    <!--  notification end -->
                                            </div>
                                            <!--   <div class="top-menu">
                                              <ul class="nav pull-right top-menu">
                                                <li><a class="logout" href="../signout.php">Logout</a></li>
                                              </ul>
                                            </div>
                                          </header>
                                          <!--header end-->
                                            <!-- **********************************************************************************************************************************************************
                                                MAIN SIDEBAR MENU
                                                *********************************************************************************************************************************************************** -->
                                            <!--sidebar start-->
                                            <aside>
                                                <!--<div id="sidebar" class="nav-collapse ">
                                                  <!-- sidebar menu start-->
                                                <!--  <ul class="sidebar-menu" id="nav-accordion">
                                                    <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                                                    <h5 class="centered"></h5>
                                                    <li class="mt">
                                                      <a href="index.php">
                                                        <i class="fa fa-dashboard"></i>
                                                        <span>Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li class="sub-menu">
                                                      <a class="active" href="javascript:;">
                                                        <i class="fa fa-cogs"></i>
                                                        <span>Profile</span>
                                                        </a>
                                                      <ul class="sub">
                                                        <li class="active"><a href="profile.php">Profile</a></li>
                                                        <li><a href="changepassword.php">Change Password</a></li>
                                                        <!--<li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="todo_list.html">Todo List</a></li>
                                                        <li><a href="dropzone.html">Dropzone File Upload</a></li>
                                                        <li><a href="inline_editor.html">Inline Editor</a></li>
                                                        <li><a href="file_upload.html">Multiple File Upload</a></li>-->
                                                </ul>
                                                </li>
                                                <!--  <li class="sub-menu">
                                                 <a href="javascript:;">
                                                   <i class="fa fa-desktop"></i>
                                                   <span>Cases</span>
                                                   </a>
                                                 <ul class="sub">
                                                   <li><a href="caserequest.php">Case Request</a></li>
                                                   <li><a href="opponent.php">Add Opponent</a></li>
                                                   <li><a href="document_upload.php">Upload Documents</a></li>
                                                 <!--  <li><a href="font_awesome.html">Font Awesome</a></li> -->
                                                </ul>
                                                </li>
                                                <!-- <li class="sub-menu">
                                                  <a href="javascript:;">
                                                    <i class="fa fa-book"></i>
                                                    <span>Extra Pages</span>
                                                    </a>
                                                  <ul class="sub">
                                                    <li><a href="blank.html">Blank Page</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="lock_screen.html">Lock Screen</a></li>
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="invoice.html">Invoice</a></li>
                                                    <li><a href="pricing_table.html">Pricing Table</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                    <li><a href="500.html">500 Error</a></li>
                                                  </ul>
                                                </li>
                                                <li class="sub-menu">
                                                  <a href="javascript:;">
                                                    <i class="fa fa-tasks"></i>
                                                    <span>Forms</span>
                                                    </a>
                                                  <ul class="sub">
                                                    <li><a href="form_component.html">Form Components</a></li>
                                                    <li><a href="advanced_form_components.html">Advanced Components</a></li>
                                                    <li><a href="form_validation.html">Form Validation</a></li>
                                                    <li><a href="contactform.html">Contact Form</a></li>
                                                  </ul>
                                                </li>
                                                <li class="sub-menu">
                                                  <a href="javascript:;">
                                                    <i class="fa fa-th"></i>
                                                    <span>Data Tables</span>
                                                    </a>
                                                  <ul class="sub">
                                                    <li><a href="basic_table.html">Basic Table</a></li>
                                                    <li><a href="responsive_table.html">Responsive Table</a></li>
                                                    <li><a href="advanced_table.html">Advanced Table</a></li>
                                                  </ul>
                                                </li>
                                                <li>
                                                  <a href="inbox.html">
                                                    <i class="fa fa-envelope"></i>
                                                    <span>Mail </span>
                                                    <span class="label label-theme pull-right mail-info">2</span>
                                                    </a>
                                                </li>
                                                <li class="sub-menu">
                                                  <a href="javascript:;">
                                                    <i class=" fa fa-bar-chart-o"></i>
                                                    <span>Charts</span>
                                                    </a>
                                                  <ul class="sub">
                                                    <li><a href="morris.html">Morris</a></li>
                                                    <li><a href="chartjs.html">Chartjs</a></li>
                                                    <li><a href="flot_chart.html">Flot Charts</a></li>
                                                    <li><a href="xchart.html">xChart</a></li>
                                                  </ul>
                                                </li>
                                                <li class="sub-menu">
                                                  <a href="javascript:;">
                                                    <i class="fa fa-comments-o"></i>
                                                    <span>Chat Room</span>
                                                    </a>
                                                  <ul class="sub">
                                                    <li><a href="lobby.html">Lobby</a></li>
                                                    <li><a href="chat_room.html"> Chat Room</a></li>
                                                  </ul>
                                                </li>
                                                <li>
                                                  <a href="google_maps.html">
                                                    <i class="fa fa-map-marker"></i>
                                                    <span>Google Maps </span>
                                                    </a>
                                                </li>-->
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
                                                        <!--CUSTOM CHART START -->
                                                        <div class="row mt">
                                                            <div class="col-lg-12">
                                                                <div class="form-panel con">
                                                                    <h4 class="mb"><i class="fa fa-angle-right"></i> PROFILE </h4>
                                                                    <button class="btn btn-primary btn-xs" style="margin-left:750px; margin-top:-80px;" onclick="onBtnClick('1')"><i class="fa fa-pencil"></i></button>
                                                                    <div class="form-horizontal style-form" id="myform" method="post" action="profile.php" enctype="multipart/form-data">

                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $n; ?></label>
                                                                            <label class="col-sm-1 col-sm-1 control-label"></label>
                                                                            <label class="col-sm-2 col-sm-2 control-label">Guardian name</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $add; ?></label>

                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $gen; ?></label>
                                                                            <label class="col-sm-1 col-sm-1 control-label"></label>
                                                                            <label class="col-sm-2 col-sm-2 control-label">dob</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $dob; ?></label>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label">Mobile Number</label>
                                                                            <div id="txtshow1"><label class="col-sm-3 col-sm-3 control-label"><?php echo $ph; ?></label></div>
                                                                            <div class="col-sm-10" id="txthide1" style="display:none;">
                                                                                <input type="text" name="phone" value="<?php echo $ph; ?>" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label">State</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $state; ?></label>
                                                                            <label class="col-sm-1 col-sm-1 control-label"></label>
                                                                            <label class="col-sm-2 col-sm-2 control-label">District</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $dist; ?></label>
                                                                            <label class="col-sm-1 col-sm-1 control-label"></label>

                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label">Pincode</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $pin; ?></label>
                                                                            <label class="col-sm-1 col-sm-1 control-label"></label>
                                                                            <label class="col-sm-2 col-sm-2 control-label">city</label>
                                                                            <label class="col-sm-3 col-sm-3 control-label"><?php echo $gen; ?></label>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label class="col-sm-2 col-sm-2 control-label"></label>
                                                                            <div class="col-sm-10">
                                                                                <input type="hidden" class="form-control" name="lid" id="lid" placeholder="" value="<?php echo $l; ?>"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group" id="txthide4" style="display:none;">
                                                                        <div class="col-sm-10">
                                                                            <button style="margin-left:350px;" type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                                                                        </div>
                                                                    </div>


                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- col-lg-12-->
                                                        </div>

                                                        <!--custom chart end-->
                                                        <!-- /row -->
                                                    </div>
                                                    <!-- /col-lg-9 END SECTION MIDDLE -->
                                                    <!-- **********************************************************************************************************************************************************
                                                        RIGHT SIDEBAR CONTENT
                                                        *********************************************************************************************************************************************************** -->
                                                    <!-- /col-lg-3 -->
                                                </div>
                                                <!-- /row -->
                                            </section>
                                        </section>
                                        <!--main content end-->
                                        <!--footer start-->
                                        <footer class="site-footer">
                                            <div class="text-center">
                                                <p>
                                                    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                                                </p>
                                                <div class="credits">
                                                    <!--
                                                      You are NOT allowed to delete the credit link to TemplateMag with free version.
                                                      You can delete the credit link only if you bought the pro version.
                                                      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                                                      Licensing information: https://templatemag.com/license/
                                                    -->
                                                    Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
                                                </div>
                                                <a href="index.php#" class="go-top">
                                                    <i class="fa fa-angle-up"></i>
                                                </a>
                                            </div>
                                        </footer>
                                        <!--footer end-->
                                        </section>
                                        <!-- js placed at the end of the document so the pages load faster -->
                                        <script src="lib/jquery/jquery.min.js"></script>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                        <script src="register.js"></script>

                                        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
                                        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
                                        <script src="lib/jquery.scrollTo.min.js"></script>
                                        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
                                        <script src="lib/jquery.sparkline.js"></script>
                                        <!--common script for all pages-->
                                        <script src="lib/common-scripts.js"></script>
                                        <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
                                        <script type="text/javascript" src="lib/gritter-conf.js"></script>
                                        <!--script for this page-->
                                        <script src="lib/sparkline-chart.js"></script>
                                        <script src="lib/zabuto_calendar.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                var unique_id = $.gritter.add({
                                                    // (string | mandatory) the heading of the notification
                                                    title: 'Welcome to Dashio!',
                                                    // (string | mandatory) the text inside the notification
                                                    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
                                                    // (string | optional) the image to display on the left
                                                    image: 'img/ui-sam.jpg',
                                                    // (bool | optional) if you want it to fade out on its own or just sit there
                                                    sticky: false,
                                                    // (int | optional) the time you want it to be alive for before fading out
                                                    time: 8000,
                                                    // (string | optional) the class name you want to apply to that specific message
                                                    class_name: 'my-sticky-class'
                                                });

                                                return false;
                                            });
                                        </script>
                                        <!--<script type="application/javascript">
                                          $(document).ready(function() {
                                            $("#date-popover").popover({
                                              html: true,
                                              trigger: "manual"
                                            });
                                            $("#date-popover").hide();
                                            $("#date-popover").click(function(e) {
                                              $(this).hide();
                                            });

                                            $("#my-calendar").zabuto_calendar({
                                              action: function() {
                                                return myDateFunction(this.id, false);
                                              },
                                              action_nav: function() {
                                                return myNavFunction(this.id);
                                              },
                                              ajax: {
                                                url: "show_data.php?action=1",
                                                modal: true
                                              },
                                              legend: [{
                                                  type: "text",
                                                  label: "Special event",
                                                  badge: "00"
                                                },
                                                {
                                                  type: "block",
                                                  label: "Regular event",
                                                }
                                              ]
                                            });
                                          });

                                          function myNavFunction(id) {
                                            $("#date-popover").hide();
                                            var nav = $("#" + id).data("navigation");
                                            var to = $("#" + id).data("to");
                                            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                                          }
                                        </script>-->

                                        <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>

                                        <script type='text/Javascript'>
                                            function swtalert(swlt)
                                            {
                                                if(swlt==1)
                                                {
                                                    swal({  type: 'success',
                                                            title: 'Profile Updated',
                                                        },
                                                        function()
                                                        {
                                                            window.location="editable.php";
                                                        });
                                                }
                                                else
                                                {
                                                    swal({  type: 'error',
                                                            title: 'Oops!!!',
                                                            text: 'Something went wrong'},
                                                        function()
                                                        {
                                                            window.location="editable.php";
                                                        });
                                                }
                                            }
                                        </script>
    </body>

    </html>




    </div>
    <!-- end table -->
    </div>
    <!-- end #profile-about tab -->
    </div>
    <!-- end tab-content -->
    </div>
    <!-- end profile-content -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>
    <?php
    // $lin=$_GET['id'];

    if(isset($_POST['submit']))
    {

        $phn=$_POST['phone'];
        $lin=$_POST['lid'];

        $sqll="UPDATE studtbl SET phone='$phn' where loginid='$lin' ";
        $quer=mysqli_query($con,$sqll);
        if($quer)
        {
            $swlt=1;
            echo "<script>swtalert($swlt);</script>";
        }
        else {
            $swlt=0;

            echo "<script>alert($swlt);</script>";
        }
    }
    ?>
    <?php

}
else
{
    echo "<script>window.location='/lawfirm/login/index.php';</script>";
}

?>
