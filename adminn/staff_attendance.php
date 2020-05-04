<?php include('../config.php'); ?>
<?php
$login = $_SESSION['login'];
$type = $_SESSION['type'];
if ($login) {
    $loginid = $_SESSION['loginid'];
    ?>

    <!DOCTYPE html>
    <html lang="en">



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
        <script src="/js/vue.js"></script>
        <script src="/js/axios.min.js"></script>

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
                        <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
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
                        <!--  <li id="header_inbox_bar" class="dropdown">
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
                        <!--  <li id="header_notification_bar" class="dropdown">
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
                <h3><i class="fa fa-angle-right"></i>Staff Attendance</h3>
                <div class="row" style="height: 500px;">
                    <div class="col-md-12" >
                        <div class="content-panel">
                            <!-- row -->
                            <div class="row" style="height: 500px;">
                                <div class="col-md-12">
                                    <div class="col-md-6">

                                        <section class="content" id="attendence">

                                            <!-- Default box -->
                                            <div class="box">
                                                <form action="" @submit.prevent="save">
                                                    <br>
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="class">Class</label>
                                                                    <select @change="get_students" name="" v-model="form.class" class="form-control" id="class">
                                                                        <option v-for="cls in classes" :value="cls.classid">{{cls.classname}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="syllubus">Syllabus</label>
                                                                    <select @change="get_students" v-model="form.syllabus" name="" class="form-control" id="syllubus">
                                                                        <option v-for="syll in syllabus" :value="syll.syid">{{syll.Name}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="session">Session</label>
                                                                    <select v-model="form.session" name="" class="form-control" id="session">
                                                                        <option v-for="session in sessions" :value="session.session_id">{{session.name}}
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="session">Period</label>
                                                                    <select v-model="form.session_number" name="" class="form-control" id="session">
                                                                        <option v-for="session in 5" :value="session">{{session}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="syllubus">Date</label>
                                                                    <input type="date" class="form-control" v-model="form.date">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="duration">Duration</label>
                                                                    <input type="number" id="duration" class="form-control" v-model="form.duration">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="table table-bordered table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Mobile No</th>
                                                                        <th>
                                                                            Status
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <template v-if="students.length">
                                                                        <tr v-for="(student,index) in form.students">
                                                                            <td>{{student.fname}}</td>
                                                                            <td>{{student.mob}}</td>
                                                                            <td>
                                                                                <!--                                            <input :value="student.signid" type="checkbox"-->
                                                                                <!--                                                   @click="select_student(student.signid)">-->
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" :value="true"
                                                                                           v-model="student.status"
                                                                                           :name="student.mob"
                                                                                           checked>Present</label>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" :value="false"
                                                                                           v-model="student.status"
                                                                                           :name="student.mob">Absent</label>
                                                                            </td>
                                                                        </tr>
                                                                    </template>
                                                                    <tr v-else>
                                                                        <td colspan="4" class="text-center">No Student Selected</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="box-footer text-right" v-if="students.length">
                                                        <button class="btn btn-success">Save</button>
                                                    </div>
                                                </form>
                                                <!-- /.box-body -->
                                                <!-- /.box-footer-->
                                            </div>
                                            <!-- /.box -->

                                        </section>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <!-- /col-md-12 -->
                            </div>
                            <!-- /row -->
            </section>
        </section>
        <script>
            new Vue({
                el: '#attendence',
                data: {
                    students: [],
                    classes: [],
                    syllabus: [],
                    sessions: [],
                    form: {
                        class: '',
                        syllabus: '',
                        date:'',
                        duration: '',
                        session: '',
                        session_number: '',
                        students: {}
                    }
                },
                methods: {
                    select_student(student) {
                        let index = this.form.students.indexOf(student);
                        if (index === -1) {
                            this.form.students.push(student)
                        } else {
                            this.form.students.splice(index, 1)
                        }
                    },
                    get_classes() {
                        axios.get('/staff/attendance_process.php', {
                            params: {
                                type: 'CLASSES'
                            }
                        })
                            .then(({data}) => {
                                this.classes = data.classes;
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    },
                    get_session() {
                        axios.get('/staff/attendance_process.php', {
                            params: {
                                type: 'SESSION'
                            }
                        })
                            .then(({data}) => {
                                this.sessions = data.sessions;
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    },
                    get_students() {
                        axios.get('/staff/attendance_process.php', {
                            params: {
                                type: 'STUDENTS',
                                ...this.form
                            }
                        })
                            .then(({data}) => {

                                for (const student of  data.students) {
                                    student['status'] = true;
                                }
                                this.form.students = data.students;
                                this.students = data.students;
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    },
                    get_syllabus() {
                        axios.get('/staff/attendance_process.php', {
                            params: {
                                type: 'SYLLABUS'
                            }
                        })
                            .then(({data}) => {
                                this.syllabus = data.syllabus;
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    },
                    save() {
                        for (const index in this.form) {
                            if (this.form[index] === '' || this.form[index] === []) {
                                swal({
                                    title: "Oops",
                                    text: "Please Enter Correct Details",
                                    icon: "error",
                                });
                                return;
                            }
                        }
                        axios.post('/staff/save_attendance.php', {
                            ...this.form
                        })
                            .then(({data}) => {
                                swal({
                                    title: "Success",
                                    text: "Attendance Added!",
                                    icon: "success",
                                });
                                this.students = [];
                                this.form = {
                                    class: '',
                                    syllabus: '',
                                    date: Date(),
                                    duration: '',
                                    session: '',
                                    session_number: '',
                                    students: []
                                };
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                    }
                },
                mounted() {
                    this.get_classes();
                    this.get_syllabus();
                    this.get_session();
                },

            })
        </script>
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