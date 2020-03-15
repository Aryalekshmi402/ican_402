<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include("file:///G|/dbconnect.php");

session_start();
$login=$_SESSION['login'];
$login_id=$_SESSION['login_id'];
$usr_name=$_SESSION['usr_name'];
if($login)
{
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="file:///G|/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="file:///G|/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="file:///G|/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="file:///G|/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="file:///G|/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="file:///G|/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="file:///G|/index.html">E-Tender</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                  <!--  <a href="index.html">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>-->
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Manage
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="file:///G|/ereg.php">Registration for New</a>
                        </li>
                        <li>
                            <a href="file:///G|/tender_add.php">Tender Submission</a>
                        </li>
                       <!-- <li>
                            <a href="tender_view.php">View Tender</a>
                        </li>-->
                        <!--<li>
                            <a href="forms.html">Forms</a>
                        </li>
                        <li>
                            <a href="modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="tables.html">Tables</a>
                        </li>-->
                    </ul>
                </li>
              <!--  <li>
                    <a href="charts.html">
                        <i class="fas fa-chart-pie"></i>
                        Charts
                    </a>
                </li>
                <li>
                    <a href="grids.html">
                        <i class="fas fa-th"></i>
                        Grid Layouts
                    </a>
                </li>-->
               

			  <!-- <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        View
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="#">Latest Tender</a>
                        </li>
                        <li>
                            <a href="500.html">My Bidding</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">more</a>
                        </li>
                    </ul>
                </li>-->
				
				
              <!--  <li>
                    <a href="mailbox.html">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <i class="far fa-window-restore"></i>
                        Widgets
                    </a>
                </li>
                <li>
                    <a href="pricing.html">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forgot.html">Forgot password</a>
                        </li>
                    </ul>
                </li>-->
                <!--<li>
                    <a href="maps.html">
                        <i class="far fa-map"></i>
                        Maps
                    </a>
                </li>
            </ul>-->
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
        
		    <!-- top-bar -->

            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
							
                        </button>
						
                    </div>
                    <!-- Search-from -->
                  <!--  <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>-->
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                           <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>-->
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                               <!-- <h3 class="sub-title-w3-agileits">User notifications</h3>-->
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                       <!-- <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">-->
                                    </div>
                                    <div class="notif-content-wthree">
                                       <!-- <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>4 mins ago</h6>-->
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                       <!-- <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>6 mins ago</h6>-->
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <!--<img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>12 mins ago</h6>-->
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <!--<img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>1 days ago</h6>-->
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                               <!-- <a class="dropdown-item" href="#">view all notifications</a>-->
                            </div>
                        </li>
                        <!--<li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
							
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Menus</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Home</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>About</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Services</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Gallery</h4>
                                </a
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Blog</h4>
                                </a> 
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Contact Us</h4>
                                </a>                           
                            </div>
                        </li>-->
						
                        <li class="nav-item dropdown">
						<?php echo"<font size=4 color=red>Welcome :$usr_name";?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="file:///G|/images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php echo"<font size=4 color=red>$usr_name";?></h3>
                                       <!-- <a href="mailto:info@example.com">info@example.com</a>-->
                                    </div>
                                </div>
                                <a href="file:///G|/editprofile.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <!--<a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="file:///G|/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
				
				
            </nav>
		
		<?php
include("file:///G|/dbconnect.php");
		$sel1="select * from department_tbl";
		$sel2="select * from district_tbl";
		$qr1=mysqli_query($con,$sel1);
		$qr2=mysqli_query($con,$sel2);
?>
<?php


$login_id=$_SESSION['login_id'];

if($login_id>0){
	

	
	$select="select * from `employereg_tbl` where log_id='$login_id'";
	
	$data=mysqli_query($con,$select);
	$row=mysqli_fetch_array($data);
	?>
							
							
						
									

<!DOCTYPE html>
<html>
<head>
<style>
#dist{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 

 fieldset {
	 width:120px
  display: block;
  margin-left: 80px;
  margin-right: 100px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}
 
 
 #amount{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 #tno{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 #username{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 #password{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 #ename{

  width: 80%;
  
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 #addr{

  width: 80%;
  
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 
 
 
 
 
 #btncancel{
 }
 
 #gender{

  width: 45%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 #ttitle{

  width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 #sdate,#cdate,#file,#tduration,#tinstall,#mob
 {
	 width: 80%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 
 
 #pic{

  width: 45%;
  <!--padding: 10px 20px;-->
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-left: 25px;
 }
 
 
 #btnadd ,#btncancel{
  width: 35%;
  background-color: #455AB1;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:165px;
}

#btnadd:hover {
  background-color: #455AB1;
  
}
#tbl{
	margin-left:190px;
	margin-top:5px;
}
 </style>
</head>
<title>reg</title>
<body>
<form action="#" method="post"  name="myform" enctype="multipart/form-data">
<fieldset>
    <legend></legend>
<table id="tbl">

		<tr><td><p><img src="<?php echo $row['file:///G|/file'];?>" width="100px" height="100px"></p></td></tr>
		<!--<tr><td><label for ="ename">Name</label></td><td><input type="text" name="ename" id="ename"   value="<?php echo $row['emp_name'];?>" onChange="return validateform1()"  autocomplete="off"></td></tr>-->
		<tr><td><label for ="address">ADDRESS</label></td><td><input type="text"  name="address" id="addr"   value="<?php echo $row['address'];?>" return "validateform2()" autocomplete="off"></td></tr>
		<tr><td><label for ="mob">Mobile</label></td><td><input type="text" name="mob" id="mob" return "validateform3()"   value="<?php echo $row['mobile'];?>"    autocomplete="off"></td></tr>
		<tr><td><label for ="dist">District</label></td><td><input type="text" name="dist" id="dist" return "validateform3()"    value="<?php echo $row['district'];?>"   autocomplete="off"></td></tr>		
		
		<tr><td><label for ="file">Profile</label></td><td><input type="file" name="file" id="file" return "validateform3()"  value="<?php echo $row['file'];?>"    autocomplete="off"></td></tr>
		
	<?php
}
?>	
		
		
<tr><td><input type="submit" value="Update" id="btnadd" name="submit"></td><td><input type="submit" value="Cancel" id="btncancel" name="btncancel"></td></tr>
					
				<?php
include("file:///G|/dbconnect.php");

$login_id=$_SESSION['login_id'];

if(isset($_POST['submit']))
{
	
	$dir='photo/';
				$target_file=$dir.basename($_FILES['file']['name']);
				move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
	
	
	
	
	//$name=$_POST['ename'];
	$addr=$_POST['address'];
	$mob=$_POST['mob'];
	$dist=$_POST['dist'];




	
	$p2="update `employereg_tbl`
	set 
	//`emp_name` = '$name',
	`address` = '$addr',
	`mobile` = '$mob',
	`district` = '$dist',
	`file`='$target_file'
  
	where `log_id` ='$login_id'";
	$ch=mysqli_query($con,$p2); 
	
		if($ch)
	{
		?>
		<script>
	alert(" Updated");
   window.location="editprofile.php";
	</script>
		<?php
		}
	else
	{
	?>
	 <script>
	alert(" Failed");
   window.location="index.php";
	</script>
	<?php
   
}

}	
	
	if(isset($_POST['btncancel']))
{
	?>
    <script>
	
   window.location="index.php";
	</script>
	<?php
}
	
	
?>
</table>
		</fieldset>
		</form>
		
</body>
</html>
	
		
		
		
		
		
		
		
		
		
		
		
            <!--// top-bar -->
           <!-- <div class="container-fluid">
                <div class="row">-->
                    <!-- Stats -->
                   <!-- <div class="outer-w3-agile col-xl">
                        <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                            <div class="s-l">
                                <h5>Projects</h5>
                                <p class="paragraph-agileits-w3layouts text-white">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>340
                                    <i class="far fa-edit"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                            <div class="s-l">
                                <h5>Clients</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>250
                                    <i class="far fa-smile"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                            <div class="s-l">
                                <h5>Tasks</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>232
                                    <i class="fas fa-tasks"></i>
                                </h6>
                            </div>
                        </div>
                        <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                            <div class="s-l">
                                <h5>Employees</h5>
                                <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                            </div>
                            <div class="s-r">
                                <h6>190
                                    <i class="fas fa-users"></i>
                                </h6>
                            </div>
                        </div>
                    </div>-->
                    <!--// Stats -->
                    <!-- Pie-chart -->
                    <!--<div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Pie Chart</h4>
                        <div id="chartdiv"></div>
                    </div>-->
                    <!--// Pie-chart -->
              <!--  </div>
            </div>-->
            <!-- Simple-chart -->
           <!-- <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Graph</h4>
                <div id="Hybridgraph" class="simple-chart1">
                </div>
            </div>-->
            <!--// Simple-chart -->

            <!--// Bar-Chart -->
           <!-- <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Bar Chart</h4>
                <div id="chart-1"></div>
            </div>-->
            <!--// Bar-Chart -->

            <!--// three-grids -->
            <!--<div class="container-fluid">
                <div class="row">-->
                    <!-- Calender -->
                    <!--<div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Multi range Calender</h4>
                        <div class="multi-select-calender"></div>
                        <div class="box"></div>
                    </div>-->
                    <!--// Calender -->
                    <!-- Profile -->
                   <!-- <div class="outer-w3-agile col-xl mt-3 mx-xl-3 p-xl-0 px-md-5">
                        <div class="header">
                            <div class="text">
                                <img src="images/profile.jpg" class="img-fluid rounded-circle" alt="Responsive image">
                                <h2>Matthew Scott</h2>
                                <a href="mailto:info@example.com">
                                    <p>@Lorem ipsum</p>
                                </a>
                            </div>
                        </div>
                        <div class="container-flud">
                            <div class="followers row">
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-comments"></i>
                                    </a>
                                </div>
                                <div class="f-left col border-left border-right">
                                    <a href="#">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="f-left col">
                                    <a href="#">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="prof-widgt-content">
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-envelope"></i> Messages
                                            <span>13</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="#">Inbox
                                                    <span class="float-right">[09]</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Outbox
                                                    <span class="float-right">[01]</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Sent messages
                                                    <span class="float-right">[03]</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu">
                                <ul>
                                    <li class="button">
                                        <a href="#">
                                            <i class="fas fa-user"></i> Profile</a>
                                    </li>
                                    <li class="dropdown">
                                        <ul class="icon-navigation">
                                            <li>
                                                <a href="#">Change your pic</a>
                                            </li>
                                            <li>
                                                <a href="#">Change your username</a>
                                            </li>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact me</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>-->
                    <!--// Profile -->
                    <!-- Browser stats -->
                    <!--<div class="outer-w3-agile col-xl mt-3">
                        <h4 class="tittle-w3-agileits mb-4">Browser Stats</h4>
                        <div class="stats-info stats-body">
                            <ul class="list-unstyled">
                                <li class="pb-3">GoogleChrome
                                    <span class="float-right">85%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:85%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Firefox
                                    <span class="float-right">35%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar yellow" style="width:35%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Internet Explorer
                                    <span class="float-right">78%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar red" style="width:78%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Safari
                                    <span class="float-right">50%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar blue" style="width:50%;"></div>
                                    </div>
                                </li>
                                <li class="py-md-4 py-3">Opera
                                    <span class="float-right">80%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar light-blue" style="width:80%;"></div>
                                    </div>
                                </li>
                                <li class="last py-md-4 py-3">Others
                                    <span class="float-right">60%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar orange" style="width:60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    <!--// Browser stats -->
               <!-- </div>
            </div>-->
            <!--// Three-grids -->
            <!-- Countdown -->
            <!--<div class="outer-w3-agile mt-3 outer-w3-agile-bg">
                <h4 class="tittle-w3-agileits mb-4 text-white">Countdown Timer</h4>
                <div class="simply-countdown-custom" id="simply-countdown-custom"></div>
            </div>-->
            <!--// Countdown -->
            <!-- Copyright -->
        <!--    <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>-->
            <!--// Copyright -->
        </div>
    </div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    <!-- Required common Js -->
    <script src='file:///G|/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="file:///G|/js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="file:///G|/js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="file:///G|/js/rumcaJS.js"></script>
    <script src="file:///G|/js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="file:///G|/js/moment.min.js"></script>
    <script src="file:///G|/js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="file:///G|/js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="file:///G|/js/simplyCountdown.js"></script>
    <link href="file:///G|/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='file:///G|/js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="file:///G|/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
<?php
}
else{       
header("location:login.php")   ;
}
?>