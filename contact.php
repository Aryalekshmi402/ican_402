<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
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
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <h1 style="font-family:'Malgun Gothic Semilight';"><b>Reset Your Password</b></h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" style="margin-top: 60px;">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                    </div>
                </div>
              <div class="col-sm-6">
                <div class="form-group" style="margin-top: 60px;">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter new Password' >
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'ReEnter Password'>
                </div>
              </div>
                <div class="col-12">
                    <div class="form-group">

                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Reason'></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3" style="margin-left: 270px; ">
              <button type="submit" class="button button-contactForm btn_1" style="width: 200px;">Reset</button>
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
<script src="js/contact.js"></script>

<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>

</html>