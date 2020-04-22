<?php
session_start(); 
include('../../../config.php');
$l=$_SESSION['loginid'];

if($l)
{
	
$res=mysqli_query($con,"select * from stafftbl where loginid=$l ");

$result=mysqli_query($con,"select * from tlb_staff where loginid=$l ");


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




<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
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
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
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
        var total_mark=$('#total_mark').val();
        if(total_mark==0){
            alert('Please enter the total mark..!');
            $('#btnmark').hide();
        }else{
      //alert(ex);
          $.ajax({
            url: "load.php",
            type: "POST",
            data: { syl:a, cls:cls, exam:ex ,total_mark:total_mark},
            success: function(data){
              $("#result").html(data);
              $('#btnmark').show();
            }
          });
        }
          // document.getElementById("btnmark").style.display='block';
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
          <li class="dropdown messages-menu">


          </li>
          <!-- Notifications: style can be found in dropdown.less -->
            <?php include('../../notification.php');?>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            </a>

          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="logo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $fname;?></span>
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
 <?php include('../../menu.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Marks
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../staffhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default" style="height:1500px;">
        <div class="box-header with-border" >
         

         
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>

            <?php
            $result11=mysqli_query($con,"select * from tlb_staff where loginid='$l'");
            $sub_de=mysqli_fetch_array($result11);
            $sub_id=$sub_de['subject_id'];
            $result2=mysqli_query($con,"select * from tbl_subject_master where subject_id='$sub_id'");
            $sub_deta=mysqli_fetch_array($result2)
            ?>
            <!-- /.col -->
            <div class="col-md-12">
              <form id="form1" method="POST">
              <!-- /.form-group -->
          <div class="row">
              <div class="form-group col-md-2" >
               <label>Subject </label><br>
              <input type="text" required value="<?php echo $sub_deta['subject_name']; ?>" readonly class="form-control select2" id="exam" name="sub" placeholder="Enter subject name"/>
              </div>

              <div class="form-group col-md-2" >
               <label>Name of Exam</label><br>
              <input type="text" class="form-control select2" required id="exam" name="exam" placeholder="Enter name of exam"/>
              </div>
              <div class="form-group col-md-2" >
               <label>Total Mark</label><br>
                <input type="number" class="form-control select2" value="0" max="100" required id="total_mark" name="total_mark" placeholder="Enter Total Mark" onChange="sel()"/>
              </div>
              <div class="form-group col-md-3">
               <label>Syllabus</label>
                <select class="form-control select2" required name="syllabus" id="syllabus"  onChange="sel()">
                  <option value="" selected>Syllabus</option>
							
                           <?php 
                           $result=mysqli_query($con,"select * from syllabustbl");
                           while($row=mysqli_fetch_array($result)){
								              $t=$row['Name'];
                        ?>
                      <option value="<?php echo $row['syid'];?>"> <?php  echo $t; ?></option>
                        <?php    
                            }
                        ?>     
                </select>
              </div>
              <div class="form-group col-md-3">
               <label>Class</label>
                <select class="form-control select2" required name="class" id="class"  onChange="sel()">
                  <option value="" selected>Choose Class</option>
							
                           <?php 
						   
                           $result=mysqli_query($con,"select * from tbl_class");
                            while($row=mysqli_fetch_array($result)){
							              	$t=$row['classname'];
                        ?>
                      <option value="<?php echo $row['classid'];?>"> <?php  echo $t; ?></option>
                        <?php    
                            }
                        ?>
                </select>
                </div>
                <br>
                <br>

                <div class="row mt">
                  <div class="col-md-12">
                    <div class="content-panel">
                    <div id="result" class="col-md-12 "></div>
                    </div>
                  </div>
                </div>

                <center>
        <div class="form-group"  name="btnmark" style="margin-left:120px; ">
                    <button id="btnmark" type="submit" class="btn btn-success" name="submit">ADD MARKS</button>
                </div>
        </center>
              </form>

              </div>
              <br>
              
                   
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
<script>
  
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
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
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
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

</body>
</html>

<?php

  if(isset($_POST['submit']))
  {  
    $sub=$_POST['sub'];
    $exam=$_POST['exam'];
    $syllabus=$_POST['syllabus'];
    $class=$_POST['class'];
    $total_mark=$_POST['total_mark'];
    $teach_id=$l;
    $row_count= $_POST['row_count'];
      for($i=1;$i<=$row_count;$i++){
          $student_id= $_POST['student_id_'.$i];
          $mark= $_POST['mark_'.$i];
          $p= mysqli_query($con,"insert into student_marks (exam_name,student_id,syllabus_id,class_id,teacher_id,mark,subject,total_mark)values('$exam','$student_id','$syllabus',' $class','$teach_id','$mark','$sub','$total_mark')");
      }
      ?>
      <script>
      swal({  type: 'success',
                            title: 'Good',
                            text: 'Marks Saved !'},
                            function()
                            {
                              window.location="mark.php";
                            });
                            </script>
      <?php
  }


?>

<?php
}
else
{
	echo "<script>window.location=('/ican/index.php')</script>";
}

?>