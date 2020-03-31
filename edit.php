
<html>
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


<script type="application/javascript" language="javascript">

      function onBtnClick(x){
        if(x==1){
          document.getElementById("txthide1").style.display='block';
          document.getElementById("txthide2").style.display='block';
          document.getElementById("txthide3").style.display='block';
          document.getElementById("txthide4").style.display='block';
          document.getElementById("txtshow1").style.display='none';
          document.getElementById("txtshow2").style.display='none';
          document.getElementById("txtshow3").style.display='none';

        }
        else{
          document.getElementById("txthide").style.display='none';
        }
      }    
    </script>

    <style>
        body{
    margin-top:20px;
    background:#eee;
}

.profile-header {
    position: relative;
    overflow: hidden
}

.profile-header .profile-header-cover {
    background-color: #00b5ec;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0
}

.profile-header .profile-header-cover:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .75) 100%)
}

.profile-header .profile-header-content {
    color: #fff;
    padding: 25px
}

.profile-header-img {
    float: left;
    width: 120px;
    height: 120px;
    overflow: hidden;
    position: relative;
    z-index: 10;
    margin: 0 0 -20px;
    padding: 3px;
    border-radius: 4px;
    background: #fff
}

.profile-header-img img {
    max-width: 100%
}

.profile-header-info h4 {
    font-weight: 500;
    color: #fff
}

.profile-header-img+.profile-header-info {
    margin-left: 140px
}

.profile-header .profile-header-content,
.profile-header .profile-header-tab {
    position: relative
}

.b-minus-1,
.b-minus-10,
.b-minus-2,
.b-minus-3,
.b-minus-4,
.b-minus-5,
.b-minus-6,
.b-minus-7,
.b-minus-8,
.b-minus-9,
.b-plus-1,
.b-plus-10,
.b-plus-2,
.b-plus-3,
.b-plus-4,
.b-plus-5,
.b-plus-6,
.b-plus-7,
.b-plus-8,
.b-plus-9,
.l-minus-1,
.l-minus-2,
.l-minus-3,
.l-minus-4,
.l-minus-5,
.l-minus-6,
.l-minus-7,
.l-minus-8,
.l-minus-9,
.l-plus-1,
.l-plus-10,
.l-plus-2,
.l-plus-3,
.l-plus-4,
.l-plus-5,
.l-plus-6,
.l-plus-7,
.l-plus-8,
.l-plus-9,
.r-minus-1,
.r-minus-10,
.r-minus-2,
.r-minus-3,
.r-minus-4,
.r-minus-5,
.r-minus-6,
.r-minus-7,
.r-minus-8,
.r-minus-9,
.r-plus-1,
.r-plus-10,
.r-plus-2,
.r-plus-3,
.r-plus-4,
.r-plus-5,
.r-plus-6,
.r-plus-7,
.r-plus-8,
.r-plus-9,
.t-minus-1,
.t-minus-10,
.t-minus-2,
.t-minus-3,
.t-minus-4,
.t-minus-5,
.t-minus-6,
.t-minus-7,
.t-minus-8,
.t-minus-9,
.t-plus-1,
.t-plus-10,
.t-plus-2,
.t-plus-3,
.t-plus-4,
.t-plus-5,
.t-plus-6,
.t-plus-7,
.t-plus-8,
.t-plus-9 {
    position: relative!important
}

.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -10px 0 0;
    padding: 0 0 0 140px;
    white-space: nowrap;
    border-radius: 0
}

.text-ellipsis,
.text-nowrap {
    white-space: nowrap!important
}

.profile-header .profile-header-tab>li {
    display: inline-block;
    margin: 0
}

.profile-header .profile-header-tab>li>a {
    display: block;
    color: #929ba1;
    line-height: 20px;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: 700;
    font-size: 12px;
    border: none
}

.profile-header .profile-header-tab>li.active>a,
.profile-header .profile-header-tab>li>a.active {
    color: #242a30
}

.profile-content {
    padding: 25px;
    border-radius: 4px
}

.profile-content:after,
.profile-content:before {
    content: '';
    display: table;
    clear: both
}

.profile-content .tab-content,
.profile-content .tab-pane {
    background: 0 0
}

.profile-left {
    width: 200px;
    float: left
}

.profile-right {
    margin-left: 240px;
    padding-right: 20px
}

.profile-image {
    height: 175px;
    line-height: 175px;
    text-align: center;
    font-size: 72px;
    margin-bottom: 10px;
    border: 2px solid #E2E7EB;
    overflow: hidden;
    border-radius: 4px
}

.profile-image img {
    display: block;
    max-width: 100%
}

.profile-highlight {
    padding: 12px 15px;
    background: #FEFDE1;
    border-radius: 4px
}

.profile-highlight h4 {
    margin: 0 0 7px;
    font-size: 12px;
    font-weight: 700
}

.table.table-profile>thead>tr>th {
    border-bottom: none!important
}

.table.table-profile>thead>tr>th h4 {
    font-size: 20px;
    margin-top: 0
}

.table.table-profile>thead>tr>th h4 small {
    display: block;
    font-size: 12px;
    font-weight: 400;
    margin-top: 5px
}

.table.table-profile>tbody>tr>td,
.table.table-profile>thead>tr>th {
    border: none;
    padding-top: 7px;
    padding-bottom: 7px;
    color: #242a30;
    background: 0 0
}

.table.table-profile>tbody>tr>td.field {
    width: 20%;
    text-align: right;
    font-weight: 600;
    color: #2d353c
}

.table.table-profile>tbody>tr.highlight>td {
    border-top: 1px solid #b9c3ca;
    border-bottom: 1px solid #b9c3ca
}

.table.table-profile>tbody>tr.divider>td {
    padding: 0!important;
    height: 10px
}

.profile-section+.profile-section {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #b9c3ca
}

.profile-section:after,
.profile-section:before {
    content: '';
    display: table;
    clear: both
}

.profile-section .title {
    font-size: 20px;
    margin: 0 0 15px
}

.profile-section .title small {
    font-weight: 400
}

body.flat-black {
    background: #E7E7E7
}

.flat-black .navbar.navbar-inverse {
    background: #212121
}

.flat-black .navbar.navbar-inverse .navbar-form .form-control {
    background: #4a4a4a;
    border-color: #4a4a4a
}

.flat-black .sidebar,
.flat-black .sidebar-bg {
    background: #3A3A3A
}

.flat-black .page-with-light-sidebar .sidebar,
.flat-black .page-with-light-sidebar .sidebar-bg {
    background: #fff
}

.flat-black .sidebar .nav>li>a {
    color: #b2b2b2
}

.flat-black .sidebar.sidebar-grid .nav>li>a {
    border-bottom: 1px solid #474747;
    border-top: 1px solid #474747
}

.flat-black .sidebar .active .sub-menu>li.active>a,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li>a:focus,
.flat-black .sidebar .nav>li>a:hover,
.flat-black .sidebar .sub-menu>li>a:focus,
.flat-black .sidebar .sub-menu>li>a:hover,
.sidebar .nav>li.nav-profile>a {
    color: #fff
}

.flat-black .sidebar .sub-menu>li>a,
.flat-black .sidebar .sub-menu>li>a:before {
    color: #999
}

.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
.flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
    color: #000
}

.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
.flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
    background: #323232
}

.flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
.flat-black .sidebar .nav>li.active>a,
.flat-black .sidebar .nav>li.active>a:focus,
.flat-black .sidebar .nav>li.active>a:hover,
.flat-black .sidebar .nav>li.nav-profile,
.flat-black .sidebar .sub-menu>li.has-sub>a:before,
.flat-black .sidebar .sub-menu>li:before,
.flat-black .sidebar .sub-menu>li>a:after {
    background: #2A2A2A
}

.flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
.flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
    background: #3e3e3e
}

.flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
    background: rgba(42, 42, 42, .75)
}

.bg-white {
    background-color: #fff!important;
}
.p-10 {
    padding: 10px!important;
}
.media.media-xs .media-object {
    width: 32px;
}
.m-b-2 {
    margin-bottom: 2px!important;
}
.media>.media-left, .media>.pull-left {
    padding-right: 15px;
}
.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
select.form-control:not([size]):not([multiple]) {
    height: 34px;
}
.form-control.input-inline {
    display: inline;
    width: auto;
    padding: 0 7px;
}
    </style>
</head>

<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div id="content" class="content content-full-width">
                <!-- begin profile -->
                <div class="profile">
                   <div class="profile-header">
                      <!-- BEGIN profile-header-cover -->
                      <div class="profile-header-cover"></div>
                      <!-- END profile-header-cover -->
                      <!-- BEGIN profile-header-content -->
                      <div class="profile-header-content">
                         <!-- BEGIN profile-header-img -->
                         <div class="profile-header-img">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                         </div>
                         <!-- END profile-header-img -->
                         <!-- BEGIN profile-header-info -->
                         <div class="profile-header-info">
                            <h4 class="m-t-10 m-b-5">John Doe</h4>
                            <p class="m-b-10">Web And Frontend Developer</p>
                            <a href="#" class="btn btn-xs btn-success">Edit Profile</a>
                         </div>
                         <!-- END profile-header-info -->
                      </div>
                      <!-- END profile-header-content -->
                      <!-- BEGIN profile-header-tab -->
                      <ul class="profile-header-tab nav nav-tabs">
                         <li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">POSTS</a></li>
                         <li class="nav-item"><a href="#profile-about" class="nav-link active show" data-toggle="tab">ABOUT</a></li>
                         <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                         <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                         <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                      </ul>
                      <!-- END profile-header-tab -->
                   </div>
                </div>
                <!-- end profile -->
                <!-- begin profile-content -->
                <div class="profile-content">
                   <!-- begin tab-content -->
                   <div class="tab-content p-0">
    
                      <!-- begin #profile-about tab -->
                      <div class="tab-pane fade in active show" id="profile-about" style="margin-left: 190px;">
                         <!-- begin table -->
                         <div class="table-responsive" style="margin-left: 190px;">
                         <form action="edit.php" method="post" id="myform"enctype="multipart/form-data">
                            <table class="table table-profile" >
                               <thead >
                                  <tr>
                                     <th></th>
                                     <th>
                                        <h4>Edit Your Profile<small></small></h4>
                                     </th>
                                  </tr>
                               </thead>
                               <tbody >
                                  
                                  <tr class="divider" >
                                     <td colspan="2"></td>
                                  </tr>
                                  <tr>
                                     <td class="field">Name</td>
                                     <td><input type="text" style="margin-left: 100px;" ></td>
                                  </tr>
                                  <tr>
                                     <td class="field">Guardian</td>
                                     <td><input type="text" style="margin-left: 100px;"></td>
                                  </tr>
                                  <tr>
                                    <td class="field">Gender</td>
                                    <td>
                                       <select class="form-control input-inline input-xs" name="gender" style="margin-left: 100px;">
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="field">Birthdate</td>
                                    <td>
                                       <select class="form-control input-inline input-xs" name="day" style="margin-left: 100px;">
                                          <option value="04" selected="">04</option>
                                       </select>
                                       -
                                       <select class="form-control input-inline input-xs" name="month">
                                          <option value="11" selected="">11</option>
                                       </select>
                                       -
                                       <select class="form-control input-inline input-xs" name="year">
                                          <option value="1989" selected="">1989</option>
                                       </select>
                                    </td>
                                 </tr>
                                  <tr>
                                     <td class="field">mobile</td>
                                     <td><input type="text" style="margin-left: 100px;"></td>
                                  </tr>

                                  <tr>
                                    <td class="field">State</td>
                                    <td><input type="text" style="margin-left: 100px;"></td>
                                 </tr>
                                 <tr>
                                    <td class="field">District</td>
                                    <td><input type="text" style="margin-left: 100px;"></td>
                                 </tr>

                                 <tr>
                                    <td class="field">Pin</td>
                                    <td><input type="text" style="margin-left: 100px;"></td>
                                 </tr>
                                 <tr>
                                    <td class="field">City</td>
                                    <td><input type="text" style="margin-left: 100px;"></td>
                                 </tr>
                                 <tr>
                                    <td class="field">Proof</td>
                                    <td><input type="text" style="margin-left: 100px;"></td>
                                 </tr>
                                  <tr class="highlight">
                                     <td class="field">&nbsp;</td>
                                     <td class="p-t-10 p-b-10">
                                        <button type="submit" class="btn btn-primary width-150" style="margin-left: 80px;">Update</button>
                                        <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5"style="margin-left: 40px;">Cancel</button>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                           </form>
                         </div>
                         <!-- end table -->
                      </div>
                      <!-- end #profile-about tab -->
                   </div>
                   <!-- end tab-content -->
                </div>
                <!-- end profile-content -->
             </div>
          </div>
       </div>
    </div>
            </div>
        </div>
    </div>
</body>
</html>