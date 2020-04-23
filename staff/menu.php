<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="logo.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $fname;?></p>
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
            <li class="header">HOME</li>
            <li class="treeview">
                <a href="/staff/home.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>

                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Marks</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/staff/pages/forms/mark.php"><i class="fa fa-circle-o"></i> Add Mark</a></li>
                    <li><a href="/staff/pages/forms/edit.php"><i class="fa fa-circle-o"></i> Edit Mark</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Leave</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/staff/pages/forms/leave.php"><i class="fa fa-circle-o"></i>Apply Leave</a></li>
                    <li><a href="/staff/pages/tables/status.php"><i class="fa fa-circle-o"></i>Leave Status</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Attendance</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/staff/attendance.php"><i class="fa fa-circle-o"></i>Attendance</a></li>
                    <li><a href="/staff/attendance_report.php"><i class="fa fa-circle-o"></i> Attendance Report</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Course Details</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/staff/pages/forms/upload.php"><i class="fa fa-circle-o"></i>Upload Materials</a></li>
                    <!--<li><a href="attendance_report.php"><i class="fa fa-circle-o"></i> Attendance Report</a></li>-->
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>