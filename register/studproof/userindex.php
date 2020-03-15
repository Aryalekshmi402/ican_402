<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['name'];
if($login)
{
	?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>A2Z a Corporate Category Flat Bootstrap Responsive Website Template | About :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="A2Z Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- required-js-files-->
	<!--clients slider  -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<!-- //clients slider  -->
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<div class="header-w3layouts">
		<div class="container">

			<div class="logo-nav-agileits">
				<div class="logo-nav-left">
					<h1>
						<a href="index.html">
							<span class="fa fa-home"></span>a2z
							<span class="logo-title">home services</span>
						</a>
					</h1>
				</div>

				<div class="header-grid-left-wthree">
					<div class="h3-title">
						<h3>contact us</h3>
					</div>
					<ul>
						<li>
							<span class="fa fa-envelope" aria-hidden="true"></span>
							<a href="mailto:info@example.com">johnmeenu.john15</a>
						</li>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>9567986054</li>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>9567986054
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="logo-nav-left1">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php echo "<font size=5 color=blue>Welcome $type : $usr_name";?>

					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
								<li>
								<a href="userindex.php">Home</a>
							</li>
							<li class="active">
								<a href="#">about us</a>
							</li>
							<li>
								<a href="#">services</a>
							</li>
							<li>
								<a href="">shopping</a>
							</li>
							
							<li>
								<a href="#">contact us</a>
							</li>
							<li><a href="logout.php"></i>sign out</a>
							</li>
							
							<li class="s-bar">
								<div class="search-w3_agileits">
									<input class="search_box" type="checkbox" id="search_box">
									<label class="icon-search" for="search_box">
										<span class="fa fa-search" aria-hidden="true"></span>
									</label>
									<div class="search_form">
										<form action="#" method="post">
											<input type="search" name="Search" placeholder=" " />
											<input type="submit" value="Search">
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<div class="banner-bg2">
		<div class="banner-info bg3 inner">
			<h3>Welcome</h3>
			
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs-w3l">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.html">Home</a> |
				<span>About us</span>
			</span>
		</div>
	</div>
	<!-- inner-banner-bottom -->
	<div class="w3ls-section">
		<div class="container">
			<div class="col-md-6 inner-banner">
				<h4 class="title-about about text-center">leave it to us
					<span>complete </span>trusted 
					<span>services
					</span>
				</h4>
			</div>
			<div class="col-md-6 inner-main-bg">
				<div class="inner-bg-layer"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //inner-banner-bottom  -->
	<!-- about bottom -->
	<div class="agile-about-main">
		<div class="col-md-4 about-left">
			<div class="about-main-bg text-center">
				<h4 class="about-title">Why</h4>
				<h4 class="sub">
					<span>c</span>hoose
					<span>u</span>s?</h4>
			</div>
		</div>
		<div class="col-md-8 about-bottom-g1">
			<h4>One Stop Solution for your Complete Home Maintenance</h4>
			<!-- <h4>get easy home repairs and upgrades with professional home service providers</h4> your complete home solution.-->
			<div class="about-grid">
				<div class="about-bottom-right">
					<div class="abouthome-grid">
						
					</div>
					<div class="about-bottom">
						<h5>Low Cost Repairs</h5>
						<p>
Appliance repair can be a large investment, especially if its your major appliances that break down or require frequent maintenance.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="about-bottom-right">
					<div class="abouthome-grid">
						
					</div>
					<div class="about-bottom">
						<h5>Repair Of All Domestic Appliances</h5>
						<p>
AtoZ Services provides a comprehensive repair service for most makes and models of domestic appliances.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" about-bottom-right">
					<div class="abouthome-grid">
						
					</div>
					<div class="about-bottom">
						<h5>Qualified & Expert Services</h5>
						<p>
We continually updating our technicians training in order to ensure that your repairs will be completed by a knowledgeable technician.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" about-bottom-right">
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="abt-img">
				<img src="images/a1.png" alt="" class="img-responsive" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //about bottom-->
	<!-- Stats -->
	
					
				
	<!-- //Stats -->
	<!-- about-slid -->
	
	<!-- //about-slid -->
	<!-- what we do -->
	
						
	<!-- //what we do -->

	<!-- team -->
	<
	<!-- //team -->

	<!--client-->

	<!-- footer -->
	<div class="footer-main-w3_agile">
		<div class="footer-dot">
			<div class="container">
				<div class="footer-bottom">
					<div class="col-md-4 col-sm-6 col-xs-6 footer-grid1 address">
						<h4>Contact Info</h4>
						<ul>
							<li>
								<span class="fa fa-home" aria-hidden="true"></span>
								<p>1234k Avenue,block-4,New York City.</p>
							</li>
							<li>
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<a href="mailto:info@example.com">info@example.com</a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span>
								<p>+1234 567 892</p>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 res">
						<h4>services</h4>
						<ul>
							<li>
								<a href="#">appliance repair</a>
							</li>
							<li>
								<a href="#">home improvement</a>
							</li>
							<li>
								<a href="#">home maintenance</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 ftr-img">
						<h4>latest Posts</h4>
						<ul>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t3.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
							<li>
								<a href="single.html">
									<img src="images/t4.jpg" alt=" " class="img-responsive" />
								</a>
							</li>
						</ul>
					</div>
					
					<div class="clearfix"></div>
				</div>
				
				</div>
			</div>
		</div>
	</div>
	<div class="cpy-footer">
		<div class="container">
			<div class="footer-top">
				<div class="logo-nav-left footer-top1">
					<h2>
						<a href="index.html">
							<span class="fa fa-home logo-ftr"></span>a2z
							<span class="logo-title">home services</span>
						</a>
					</h2>
				</div>
				<div class="footer-social">
					<h4>connect with us</h4>
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		

	</div>
	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- clients slider-->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay:true,
				navigation: true,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //clients slider-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	
	<script src="js/SmoothScroll.min.js"></script>
	<!-- Numscroller -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>
<?php
}
else
header("location:signin.html");
?>