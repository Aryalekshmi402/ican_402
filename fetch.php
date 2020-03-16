<?php
session_start(); 
include('config.php');

$l=$_SESSION['loginid'];
if($l)
{
	$res=mysqli_query($con,"select * from studtbl where loginid=$l ");

$result=mysqli_query($con,"select * from tlb_stud where loginid=$l ");

//echo "<script>alert($l);</script>";
if(mysqli_num_rows($res)!=0){
$row=mysqli_fetch_assoc($res);

$fname=$row['fname'];
}
else if(mysqli_num_rows($result)!=0){
$row=mysqli_fetch_assoc($result); 

$fname=$row['fname'];

}
else
{
	echo "<script>alert('error');</script>";
}	
?>

<html>
<head>
    <title> Delegate edit form</title>
</head>
<body>
    Delegate update form  </p>





    <script src="js/libs/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="home">

        <header class="wrapper clearfix">



            <nav id="topnav" role="navigation">
                <div class="menu-toggle">Menu</div>
                <ul class="srt-menu" id="menu-main-navigation">
                    <li><a href="Swift_Landing.html">Home page</a></li>

        </header>
        </section>

        <style>
            form label {
                display: inline-block;
                width: 100px;
                font-weight: bold;
            }
        </style>
        </ul>

        <?php

        $se=" select * from `stafftbl`, `logintbl`, `tlb_district`,`tlb_state` WHERE logintbl.status=0 && logintbl.usertype='staff' && stafftbl.district=tlb_district.districtid && stafftbl.state=tlb_state.stateid";
        $result = mysql_query ($se) or die (mysql_error ());
        while ($row = mysql_fetch_array ($result)){

        ?>

        <form action="fetch.php" method="post">
            Name
            <input type="text" name="Namex" value="<?php echo $row ['Name']; ?> " size=10>
            Username
            <input type="text" name="Username" value="<?php echo $row ['User_name']; ?> " size=10>
            Password
            <input type="text" name="Password" value="<?php echo $row ['User_password']; ?>" size=17>
            <input type="submit" name="submit" value="Update">
        </form>
        <?php
        }
        ?>
        </p>
    </body>
</html>