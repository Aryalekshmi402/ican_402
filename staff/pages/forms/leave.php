<?php
session_start();
include('../../../config.php');
$l = $_SESSION['loginid'];
if ($l) {

    $res = mysqli_query($con, "select * from stafftbl where loginid=$l ");

    $result = mysqli_query($con, "select * from tlb_staff where loginid=$l ");


    if (mysqli_num_rows($res) != 0) {
        $row = mysqli_fetch_assoc($res);

        $fname = $row['fname'];
    } else if (mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_assoc($result);

        $fname = $row['name'];

    } else {
        echo "<script>alert('error');</script>";
    }
    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iCan</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../../plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet"
              href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <script src="https://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
              rel="stylesheet"/>


        <script type="application/javascript" language="javascript">
            function sel() {
                var a;
                a = $('#syllabus option:selected').attr('value');
                var cls;
                cls = $('#class option:selected').attr('value');
                var ex;
                ex = $('#exam').val();
                //alert(ex);
                $.ajax({
                    url: "/ican/staff/pages/forms/load.php",
                    type: "POST",
                    data: {syl: a, cls: cls, exam: ex},
                    success: function (data) {
                        $("#result").html(data);
                    }
                });
            }

        </script>

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <style>
            .error{
                color:#e36969;
            }
        </style>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- <span class="logo-mini"><b>A</b>LT</span>
             <!-- logo for regular state and mobile devices -->
            <!-- <span class="logo-lg"><b>Admin</b>LTE</span>
           </a>
           <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->
                        <?php include('../../notification.php'); ?>
                        <!-- Tasks: style can be found in dropdown.less -->
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <img src="logo.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $fname; ?></span>
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
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <?php include('../../menu.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Apply Leave
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../staffhome.php"><i class="fa fa-dashboard"></i> Home</a></li>

                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default" style="height:520px;">
                    <div class="box-header with-border">


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6" style="margin-right:200px;margin-left:220px; ">
                                <form action="leave.php" method="POST" style="color:blue;" name="fm" id="fm">

                                    <!-- /.form-group -->

                                    <div class="form-group" style="margin-left:100px; width:220px;">
                                        <br>
                                        <br><br>
                                        <label for="inline3mail" class="block form-control-label">Leave Date</label><br>
                                        <input type="text" class="form-control" name="ldate"
                                               style="margin-left:100px; margin-top:-30px;" id="datepicker" required>
                                    </div>

                                    <div class="form-group" style="margin-left:100px; width:220px;">
                                        <br>
                                        <br><br>
                                        <label for="inline3pwd" class="block form-control-label" id="sess">Session</label>
                                        <select class="form-control" id="exampleSelect1"  id="sess"
                                                style="margin-left:100px; margin-top:-30px;" required>
                                            <option value="choose">choose</option>
                                            <option value="AN">AN</option>
                                            <option value="FN">FN</option>
                                            <option value="Full Day">Full Day</option>
                                        </select>

                                    </div>

                                    <div class="form-group" style="margin-left:100px; width:220px;">
                                        <br>
                                        <br><br>

                                        <label for="inline3pwd" class="block form-control-label">Reason</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="4" cols="40"
                                                  name="res" style="margin-left:100px; margin-top:-30px; "
                                                  required></textarea>

                                    </div>


                                    <div class="form-group" style="margin-left:200px; width:420px;">

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="form-check p-t-35">
                                            <button type="submit" class="btn btn-success waves-effect waves-light"
                                                    name="submit" style="width:200px" ;>Apply
                                            </button>
                                        </div>


                                    </div>


                                </form>

                            </div>


                            <div class="row mt">
                                <div class="col-md-12">
                                    <div class="content-panel">
                                        <table id="result" class="table table-striped table-advance table-hover"
                                               border='0'>
                                            <!--<h4><i class="fa fa-angle-right"></i>Staff</h4>-->


                                        </table>
                                    </div>
                                    <!-- /content-panel -->
                                </div>
                                <!-- /col-md-12 -->
                            </div>


                            <!-- /.form-group -->
                        </div>
                        </form>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <!--<div class="box-footer">
                  Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                  the plugin.
                </div>
              </div>
              <!-- /.box -->

                <!--<div class="row">
                  <!--<div class="col-md-6">

                    <!--<div class="box box-danger">
                      <div class="box-header">
                        <h3 class="box-title">Input masks</h3>
                      </div>
                      <div class="box-body">
                        <!-- Date dd/mm/yyyy -->
                <!-- <div class="form-group">
                   <label>Date masks:</label>

                   <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                   </div>
                   <!-- /.input group -->
        </div>
        <!-- /.form group -->

        <!-- Date mm/dd/yyyy -->
        <!-- <div class="form-group">
           <div class="input-group">
             <div class="input-group-addon">
               <i class="fa fa-calendar"></i>
             </div>
             <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
           </div>
           <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- phone mask -->
    <!--<div class="form-group">
      <label>US phone mask:</label>

      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-phone"></i>
        </div>
        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->

    <!-- phone mask -->
    <!-- <div class="form-group">
       <label>Intl US phone mask:</label>

       <div class="input-group">
         <div class="input-group-addon">
           <i class="fa fa-phone"></i>
         </div>
         <input type="text" class="form-control"
                data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
       </div>
       <!-- /.input group -->
    </div>

    </div>
    <!-- /.form group -->

    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->


    <input type="text" class="form-control">

    <div class="input-group-addon">
        <i></i>
    </div>
    </div>
    <!-- /.input group -->
    </div>

    </div>

    </div>

    </div>


    </div>
    <!-- /.box-body -->
    </div>


    <!-- radio -->
    <!--  <div class="form-group">
        <label>
          <input type="radio" name="r1" class="minimal" checked>
        </label>
        <label>
          <input type="radio" name="r1" class="minimal">
        </label>
        <label>
          <input type="radio" name="r1" class="minimal" disabled>
          Minimal skin radio
        </label>
      </div>

      <!-- Minimal red style -->

    <!-- checkbox -->
    <!-- <div class="form-group">
       <label>
         <input type="checkbox" class="minimal-red" checked>
       </label>
       <label>
         <input type="checkbox" class="minimal-red">
       </label>
       <label>
         <input type="checkbox" class="minimal-red" disabled>
         Minimal red skin checkbox
       </label>
     </div>




</div>
<!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2019 <a href="https://adminlte.io">iCan</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!--<aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
    <!-- <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
       <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
       <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
     </ul>
     <!-- Tab panes -->
    <!-- <div class="tab-content">
       <!-- Home tab content -->
    <!--<div class="tab-pane" id="control-sidebar-home-tab">
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
      </ul> -->
    <!-- /.control-sidebar-menu -->

    <!-- <h3 class="control-sidebar-heading">Tasks Progress</h3>
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
    <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <!--<div class="tab-pane" id="control-sidebar-settings-tab">
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

    <!-- <div class="form-group">
       <label class="control-sidebar-subheading">
         Allow mail redirect
         <input type="checkbox" class="pull-right" checked>
       </label>

       <p>
         Other sets of options are available
       </p>
     </div>
     <!-- /.form-group -->

    <!-- <div class="form-group">
       <label class="control-sidebar-subheading">
         Expose author name in posts
         <input type="checkbox" class="pull-right" checked>
       </label>

       <p>
         Allow the user to show his name in blog posts
       </p>
     </div>
     <!-- /.form-group -->

    <!--<h3 class="control-sidebar-heading">Chat Settings</h3>

    <div class="form-group">
      <label class="control-sidebar-subheading">
        Show me as online
        <input type="checkbox" class="pull-right" checked>
      </label>
    </div>
    <!-- /.form-group -->

    <!--<div class="form-group">
      <label class="control-sidebar-subheading">
        Turn off notifications
        <input type="checkbox" class="pull-right">
      </label>
    </div>
    <!-- /.form-group -->

    <!-- <div class="form-group">
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
    <!--<div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="leave.js"></script>
    <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="../../bower_components/moment/min/moment.min.js"></script>
    <script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
    <script>
        $('#datepicker').datepicker({
            multidate: true
        });
        // YUI().use(
        //     'aui-datepicker',
        //     function(Y) {
        //         new Y.DatePicker(
        //             {
        //                 trigger: '#date',
        //                 mask: '%d/%m/%Y',
        //                 calendar: {
        //                     selectionMode: 'multiple'
        //                 },
        //                 popover: {
        //                     zIndex: 1
        //                 },
        //                 panes: 2
        //             }
        //         );
        //     }
        // );
    </script>
    <script type='text/Javascript'>
        function swtalert(swlt) {
            if (swlt == 1) {
                swal({
                        type: 'success',
                        title: 'Leave Applied'
                    },
                    function () {
                        window.location = "leave.php";
                    });
            } else {
                swal({
                        type: 'error',
                        title: 'Oops!!!',
                        text: 'Leave not Applied'
                    },
                    function () {
                        window.location = "leave.php";
                    });
            }
        }
    </script>
    </body>
    </html>

    <?php


    if (isset($_POST['submit'])) {
        $date_string = $_POST['ldate'];
        $c = $_POST['sess'];
        $d = $_POST['res'];


        $s = mysqli_query($con, "select staffid from tlb_staff where loginid='$l'");
        $r = mysqli_fetch_array($s, MYSQLI_ASSOC);
        $lid = $r['staffid'];
        $sql = "INSERT INTO `tbl_leave`(staffid,ldate,session,reason,status) VALUES ('$lid','$date_string','$c','$d',0)";

        $ch = mysqli_query($con, $sql);

        if ($ch) {
            ?>
            <?php
            $swlt = 1;
            echo "<script> swtalert($swlt);
          		 </script>";

        } else {
            echo "error :" . $sql . "<br>" . mysqli_error($con);
        }
    }

    mysqli_close($con);

    ?>


    <?php
} else {
    echo "<script>window.location=('/ican/index.php')</script>";
}

?>