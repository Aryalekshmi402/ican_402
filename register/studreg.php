
<!DOCTYPE html>
<html>
<?php include('../config.php');?>
<head>
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
                               <!-- <li class="nav-item">
                                    <a class="nav-link" href="/ican/index.php"><font color="yellow"><b>Home</b></font></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html"><font color="yellow"><b>Courses</b></font></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html"><font color="yellow"><b>Blog</b></font></a>
                                </li>-->
								 <li class="nav-item">
                                    <a class="nav-link" href="/ican/index.php"><font color="yellow"><b><i>HOME</i></b></font></a>
                                </li>
                                
                               
                             
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
	<!-- Header section end -->

	<div class="page-content" style="background-image:url(img/bgi.jpg)!important;background-size:100%">

		<div class="form-v10-content">

			<form class="form-detail" action="#" method="post" id="myform" onSubmit="return validation()" enctype="multipart/form-data">
<br><br><br><br>
				<div class="form-left">
					<h2></h2>
<br>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="fname" pattern="[A-Z/a-z]{1,20}" id="fname" autocomplete="off"  class="input-text" placeholder="Full Name" "onchange="myFunction()" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="gname" pattern="[A-Z/a-z]{1,20}" id="lname" autocomplete="off"  class="input-text" placeholder="Guardian Name" required>
						</div>
					</div>
					
					<div class="form-row">
						<select name="gender" autocomplete="off" title="Your gender" required>
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
						<input type="text" name="mobile"  class="mobile" id="mobile" autocomplete="off"  placeholder="Mobile number" pattern="[7-9]{1}[0-9]{9}" required>
					</div>

					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" autocomplete="off"  required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>
					
<div class="form-row form-row-2">
							<select name="Course" id="course"  autocomplete="off" required>
							    <option value="place" disabled selected>Course</option>
							
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
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>


				</div>



				<div class="form-right">

					<br><br><br><br>
					
                   <div class="form-row" id="zone">
						<select name="State" autocomplete="off" onchange="getdistrict(this.value);" required>
						    <option value="zone" disabled selected>State</option>
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
							<select name="District" id="district-list" onchange="change_district()" autocomplete="off" required>
							    <option value="place" disabled selected>District</option>
                 
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="pin"  class="zip" id="pin" autocomplete="off"  placeholder="Pin Code" pattern="[0-9]{6}" required>
						</div>
						
						
					</div>
						<div class="form-row">
						<input type="text" name="city" pattern="[A-Z/a-z]{1,20}" class="city" autocomplete="off"  id="city" placeholder="City" required>
					</div>
					
						<div class="form-row form-row-3">
							<input type="file" name="file"  id="file" autocomplete="off"  accept="(jpg?|jpeg|pdf)" class="street" title="upload proof" placeholder="proof" required>
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
    <script src="registr.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
  
  <script type='text/Javascript'>
               function swtalert(swlt,lin)
                {
                  if(swlt==1)
                  {
                    swal({  type: 'success',
                            title: 'Student Added',
							text: 'Please choose your subject'},
                            function()
                            {
                              window.location="/ican/student/pages/forms/addsub.php?lid="+lin;
                            });
                  }
                }
              function swtalt(swlt)
                {
                  if(swlt==0)
                    {
                    swal({  type: 'error',
                            title: 'Student already exists',
                            text: 'Please login'},
                            function()
                            {
                              window.location="/ican/index.php";
                            });
                  }
                }
            </script>
</body>
</html>




<?php
 if(isset($_POST['register']))
{
$fname=$_POST['fname'];
$lname=$_POST['gname'];
$gen=$_POST['gender'];
$db=$_POST['dob'];
$mb=$_POST['mobile'];
$eml=$_POST['email'];
$sn=$_POST['Course'];
$st=$_POST['State'];
$dt=$_POST['District'];
$pin=$_POST['pin'];
$ct=$_POST['city'];
$img=$_FILES["file"]["name"];
$target_dir = "studproof/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$image=$target_file;
$ps=$_POST['pwd'];
$p=md5($ps);

$chl="SELECT emailid from logintbl where emailid='$eml'";
     $chsq=mysqli_query($con,$chl);
     $rchsq=mysqli_fetch_array($chsq,MYSQLI_ASSOC);
     if($rchsq['emailid']!="")
     {
      $swlt=0;
      echo "<script>swtalt($swlt);</script>";
     }
else
{

$sq="insert into logintbl(emailid,password,usertype,status)values('$eml','$p','student','0')";
if(mysqli_query($con,$sq))
{
	$s=mysqli_query($con,"select loginid from logintbl where emailid='$eml' ");
	$r=mysqli_fetch_array($s,MYSQLI_ASSOC);
	$lid=$r['loginid'];
	
    $pq="insert into studtbl(loginid,fname,gname,ge,dob,mob,course,state,district,pin,city,proof)values('$lid','$fname','$lname' ,'$gen','$db' ,'$mb','$sn', '$st', '$dt','$pin', '$ct','$img')";
    if(mysqli_query($con,$pq))
	{
		$swlt=1;
      echo "<script> swtalert($swlt,$lid);
           </script>";
	}
}
}
}
?>