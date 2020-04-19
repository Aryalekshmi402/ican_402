<?php
session_start();
$login = $_SESSION['login'];
$type = $_SESSION['type'];
if ($login) {
    $loginid = $_SESSION['loginid'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <?php include('../config.php'); ?>


        <?php
        $se = "SELECT * FROM tbl_class";
        $classes = mysqli_query($con, $se);
        ?>

        <head>
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
            <!-- Custom styles for this template -->
            <link href="css/style.css" rel="stylesheet">
            <link href="css/style-responsive.css" rel="stylesheet">

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
                    <a href="index.html" class="logo"><b>i<span>Can</span></b></a>
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
                                        <a href="index.html#">See all messages
                                        </a>
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
                                            <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server Overloaded.
                                            <span class="small italic">4 mins.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <span class="label label-warning"><i class="fa fa-bell"></i></span> Memory #2 Not Responding.
                                            <span class="small italic">30 mins.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <span class="label label-danger"><i class="fa fa-bolt"></i></span> Disk Space Reached 85%.
                                            <span class="small italic">2 hrs.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html#">
                                            <span class="label label-success"><i class="fa fa-plus"></i></span> New User Registered.
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
                            <li>
                                <a class="logout" href="logout.php">Logout</a>
                            </li>
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
                            <p class="centered">
                                <a href="profile.html"><img src="img/adm.png" class="img-circle" width="80"></a>
                            </p>
                            <h5 class="centered"><?php echo "$type"; ?></h5>

                    </div>
                </aside>
                <!--sidebar end-->
                <!-- **********************************************************************************************************************************************************
                    MAIN CONTENT
                    *********************************************************************************************************************************************************** -->
                <!--main content start-->
                <section id="main-content">
                    <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i>Student Fees</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-panel">
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                            <form action="" method="POST">
                                                <select class="form-control" name="class_id_val">
                                                    <option>---Select Class ----</option>
                                                    <?php while ($row = mysqli_fetch_array($classes)) {
                                                        ?> 
                                                        <option value="<?php echo $row['classid']; ?>"><?php echo $row['classname']; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                   
                                                    <input class="btn btn-success btn-sm" type="submit" value="search" name="search_fee">
                                                </div>
                                            </div>
                                    <?php 
                                    $class_id=null;
                                    if(isset($_POST['search_fee'])){ 
                                      $class_id=$_POST['class_id_val'];
                                      $se = "SELECT * FROM studtbl where course='$class_id'";
                                      $courses = mysqli_query($con, $se);
                                      ?>
                                            <div class="col-md-12">
                                            <div class="col-md-12">
                                                <div class="content-panel">
                                                    <table class="table table-striped table-advance table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>sl no:</th>
                                                                <th>Name</th>
                                                                <th>Gender</th>
                                                                <th>Mobile</th>
                                                                <th> Subjects</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $i=1;
                                                        while($row=mysqli_fetch_array($courses)){
                                                          $loginid=$row['loginid'];
                                                          $subjects=null;
                                                          $se1 = "SELECT * FROM studentsub where loginid='$loginid'";
                                                          $class_data = mysqli_query($con, $se1);
                                                          while($sub_detal=mysqli_fetch_array($class_data)){
                                                              $sub_id=$sub_detal['subject_id'];
                                                              $se2 = "SELECT * FROM tbl_subject_master where subject_id='$sub_id'";
                                                              $sub_data=mysqli_query($con, $se2);
                                                              $sub_datas=mysqli_fetch_array($sub_data);
                                                            $subjects=$subjects.','. $sub_datas['subject_name'];
                                                          }
                                                          $count = "SELECT count(*) as total from studentsub where loginid='$loginid'";
                                                          $sub_count=mysqli_query($con, $count);
                                                          $data=mysqli_fetch_assoc($sub_count);

                                                        ?>
                                                        <tr>
                                                        <td><?php echo $i++ ; ?>
                                                        <td><?php echo $row['fname'].' '.$row['gname']; ?></td>
                                                        <td><?php echo $row['ge']; ?></td>
                                                        <td><?php echo $row['mob']; ?></td>
                                                        <td><?php echo $subjects; ?></td>
                                                        <td>
                                                        <?php 
                                                        echo 'Rs.'.($data['total']*250)*12 .' ((250 *'.$data['total'].')*12)' ; ?>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                        <?php
                                                            $year=date('Y');
                                                            if(date('d-m-Y') >'01-01-'.$year && date('d-m-Y') <='31-12-'.$year){
                                                                $pay_count = "SELECT count(*) as total from student_dues where student_id='$loginid' and year='$year'";
                                                                $pay_count1=mysqli_query($con, $pay_count);
                                                                $count=mysqli_fetch_assoc($pay_count1);
                                                                //Check pending payments
                                                                $pay_count2 = "SELECT count(*) as total from student_dues where student_id='$loginid' and status='Payment Pending'";
                                                                $pay_count12=mysqli_query($con, $pay_count2);
                                                                $count2=mysqli_fetch_assoc($pay_count12);
                                                                if($count['total']==0){
                                                        ?>
                                                        <a onclick="return confirm('Are you sure, Do you want to sent fee..!!')" class="btn btn-success btn-sm" href="sent_fee.php?id=<?php echo $row['loginid']; ?>&amount=<?php echo (($data['total']*250)*12); ?>">Sent Fee </a>
                                                           
                                                            <?php 
                                                            if($count2['total']!=0){
                                                                ?>
                                                                 <a class="btn btn-primary btn-sm" href="payment_history.php?id=<?php echo $row['loginid']; ?>&name=<?php echo $row['fname'].' '.$row['gname']; ?>">Pending Payments</a> 
                                                                <?php
                                                            }
                                                        }
                                                            else{
                                                                ?>
                                                                <a class="btn btn-primary btn-sm" href="payment_history.php?id=<?php echo $row['loginid']; ?>&name=<?php echo $row['fname'].' '.$row['gname']; ?>">Payment History</a> 
                                                             <?php
                                                        }
                                                        } ?>
                                                        </td>
                                                          </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /content-panel -->
                                            </div>
                                            </div>
                                    <?php }  ?>
                                            <!-- /col-md-12 -->
                                        </div>
                                        <!-- /row -->
                                        </section>
                                        </section>
                                        <!-- /MAIN CONTENT -->
                                        <!--main content end-->
                                        <!--footer start-->
                                        <footer class="site-footer">
                                            <div class="text-center">
                                                <p>
                                                    &copy; Copyrights <strong>iCan</strong>. All Rights Reserved
                                                </p>
                                                <div class="credits">
                                                    <!--
                                                      You are NOT allowed to delete the credit link to TemplateMag with free version.
                                                      You can delete the credit link only if you bought the pro version.
                                                      Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                                                      Licensing information: https://templatemag.com/license/
                                                    -->
                                                    Created by <a href="https://templatemag.com/">aryasyama402@gmail.com</a>
                                                </div>
                                                <a href="basic_table.html#" class="go-top">
                                                    <i class="fa fa-angle-up"></i>
                                                </a>
                                            </div>
                                        </footer>
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

                                        </body>

                                        </html>
                                        <?php
                                    } else
                                    header("location:/ican/login.php");
                                    ?>