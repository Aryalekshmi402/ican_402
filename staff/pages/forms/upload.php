<?php
include('../../../config.php');
$l = $_SESSION['loginid'];
if ($l) {

    $res = mysqli_query($con, "select * from stafftbl where loginid=$l ");

    $result = mysqli_query($con, "select * from tlb_staff where loginid=$l ");


    if (mysqli_num_rows($res) != 0) {
        $row = mysqli_fetch_assoc($res);
        $t = $row['subject_id'];
        $a = "select subject_name from tbl_subject_master where subject_id=$t";
        $s = mysqli_query($con, $a);
        $rows = mysqli_fetch_array($s);
        $fname = $row['fname'];
        $staffid = $row['staffid'];
    } else if (mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_assoc($result);
        $t = $row['subject_id'];
        $a = "select subject_name from tbl_subject_master where subject_id=$t";
        $s = mysqli_query($con, $a);
        $rows = mysqli_fetch_array($s);

        $fname = $row['name'];
        $staffid = $row['staffid'];

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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

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
        <script type="text/javascript">
            function add_row() {
                $rowno = $("#employee_table tr").length;
                $rowno = $rowno + 1;
                $("#employee_table tr:last").after("<tr id='row" + $rowno + "'><td><input type='text' name='docname[]' class='form-control' placeholder='Document Title'></td><td><input type='file' name='file[]' class='form-control' placeholder='Choose documents '></td><td><input type='button' class='btn btn-primary' value='DELETE' onclick=delete_row('row" + $rowno + "')></td></tr>");
            }

            function delete_row(rowno) {
                $('#' + rowno).remove();
            }
        </script>

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <?php include('../../notification.php'); ?>

                        <!-- Tasks: style can be found in dropdown.less -->
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
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#"></a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#"></a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#"></a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
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
                    Upload Materials
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../staffhome.php"><i class="fa fa-dashboard"></i> Home</a></li>

                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default" style="height:800px;">
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
                            <div class="col-md-6" style="margin-right:200px;margin-left:220px;">
                                <br><br>
                                <br>
                                <form class="form-horizontal style-form" method="post" id="pswform" action="upload.php"
                                      enctype="multipart/form-data">
                                    <!-- /.form-group -->
                                    <div class="form-group" style="margin-right: 190px;margin-left: 2px;">
                                        <label>Subject</label>
                                       <input type='text' readonly  style="width: 100%; margin-top:-20px;margin-left: 130px;" class='form-control' value="<?php echo $rows['subject_name'];?>"/>
                                    </div>


                                    <div class="form-group" style="margin-right: 190px;margin-left: 2px;">
                                        <label>Syllabus</label>
                                        <select class="form-control select2" name="syllabus" id="syllabus"
                                                style="width: 100%; margin-top:-20px;margin-left: 130px;">
                                            <option value="place" selected>Syllabus</option>

                                            <?php

                                            $result = mysqli_query($con, "select * from syllabustbl");
                                            while ($row = mysqli_fetch_array($result)) {
                                                $t = $row['Name'];
                                                ?>
                                                <option value="<?php echo $row['syid']; ?>"> <?php echo $t; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="form-group" style="margin-left:5px;margin-top: -73px;width:300px; ">
                                        <label>Class</label>
                                        <select class="form-control select2" name="class" id="class"
                                                style="width: 320px; margin-left:130px;margin-top:-20px;"
                                                onChange="sel()">
                                            <option value="place" selected>Choose Class</option>

                                            <?php

                                            $result = mysqli_query($con, "select * from tbl_class");
                                            while ($row = mysqli_fetch_array($result)) {
                                                $t = $row['classname'];
                                                ?>
                                                <option value="<?php echo $row['classid']; ?>"> <?php echo $t; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <br>
                                    <div class="form-group" style="margin-left: 13.5px;">
                                        <div>
                                            <table id="employee_table" align="center" style="margin-left: 120px;">
                                                <tr id="row1">
                                                    <td><input type="text" name="docname[]" class="form-control"
                                                               style="width: 240px; " placeholder="Document Title"></td>
                                                    <td><input type="file" name="file[]" class="form-control"
                                                               style="width: 240px;" placeholder="Choose documents "
                                                               multiple></td>
                                                    <td><input type="button" class="btn btn-primary"
                                                               onclick="add_row();" value="ADD ROW"></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" name="lid" id="lid" placeholder=""
                                                   value="<?php echo $l; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control" name="st" id="st" placeholder=""
                                                   value="<?php echo $staffid; ?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <button style="margin-left:350px;" type="submit" value="submit"
                                                    name="submit" class="btn btn-primary">Submit
                                            </button>
                                        </div>
                                    </div>


                                </form>

                            </div>

                            <!-- /.form-group -->


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
                      <div class="col-md-6">

                        <div class="box box-danger">
                          <div class="box-header">
                            <h3 class="box-title">Input masks</h3>
                          </div>
                          <div class="box-body">
                             Date dd/mm/yyyy -->
                    <!-- <div class="form-group">
                       <label>Date masks:</label>

                       <div class="input-group">
                         <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                         </div>
                         <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                       </div>
                        /.input group -->
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
                    /.input group -->
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
          /.input group -->
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

    <!-- /.box -->


    <!-- /.box-body -->


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

        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {format: 'MM/DD/YYYY hh:mm A'}
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
        })
    </script>
    <script type='text/Javascript'>
        function swtalert(swlt) {
            if (swlt == 1) {
                swal({
                        type: 'success',
                        title: 'documents uploaded'
                    },
                    function () {
                        window.location = "upload.php";
                    });
            } else {
                swal({
                        type: 'error',
                        title: 'Oops!!!',
                        text: 'documents not Applied'
                    },
                    function () {
                        window.location = "upload.php";
                    });
            }
        }
    </script>
    </body>
    </html>

    <?php
    // $lin=$_GET['id'];

    if (isset($_POST['submit'])) {

        $countfiles = count($_FILES['file']['name']);
        $syllabus = $_POST['syllabus'];
        $class = $_POST['class'];
        $docname = $_POST['docname'];
        $loginid = $_POST['lid'];
        $staffid = $_POST['st'];
       // $sub = $_POST['s'];
        $sub_q = "select * from tlb_staff where staffid=$staffid";
        //echo $sub_q;
        $sub_r = mysqli_query($con, $sub_q);
        $sub_r = mysqli_fetch_array($sub_r);
        $sub = $sub_r['subject_id'];
       // echo $sub;
        // echo mysqli_error($con);
        // echo "<script>alert($countfiles);</script>";

        for ($i = 0; $i < $countfiles; $i++) {
            $filename = $_FILES['file']['name'][$i];

            if ($filename != "") {
                if ($filename == '') {
                    continue;
                } else {
                    move_uploaded_file($_FILES['file']['tmp_name'][$i], 'materials/' . $filename);

                    $p = mysqli_query($con, "insert into tlb_material (syid,classid,loginid,staffid,subject_id,docname,docs)values('$syllabus','$class',' $loginid',' $staffid','$sub','$docname[$i]','$filename')");
                    echo mysqli_error($con);
                    if ($p) {
                        $swlt = 1;
                        echo "<script> swtalert($swlt);
                     </script>";
                    }
                }

            }
        }
    }
    ?>
    <?php
} else {
    echo "<script>window.location=('/ican/index.php')</script>";
}

?>