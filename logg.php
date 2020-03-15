<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
  
	<script type='text/Javascript'>
               function swtalert(swlt)
                {
                  if(swlt==1)
                  {
                    swal({  type: 'error',
                            title: 'Invalid login credentials'},
                            function()
                            {
                              window.location="index.php";
                            });
                  }
                  if(swlt==2)
                    {
                    swal({  type: 'error',
                            title: 'User not found',
                            text: 'Please SignUp'},
                            function()
                            {
                              window.location="index.php";
                            });
                  }
                }
            </script>
</head>
</html>
<?php 
	session_start(); 
	$con=mysqli_connect("localhost","root","","ican");
	if(isset($_POST['submit']))
		{
    		$em =$_POST['uname'];
			$pass =$_POST['psw'];
			$pp=md5($pass);
			//echo $u_pass;
			$sql="select * from logintbl where emailid='$em'";
			//echo $sql;

			$result=mysqli_query($con,$sql);
			$rowcount=mysqli_num_rows($result);
			if($rowcount!=0)
				{
					while($row=mysqli_fetch_array($result))
						{
							$dbu_name=$row['emailid'];
							$dbu_pass=$row['password'];
							$dbu_type=$row['usertype'];
							$dbu_status=$row['status'];
							$id=$row['loginid'];
							
							if($dbu_name==$em && $dbu_pass==$pp && $dbu_status==1 )
								{
									$_SESSION['emailid']=$dbu_name;
									$_SESSION['pass']=$dbu_pass;
									$_SESSION['login']="1";
									$_SESSION['loginid']=$id;
									 //echo $_SESSION['login'];
									if($dbu_type=='admin')
										{
											header('Location:adminn/index.php');	
										} 
									else if($dbu_type=='ostaff')
										{
											header('Location:staff/staffhome.php');	
										}								
									else if($dbu_type=='student')
										{
											header('Location:student/studenthome.php');
										}
									else if($dbu_type=='ostudent')
										{
											header('Location:student/studenthome.php');	
										}
									else
										{
										   $err=mysqli_error($con);
										   echo "<script>alert($err);</script>";
										}
								}
							else
       							{
									$swlt=1;
									echo "<script>swtalert($swlt);</script>";
						        }
						}
					}
				else
					{
						 $swlt=2;
						 echo "<script>swtalert($swlt);</script>";
 
					}
	}
?>