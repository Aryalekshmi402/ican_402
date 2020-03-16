<!doctype html>
<html lang="en">
<?php include('config.php');?>
<head>

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ican</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	 <script type="text/javascript src="loginvalid.js"></script>
</head>

<body>
    <!--::header part start::-->

    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.jpg" WIDTH=90 HEIGHT=65  alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="..ican/index.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
								 <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                
                               
                             
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
	
	<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	  <title>ican</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<style>
  .error{
    color:#e36969;
  }
</style>
</head>
<body class="form-v10">




	<div class="page-content">
		<div class="form-v10-content">
		
			<form class="form-detail" action="#" method="post" id="myform" name="myreg" >
				<div class="form-left">
					<h2>General Infomation</h2>
					
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="textnames"  pattern="[A-Z/a-z]{1,20}" id="textnames" autocomplete="off" class="input-text" placeholder="First Name" onchange="myFunction()" required>
			</div>
			
						<div class="form-row form-row-2">
							<input type="text" name="txtnames" pattern="[A-Z/a-z]{1,20}"  id="txtnames" autocomplete="off"  class="input-text" placeholder="Last Name" required><span class="errorform" id="lnamerr"></span>
						</div>
					</div>
					<div class="form-row">
						<input type="date" name="dob" class="company" autocomplete="off"  title="date of birtrh" id="dateobirth" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" required>
					</div>
					<div class="form-row">
						<input type="date" name="doj" class="company" autocomplete="off" title="date of join" id="paddress" placeholder="DOJ" required onfocus="(this.type='date')" onblur="(this.type='text')" required>
					</div>
					<div class="form-row">
						<input type="text" name="subname"  pattern="[A-Z/a-z]{1,20}" class="company" autocomplete="off" id="sname" placeholder="subject name" "onchange="myFunction()" required>
					</div>
					<div class="form-row">
						<select name="sex" id="sex" autocomplete="off" >
						    <option value=" " disabled selected>Gender</option>
						    <option value="director">Male</option>
						    <option value="manager">Female</option>
						    <option value="employee">Others</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row form-row-2">
							<select name="State" id="State" onchange="getdistrict(this.value);" autocomplete="off" required>
							   <option value=" ">Choose Your State</option>
                        <?php 
                           $result=mysqli_query($con,"select * from tlb_state");
                            while($row=mysqli_fetch_array($result)){
								$st=$row['state_name'];
                        ?>
                      <option value="<?php echo $row['stateid'];?>"> <?php  echo $st; ?></option>
                        <?php    
                            }
                        ?>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row form-row-2">
							<select name="District"  id="district-list" autocomplete="off" required >
							    <option value=" ">Choose Your District</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					<div class="form-row">
						<input type="text" name="City"  id="City" pattern="[A-Z/a-z]{1,20}" class="additional" id="additional" placeholder="City" required autocomplete="off">
					</div>
					<div class="form-group">
						
						<div class="form-row form-row-4">

						</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					
						
					
					<div class="form-row">
						<input type="text" name="pincode"  pattern="[0-9]{6}" autocomplete="off" id="pincode" maxlength="6" nclass="additional"  placeholder="Pincode" required>
					</div>
					<div class="form-row">
						<input type="text"name="emailid" autocomplete="off" id="emailid" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					<div class="form-row">
						<input type="text"  name="mobileno" autocomplete="off"id="mobileno" pattern="[7-9]{1}[0-9]{9}" class="additional"  placeholder="Mobile no" required>
					</div>
					<div class="form-row">
						<input type="text" name="uname" id="uname"   pattern="[A-Z/a-z]{1,20}" autocomplete="off"class="additional" placeholder="User name" required>
					</div>
					<div class="form-row">
						<input type="text" name="passw" id="passw" autocomplete="off"class="additional"  placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					</div>
					<div class="form-row">
						<input type="text" name="cf" id="cf" class="additional" autocomplete="off"  placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
					</div>
				<div class="form-row">
						<input type="file" name="file" id="file"  class="additional" autocomplete="off" placeholder="User name" required>
					</div>
					
					
					<div class="form-row-last">
						
						<input type="submit" id="submit" name="submit" autocomplete="off" class="register" value="Register Badge">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="register1.js"></script>
				
				</div>
					
				</div>
				
			</form>
    
		</div>
	</div>
	
	 <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Web Development</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html"><h3>Web Development</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">design</a>
                            <h4>$160.00</h4>
                            <a href="course-details.html"> <h3>Web UX/UI Design </h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Wordpress</a>
                            <h4>$140.00</h4>
                            <a href="course-details.html">  <h3>Wordpress Development</h3> </a> 
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

	
	
	
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
 
</body>
 

</html>
<?php
 if(isset($_POST['submit']))
{
$name=$_POST['textnames'];
$lname=$_POST['txtnames'];
$db=$_POST['dob'];
$dj=$_POST['doj'];
$sn=$_POST['subname'];
$gen=$_POST['sex'];
$st=$_POST['State'];
$dt=$_POST['District'];
$ct=$_POST['City'];
$pin=$_POST['pincode'];
$eml=$_POST['emailid'];
$mb=$_POST['mobileno'];
$un=$_POST['uname'];
$ps=$_POST['passw'];
$p=md5($ps);
$img=$_FILES["file"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$image=$target_file;

$sq="insert into logintbl(emailid,password,usertype)values('$eml','$p','staff')";
if(mysqli_query($con,$sq))
{
	$s=mysqli_query($con,"select loginid from logintbl where emailid='$eml' ");
	$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
	$lid=$r['loginid'];
	//echo "<script>alert('$lid');</script>";
    $pq="insert into stafftbl(loginid,name,lname,dob,doj,sub,ge,state,district,city,pin,mob,username,proof)values('$lid','$name' ,' $lname','$db', '$dj' ,'$sn','$gen', '$st', '$dt', '$ct',' $pin', '$mb','$un','$img')";
    if(mysqli_query($con,$pq))
      echo "<script> alert('Success');
           window.location='login.php'</script>";
}
}
?> 