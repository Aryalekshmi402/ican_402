<?php
session_start();
include('../config.php');

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
    $sq = "Select * from studtbl where loginid='$l'";
    $res = mysqli_query($con,$sq);
    $row = mysqli_fetch_assoc($res);
    $n = ucwords($row['fname']);
    $add = ucwords($row['gname']);
    $gen = ucwords($row['ge']);
    $da = strtotime($row['dob']);
    $dob = date('d/m/Y', $da);
    $ph = $row['mob'];
    $jo = ucwords($row['course']);
    $sta = $row['state'];
    $di = $row['district'];
    $pin = ucwords($row['pin']);
    $city = ucwords($row['city']);
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

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>icanstaff | Dashboard</title>
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

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/js/vue.js"></script>
        <script src="/js/axios.min.js"></script>
        <script src="/js/sweetalert.js"></script>
        <style rel="stylesheet" type="text/css">
            .con {
                color: black;
            }
        </style>
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <section class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b></b></span>
                <!-- logo for regular state and mobile devices -->

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
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
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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
                        <?php include('notification.php'); ?>
                        <li class="dropdown notifications-menu">
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
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
                            <a href="/pages/forms/general.html" class="dropdown-toggle" data-toggle="dropdown">

                                <img src="logo.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $fname;?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="logo.jpg" class="img-circle" alt="User Image">


                                    <p>

                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="pages/forms/general.php">Change password</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
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
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('menu.php');?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Edit Your Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href="studenthome.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">your profile</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content" id="attendence">

                <!-- Default box -->
                <div class="box">
                    <form action="" @submit.prevent="save">
                        <br>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-9 main-chart">
                                    <!--CUSTOM CHART START -->
                                    <div class="row mt">
                                        <div class="col-lg-12">
                                            <div class="form-panel con">
                                                <h4 class="mb"><i class="fa fa-angle-right"></i> PROFILE </h4>
                                                <button class="btn btn-primary btn-xs" style="margin-left:750px; margin-top:-80px;" onclick="onBtnClick('1')"><i class="fa fa-pencil"></i></button>
                                                <form class="form-horizontal style-form" id="myform" method="post" action="prof.php" enctype="multipart/form-data">


                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $n; ?></label>
                                                        <label class="col-sm-1 col-sm-1 control-label"></label>
                                                        <label class="col-sm-2 col-sm-2 control-label">Email Id</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $em; ?></label>

                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $gen; ?></label>
                                                        <label class="col-sm-1 col-sm-1 control-label"></label>
                                                        <label class="col-sm-2 col-sm-2 control-label">DOB</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $dob; ?></label>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">State</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $state; ?></label>
                                                        <label class="col-sm-1 col-sm-1 control-label"></label>
                                                        <label class="col-sm-2 col-sm-2 control-label">District</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $dist; ?></label>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">City</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $city; ?></label>
                                                        <label class="col-sm-1 col-sm-1 control-label"></label>
                                                        <label class="col-sm-2 col-sm-2 control-label">Pincode</label>
                                                        <label class="col-sm-3 col-sm-3 control-label"><?php echo $pin; ?></label>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">Mobile Number</label>
                                                        <div id="txtshow1"><label class="col-sm-3 col-sm-3 control-label"><?php echo $ph; ?></label></div>
                                                        <div class="col-sm-10" id="txthide1" style="display:none;">
                                                            <input type="text" style="width: 280px;" name="phone" value="<?php echo $ph; ?>" class="form-control">
                                                        </div>
                                                        <label class="col-sm-1 col-sm-1 control-label"></label>
                                                    </div>

                                                    <div class="form-group" id="txthide2" style="display:none;">
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-10" id="txthide3" style="display:none;">
                                                        </div>
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
    </div>
    </div
    </div>



                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <script>
            new Vue({
                el: '#attendence',
                data: {
                    sessions: [],
                    form: {
                        date: '',
                    },
                    reports: [],
                    sorted_report: {},
                },
                methods: {
                    daily_duration(items) {
                        let duration = 0;
                        items.forEach(item => {
                            duration += item.duration;
                        })
                        return duration;
                    },
                    get_attendance_report() {
                        axios.get('/staff/attendance_process.php', {
                            params: {
                                type: 'INDIVIDUAL_REPORT',
                            }
                        })
                            .then(({data}) => {
                                this.reports = data.reports;
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    }

                },

                watch: {
                    reports() {
                        this.sorted_report= {};
                        this.reports.forEach(report => {
                            if (this.sorted_report[report.date] === undefined) {
                                this.sorted_report[report.date] = {}
                            }
                            if (this.sorted_report[report.date][report.session_number] === undefined) {
                                this.sorted_report[report.date][report.session_number] = [];
                            }
                            this.sorted_report[report.date][report.session_number].push(report);
                        })

                    }
                }
            })
        </script>
        <style>
            .box {
                border: 2px solid #ccc;
                padding: 8px;
                height: 800px;
                overflow: auto;
                margin-bottom: 15px;
            }
        </style>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2019-2020 <a href="#">iCan</a>.</strong> All rights
            reserved.
        </footer>



        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="bower_components/raphael/raphael.min.js"></script>
        <script src="bower_components/morris.js/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
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
                        window.location="prof.php";
                    });
            }
            else
            {
                swal({  type: 'error',
                        title: 'Oops!!!',
                        text: 'Something went wrong'},
                    function()
                    {
                        window.location="prof.php";
                    });
            }
        }
    </script>
    </body>
    </html>
    <?php

    if(isset($_POST['submit']))
    {

        $phn=$_POST['phone'];
        $lin=$_POST['lid'];
           //echo $lin;
        $sqll="UPDATE studtbl SET mob='$phn' where loginid='$lin' ";
        $quer=mysqli_query($con,$sqll);
        echo mysqli_error($con);
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
    echo "<script>window.location=('/ican/index.php')</script>";
}

?>
