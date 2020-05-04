<?php
session_start();
include('../config.php');?>
<?php
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
        <style>
            .error{
                color:#e36969;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>ican</title>

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <script data-require="angularjs@1.3.6" data-semver="1.3.6" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.6/angular.min.js"></script>
    <link rel="stylesheet" href="textarea/style.css" />
    <script type="text/javascript" src="textarea/behave.js"></script>
    <script type="text/javascript" src="textarea/script.js"></script>
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
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>i<span>Can</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">
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
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
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
            <div id="sidebar" class="nav-collapse ">
                <?php include('menu1.php');?>
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="img/adm.png" class="img-circle" width="80"></a></p>
                    <h5 class="centered"><?php echo "$type";?></h5>
                    <!-- <li class="sub-menu">
                       <a href="javascript:;">
                         <i class="fa fa-desktop"></i>
                         <span>UI Elements</span>
                         </a>
                       <ul class="sub">
                         <li><a href="general.html">General</a></li>
                         <li><a href="buttons.html">Buttons</a></li>
                         <li><a href="panels.html">Panels</a></li>
                         <li><a href="font_awesome.html">Font Awesome</a></li>
                       </ul>
                     </li>
                     <li class="sub-menu">
                       <a href="javascript:;">
                         <i class="fa fa-cogs"></i>
                         <span>Components</span>
                         </a>
                       <ul class="sub">
                         <li><a href="grids.html">Grids</a></li>
                         <li><a href="calendar.html">Calendar</a></li>
                         <li><a href="gallery.html">Gallery</a></li>
                         <li><a href="todo_list.html">Todo List</a></li>
                         <li><a href="dropzone.html">Dropzone File Upload</a></li>
                         <li><a href="inline_editor.html">Inline Editor</a></li>
                         <li><a href="file_upload.html">Multiple File Upload</a></li>
                       </ul>
                     </li>
                     <li class="sub-menu">
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
                       <a class="active" href="javascript:;">
                         <i class="fa fa-tasks"></i>
                         <span>Forms</span>
                         </a>
                       <ul class="sub">
                         <li class="active"><a href="form_component.html">Form Components</a></li>
                         <li><a href="advanced_form_components.html">Advanced Components</a></li>
                         <li><a href="form_validation.html">Form Validation</a></li>
                         <li><a href="contactform.html">Contact Form</a></li>
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
                     </li>
                   </ul>
                   <!-- sidebar menu end-->
            </div>
        </aside>-->
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i>iCan Schedule</h3>
                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <!-- <div class="form-panel">
                           <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                           <form class="form-horizontal style-form" method="get">
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Default</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Help text</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control">
                                 <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Rounder</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control round-form">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Input focus</label>
                               <div class="col-sm-10">
                                 <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Disabled</label>
                               <div class="col-sm-10">
                                 <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control" placeholder="placeholder">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-sm-2 col-sm-2 control-label">Password</label>
                               <div class="col-sm-10">
                                 <input type="password" class="form-control" placeholder="">
                               </div>
                             </div>
                             <div class="form-group">
                               <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                               <div class="col-lg-10">
                                 <p class="form-control-static">email@example.com</p>
                               </div>
                             </div>
                           </form>
                         </div>-->
                    </div>
                    <!-- col-lg-12-->
                </div>
                <!-- /row -->
                <!-- INLINE FORM ELELEMNTS -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-panel" >
                            <h4 class="mb"><i class="fa fa-angle-right"></i><b> Add TimeTable</b></h4>
                            <?php if(isset($_SESSION['message'])){
                                ?>
                                <div class="alert alert-success">
                                    <?php echo $_SESSION['message'];?>
                                </div>
                                <?php
                                unset($_SESSION['message']);
                            }?>
                            <div class="col-md-4">
                                <div class="form-group" >
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Syllabus
                                    <select class="form-control" name="syllabus_id" id="syllabus_id" >

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
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class
                                   &nbsp; &nbsp;&nbsp;<select class="form-control" name="class_id" id="class_id" >
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
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Audience
                                    <select class="form-control" name="time_type" id="time_type">
                                        <option value="Staff">Staff</option>
                                        <option value="Student">Student</option>
                                    </select>
                                </div>
                                </div>
                                <form name="order" id="myForm">
                                <input type="hidden" id="row_count" value="0">
                <table id="myTable" class="table table-bordered" class="col-md-12">
                    <tbody>
                        <tr>
                            <td>
                                <input type="date" required="required" class="form-control" id="date" name="sh_date[]">
                            </td>
                            <td>
                                <textarea  required class="form-control" name="fn_sub[]">Enter FN Subjects</textarea>
                            </td>
                            <td>
                                <textarea required class="form-control" name="an_sub[]"> Enter AN Subjects</textarea>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success fa fa-plus"  id="addVar"></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <center>
                <input type="button" onclick="saveTimetable()" value="Save Timetable" class="btn btn-success btn-md">
                </center>
            </form>
                        </div>

                        <script>
                       
                  function saveTimetable(){
                    var status=true;
                    var sh_date = $('input[name="sh_date[]"]').map(function() {
                      var text = $(this).val();
                      if (text) {
                        return this.value;
                      }else{
                        status=false;
                      }
                    }).get();
                    var fn_sub = $('textarea[name="fn_sub[]"]').map(function() {
                      var text = $(this).val();
                      if (text) {
                        return this.value;
                      }else{
                        status=false;
                      }
                    }).get();
                    var an_sub = $('textarea[name="an_sub[]"]').map(function() {
                      var text = $(this).val();
                      if (text) {
                        return this.value;
                      }else{
                        status=false;
                      }
                    }).get();
                    if(status==true){
                          $.ajax({
                          url: "save_timetable.php",
                          type: "POST",
                          data: { 
                            syllabus_id:$('#syllabus_id').val(),
                            class_id:$('#class_id').val(),
                            time_type:$('#time_type').val(),
                            row_count:$('#row_count').val(),
                            date:sh_date,
                            fn_sub:fn_sub,
                            an_sub:an_sub,

                          },
                          success: function(res){
                            console.log(res);
                             alert(res);
                          }
                        });
                    }else{
                      alert('Please fill all the fields !')
                    }
                  }
</script>

                        <!-- /form-panel -->
                    </div>
                    <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
                <!-- INPUT MESSAGES -->
                <!-- <div class="row mt">
                   <div class="col-lg-12">
                     <div class="form-panel">
                       <h4 class="mb"><i class="fa fa-angle-right"></i> Input Messages</h4>
                       <form class="form-horizontal tasi-form" method="get">
                         <div class="form-group has-success">
                           <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Input with success</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" id="inputSuccess">
                           </div>
                         </div>
                         <div class="form-group has-warning">
                           <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Input with warning</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" id="inputWarning">
                           </div>
                         </div>
                         <div class="form-group has-error">
                           <label class="col-sm-2 control-label col-lg-2" for="inputError">Input with error</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" id="inputError">
                           </div>
                         </div>
                       </form>
                     </div>
                     <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                </div>
                <!-- /row -->
                <!-- INPUT MESSAGES -->
                <!--<div class="row mt">
                  <div class="col-lg-12">
                    <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Checkboxes, Radios & Selects</h4>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" value="">
                          Option one is this and that&mdash;be sure to include why it's great
                          </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                          </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                          </label>
                      </div>
                      <hr>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                        </label>
                      <hr>
                      <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      <br>
                      <select multiple class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    </div>
                    <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
                <!-- CUSTOM TOGGLES -->
                <!--<div class="col-lg-12">
                  <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Custom Toggles</h4>
                    <div class="row mt">
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" checked="" data-toggle="switch" />
                      </div>
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" data-toggle="switch" />
                      </div>
                    </div>
                    <div class="row mt">
                      <div class="col-sm-6 text-center">
                        <div class="switch switch-square" data-on-label="<i class=' fa fa-check'></i>" data-off-label="<i class='fa fa-times'></i>">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="col-sm-6 text-center">
                        <div class="switch switch-square" data-on-label="<i class=' fa fa-check'></i>" data-off-label="<i class='fa fa-times'></i>">
                          <input type="checkbox" checked="" />
                        </div>
                      </div>
                    </div>
                    <div class="row mt">
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" disabled data-toggle="switch" />
                      </div>
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" checked disabled data-toggle="switch" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /row -->
            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->

        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <!--custom switch-->
    <script src="lib/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="lib/jquery.tagsinput.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="textarea/add.js"></script>
    <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
    <script src="lib/form-component.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="form-validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="val.js"></script>


    <script type='text/Javascript'>
        function swtalert(swlt)
        {
            if(swlt==1)
            {
                swal({  type: 'success',
                        title: 'staff Added' },
                    function()
                    {
                        window.location="form_component.php";
                    });
            }
            else
            {
                swal({  type: 'error',
                        title: 'Oops!!!',
                        text: 'staff already exists'},
                    function()
                    {
                        window.location="form_component.php";
                    });
            }
        }
    </script>

    </body>

    </html>
    <?php
    // $lin=$_GET['id'];

    if(isset($_POST['submitclk']))
    {
        $name=$_POST['nm'];
        $email=$_POST['em'];
        $gender=$_POST['gen'];
        $des=$_POST['desig'];
        $sub=$_POST['sub'];
        $phone=$_POST['phone'];
        $password=$_POST['pi'];

        $chid="SELECT emailid from logintbl where emailid='$email'";
        $chsq=mysqli_query($con,$chid);
        $rchsq=mysqli_fetch_array($chsq,MYSQLI_ASSOC);
        if($rchsq['emailid']!="")
        {
            $swlt=0;
            echo "<script>swtalert($swlt);</script>";
        }
        else
        {
            //$d=date("Y-m-d",strtotime($dob));
            $ps=md5($password);
            $sq="INSERT INTO logintbl (emailid,password,usertype,status) VALUES ('$email','$ps','ostaff','1')";
            $qu=mysqli_query($con,$sq);
            if($qu)
            {
                $sqq="SELECT loginid from logintbl where emailid='$email'";
                $que=mysqli_query($con,$sqq);
                $row=mysqli_fetch_array($que,MYSQLI_ASSOC);
                $lin=$row['loginid'];
                $sqll="INSERT INTO tlb_staff (`loginid`,`name`,`gender`,`designation`,`subject`,`phone`) VALUES ('$lin','$name','$gender','$des','$sub','$phone')";
                $quer=mysqli_query($con,$sqll);
                if($quer)
                {
                    $swlt=1;
                    echo "<script>swtalert($swlt);</script>";
                }
            }
        }
    }
    ?>
    <?php
}
else
    header("location:/ican/login.php");
?>