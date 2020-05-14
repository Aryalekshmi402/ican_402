<?php include('../config.php'); ?>
<?php
$login = $_SESSION['login'];
$type = $_SESSION['type'];
if ($login) {
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>iCan</title>

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <!-- =======================================================
          Template Name: Dashio
          Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
          Author: TemplateMag.com
          License: https://templatemag.com/license/
        ======================================================= -->
        <style>
            .error{
                color:#e36969;
            }
        </style>
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
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%">
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
                                        <div class="progress-bar progress-bar-warning" role="progressbar"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 60%">
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
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 80%">
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
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 70%">
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
        <?php include('menu.php'); ?>

        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
            MAIN CONTENT

           *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="col-lg-3 col-xs-6" style="margin-left: 120px;">
                    <?php
                    $stu = mysqli_query($con, "select * from studtbl");
                    $stuc = mysqli_num_rows($stu);

                    ?>
                    <!-- small box -->
                    <div class="small-box bg-yellow" style="margin-left:-80px;">
                        <div class="inner" style="background-color: #9ad717;height: 120px;">
                            <h3  style="margin-left: 150px;"><br><?php echo $stuc; ?></h3>

                            <p style="margin-left: 130px;">Students</p>
                            <div class="icon" >
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer" style="margin-left: 150px;"><i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        </div>


                </div>

                <div class="col-lg-3 col-xs-6" style="margin-left: 120px;">
                    <?php
                    $stu = mysqli_query($con, "select * from tlb_staff");
                    $stuc = mysqli_num_rows($stu);

                    ?>
                    <!-- small box -->
                    <div class="small-box bg-yellow" style="margin-left:-80px;">
                        <div class="inner" style="background-color: #9ad717;height: 120px;">
                            <h3  style="margin-left: 150px;"><br><b></b><?php echo $stuc; ?></b></h3>

                            <p style="margin-left: 140px;">Staff</p>
                            <div class="icon" >
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer" style="margin-left: 150px;"><i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                </div>
                <br>
                <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
                <h3><i class="fa fa-angle-right"></i>Office Alert</h3>
                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h4 class="title">sent office alert message to staff</h4>
                        <div id="message"></div>
                        <form class="contact-form php-mail-form" role="form" name="mineform" id="mineform" action="index.php" method="POST">

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" id="contact-subject"
                                       placeholder="staff" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject" readonly>
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" id="contact-message"
                                          placeholder="Your Message" rows="5" data-rule="required"
                                          data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="loading"></div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <div class="form-send">
                                <button type="submit" name="submit" class="btn btn-large btn-primary">Send Message
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div style="background-color: #0a568c; margin-left: 840px;margin-top:-559px; width: 270px; height: 100px;">
                    <form action="upload_file.php" method="get" target="_blank">
                        <button type="submit" style=" width: 270px; height: 120px;background-color:#09F;"><font color="black" size="4"> Upload Gallary Images</font></button>
                    </form>
                </div>
            </section>
            <!--<div class="table-inbox-wrap ">
                <table class="table table-inbox table-hover">
                  <tbody>
                    <tr class="unread">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message  dont-show"><a href="mail_view.html">Google Inc.</a></td>
                      <td class="view-message "><a href="mail_view.html">Your new account is ready.</a></td>
                      <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message  text-right">08:10 AM</td>
                    </tr>
                    <tr class="unread">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show"><a href="mail_view.html">Mark Thompson</a></td>
                      <td class="view-message"><a href="mail_view.html">Last project updates</a></td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">March 15</td>
                    </tr>
                    <tr class="unread">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show"><a href="mail_view.html">Wonder Corp.</a></td>
                      <td class="view-message"><a href="mail_view.html">Thanks for your registration</a></td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">March 15</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                      <td class="view-message"><a href="mail_view.html">New Friendship Request</a></td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">March 13</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                      <td class="view-message dont-show"><a href="mail_view.html">Mark Webber <span class="label label-danger pull-right">urgent</span></a></td>
                      <td class="view-message"><a href="mail_view.html">The server is down</a></td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">March 09</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                      <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                      <td class="view-message"><a href="mail_view.html">New message from Patrick S.</a></td>
                      <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message text-right">March 08</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                      <td class="view-message dont-show">Paypal inc.</td>
                      <td class="view-message">New payment received</td>
                      <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message text-right">March 04</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">Andrea <span class="label label-success pull-right">girlfriend</span></td>
                      <td class="view-message view-message">Weekend plans</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">March 04</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">David Green</td>
                      <td class="view-message view-message">Soccer tickets</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">February 22</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">Evelyn <span class="label label-info pull-right">family</span></td>
                      <td class="view-message view-message">Surprise party</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">February 19</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                      <td class="view-message dont-show">Martin Moore</td>
                      <td class="view-message">Hey mate!</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">February 17</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                      <td class="dont-show">Facebook</td>
                      <td class="view-message">Paul published on your wall</td>
                      <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message text-right">February 14</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">Steve Stoll</td>
                      <td class="view-message">Update developed</td>
                      <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                      <td class="view-message text-right">February 11</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="dont-show">Laura Anton</td>
                      <td class="view-message view-message">New subscription</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">January 14</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">Ryanair</td>
                      <td class="view-message">Your flight tickets</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">January 07</td>
                    </tr>
                    <tr class="">
                      <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                      </td>
                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                      <td class="view-message dont-show">Twitter</td>
                      <td class="view-message">Password reset</td>
                      <td class="view-message inbox-small-cells"></td>
                      <td class="view-message text-right">January 04</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!-- /wrapper -->

        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer" style="margin-top:900px;">
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
                    Created ican by <a href="#">aryasyama402@gmail.com</a>
                </div>
                <a href="inbox.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="office.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>

    <script type='text/Javascript'>
        function swtalert(swlt) {
            if (swlt == 1) {
                swal({
                        type: 'success',
                        title: 'message sent'
                    },
                    function () {
                        window.location = "index.php";
                    });
            } else {
                swal({
                        type: 'error',
                        title: 'Oops!!!',
                        text: 'message not sent'
                    },
                    function () {
                        window.location = "index.php";
                    });
            }
        }
    </script>


    </body>

    </html>
    <?php
    // $lin=$_GET['id'];

    if (isset($_POST['submit'])) {
        $bc = $_POST['message'];
        $sqll = "INSERT INTO tlb_office (`message`) VALUES ('$bc')";
        echo mysqli_error($con);
        echo $sqll;
        $quer = mysqli_query($con, $sqll);
        if ($quer) {
            $swlt = 1;
            echo "<script>swtalert($swlt);</script>";
        }


    }
    ?>
    <?php
} else
    header("location:/ican/index.php");
?>