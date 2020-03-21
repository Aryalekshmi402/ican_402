
<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/favicon.png">
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
</head>

<body style="background-color: #3b3b1f">
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand logo_1" href="index.html">   </a>
                     <!-- <a class="navbar-brand logo_2" href="index.html"> <img src="img/logo.png" alt="logo"> </a>-->
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse main-menu-item justify-content-end"
                          id="navbarSupportedContent">
                          <ul class="navbar-nav align-items-center">
                              
                              

                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->

    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>

        
      </div>


      <div class="row" style="margin-top: -600px; margin-left: 160px;>
        <div class="col-lg-8" >
          <form class="form-contact contact_form" action="contact.php" method="post" id="contactForm" novalidate="novalidate">
              <h1 style="font-family:'Malgun Gothic Semilight';"><b>Reset Your Password</b></h1>
              <div class="col-lg-8" style="margin-left: 120px;margin-top: 100px;">
                  <form class="form-contact contact_form" action="contact.php" method="post" id="contactForm" novalidate="novalidate">
                      <div class="row">
                          <div class="col-12">

                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter Registered email address'>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <input class="form-control" name="pass" id="name" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your New Password'>
                              </div>
                          </div>

                          <div class="col-12">
                              <div class="form-group">
                                  <input class="form-control" name="rpass" id="subject" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'ReEnter Password'>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mt-3">
                          <button type="submit" value="Reset Password" class="button button-contactForm btn_1" name="save" >Reset Password</button>
                      </div>
                  </form>
              </div>
        
  </section>
  <!-- ================ contact section end ================= -->

<!-- footer part start-->

<!-- footer part end-->

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
<script src="js/jquery.nice-select.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<!-- contact js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
    <!--<script src="js/contact.js"></script>-->
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
    <script type='text/Javascript'>
        function swtalert(swlt)
        {
            if(swlt==0)
            {
                swal({ type: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong' },
                    function()
                    {
                        window.location="contact.php";
                    });
            }
            else if(swlt==2)
            {
                swal({ type: 'error',
                        title: 'Oops!',
                        text: 'New password and re-type password does not match' },
                    function()
                    {
                        window.location="contact.php";
                    });
            }
            else if(swlt==3)
            {
                swal({ type: 'error',
                        title: 'Oops!',
                        text: 'You entered wrong email' },
                    function()
                    {
                        window.location="contact.php";
                    });
            }
            else
            {
                swal({ type: 'success',
                        title: 'Password Changed Successfully',
                        text: 'welcome,now you can login!!!!'},
                    function()
                    {
                        window.location="contact.php";
                    });
            }

        }
    </script>


</body>

</html>
<?php
if(isset($_POST['save']))
{
    $email=$_POST['email'];
    $sq="Select * from logintbl where emailid='$email'";
    $res=mysqli_query($con,$sq);
    $row=mysqli_fetch_array($res);
    $cemail=$row['emailid'];
    // new password
    $ps=$_POST['pass'];
    $pswd=md5($ps);
    $psw=$_POST['rpass'];
    $pa=md5($psw);

   // echo "<script>alert('$email')</script>";

    if(!(strcmp($cemail, $email)))
    {
        if(!(strcmp($pswd, $pa)))
        {
            if(mysqli_query($con,"Update logintbl set password='$pswd' where emailid='$email'"))
            {
                echo "<script>swtalert('1');</script>";
            }
            else
            {
                echo "<script>swtalert('0');</script>";
            }
        }
        else
        {
            echo "<script>swtalert('2');</script>";
        }

    }
    else
    {
        echo "<script>swtalert('3');</script>";
    }

}


?>





