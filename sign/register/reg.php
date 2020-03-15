<?php
include('../config/conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<!--  <script language="javascript" type="text/javascript">
  function validation()
  {
 if(document.getElementById('pwd').value != document.getElementById('cpwd').value)
  {
  alert("password doesn't match");
  return false;
  }
  }

  function myFunction() {
      var x = document.getElementById("fname");
      x.value = x.value.toUpperCase();
  }

  </script>

  <script language="javascript" type="text/javascript" src="reg.js">
  </script>
-->



	<meta charset="utf-8">
	<title>Sign up</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>


    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/magnific-popup.css"/>
    <link rel="stylesheet" href="../css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/animate.css"/>
<style>
  .error{
    color:#e36969;
  }
</style>

</head>
<body class="form-v10">
  <!-- Header section -->
	<header class="header-section">
		<div class="container">
			<a href="../index.html" class="site-logo">
				<img src="../img/logo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
					<li class="active"><a href="../index.html">Home</a></li>
					<li><a href="reg.php">About us</a></li>
					<li><a href="reg.php">Services</a></li>
					<li><a href="reg.php">News</a></li>
					<li><a href="reg.php">Contact</a></li>
				</ul>
				<div class="header-btns">
					<a href="#" class="site-btn sb-c1">Support <span>24/7</span></a>
					<a href="../login/login.php" class="site-btn sb-c2">Login</a>
					<a href="reg.php" class="site-btn sb-c3">Register</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<div class="page-content" style="background-image:url(bg.jpg)!important;background-size:100%">

		<div class="form-v10-content">

			<form class="form-detail" action="#" method="post" id="myform" onSubmit="return validation()">
<br><br><br><br>
				<div class="form-left">
					<h2></h2>
<br>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="fname" pattern="[A-Z/a-z]{1,20}" id="fname" autocomplete="off"  class="input-text" placeholder="First Name" "onchange="myFunction()" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="lname" pattern="[A-Z/a-z]{1,20}" id="lname" autocomplete="off"  class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<select name="gender" autocomplete="off" required>
							  <option value="" disabled selected>Gender</option>
						    <option value="male">Male</option>
						    <option value="female">Female</option>
						    <option value="others">Others</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>

					<div class="form-row">
					  <input placeholder="Date of birth" name="dob" class="dob" type="text" autocomplete="off"  onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
					</div>


					<div class="form-row">
						<input type="text" name="aadhar" class="aadhar" id="aadhar" autocomplete="off"  placeholder="Aadhar number" required>
					</div>
					<div class="form-row">
						<input type="text" name="mobile"  class="mobile" id="mobile" autocomplete="off"  placeholder="Mobile number" pattern="[7-9]{1}[0-9]{9}" required>
					</div>

					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" autocomplete="off"  required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>



				</div>



				<div class="form-right">

					<br><br><br><br>
					<div class="form-row">
						<input type="text" name="house"  class="house" id="house" autocomplete="off"  placeholder="House no / House name" required>
					</div>


					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="street" pattern="[A-Z/a-z]{1,20}" id="street" autocomplete="off"  class="street" placeholder="Street" required>
						</div>
						<div class="form-row form-row-4">
							<input type="text" name="area" pattern="[A-Z/a-z]{1,20}" id="area" autocomplete="off"  class="area" placeholder="Area" required>
						</div>
					</div>



					<div class="form-row">
						<input type="text" name="city" pattern="[A-Z/a-z]{1,20}" class="city" autocomplete="off"  id="city" placeholder="City" required>
					</div>


					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="pin"  class="zip" id="pin" autocomplete="off"  placeholder="Pin Code" pattern="[0-9]{6}" required>
						</div>
						<div class="form-row form-row-2">
							<select name="district1" id="districtd" onchange="change_district()" autocomplete="off" required>
							    <option value="place" disabled selected>District</option>
                  <?php
                  $sqldistrict=mysqli_query($con,"select * from tbl_district");
                  $numdistrict=mysqli_num_rows($sqldistrict);
                  for ($i=0; $i <$numdistrict ; $i++) {
                      $row=mysqli_fetch_array($sqldistrict);

                   ?>
                   <option value="<?php echo $row['district_id']; ?>"><?php echo $row['district']; ?></option>
                   <?php }  ?>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>

					<div class="form-row" id="zone">
						<select name="station" autocomplete="off" required>
						    <option value="zone" disabled selected>Station Zone</option>











        <!--        <?php
                $sqlzone=mysqli_query($con,"select * from tbl_zone");
                $numzone=mysqli_num_rows($sqlzone);
                for ($i=0; $i <$numzone ; $i++) {
                    $row=mysqli_fetch_array($sqlzone);

                 ?>
                 <option value="<?php echo $row['zone_id']; ?>"><?php echo $row['zone']; ?></option>
               <?php }  ?> -->




						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="password" name="pwd" id="pwd" autocomplete="off"  class="pwd" placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

            </div>
						<div class="form-row form-row-4">
							<input type="password" name="cpwd" id="cpwd" autocomplete="off"  class="pwd" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						</div>
					</div>

<!--
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div> -->
					<div class="form-row-last">
						<input type="submit" autocomplete="off"  name="register" class="register" value="Register ">
					</div>
				</div>
			</form>
		</div>
	</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="register.js"></script>
</body>
</html>

<script type="text/javascript">
function change_district()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","ajax.php?district="+document.getElementById("districtd").value,false);
  xmlhttp.send(null);

  document.getElementById("zone").innerHTML=xmlhttp.responseText;

}
</script>


<?php
if (isset($_POST['register'])) {

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$aadhar=$_POST['aadhar'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$house=$_POST['house'];
$street=$_POST['street'];
$area=$_POST['area'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$district=$_POST['district1'];
$station=$_POST['station'];
$pwd=$_POST['cpwd'];

$ins=mysqli_query($con,"INSERT INTO tbl_reg(fname, lname, gender,
 dob, aadhar, mobile, email, house, street, area, city, pin, district_id, zone_id, pwd)
  VALUES ('$fname','$lname','$gender','$dob','$aadhar','$mobile','$email','$house','$street','$area','$city','$pin','$district','$station','$pwd')");


$status=1;
$in=mysqli_query($con,"INSERT INTO tbl_login(email,password,status) VALUES ('$email','$pwd','$status')");
if (!$in) {
	echo "<script>alert('not inserted in login table')</script>";
	// code...
}

if (!$ins) {
	echo "<script>alert('not inserted')</script>";
	// code...
}
else {
echo "<script>alert('Registration Successful')</script>";
}
	}
