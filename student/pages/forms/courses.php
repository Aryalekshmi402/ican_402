<?php

	include('../../../config.php');
	
	if (!empty($_POST["sy"])) 
		{
			$a=$_POST["sy"];
			$lin=$_POST["li"];
			$q = "SELECT * FROM `studtbl` WHERE loginid=$lin";
			$s1=mysqli_query($con,$q);
			$res=mysqli_fetch_array($s1);
			$cls=$res['course'];
    		$query = "SELECT * FROM syllabustbl WHERE syid =$a";
    		$s=mysqli_query($con,$query);
			$result=mysqli_fetch_array($s);
			$syl = $result['Name'];
			if($syl=='KERALA')
			{
				$quer = "SELECT * FROM kerala_tbl where classid=$cls";
				$s1=mysqli_query($con,$quer);
				$count=mysqli_num_rows($s1);
				if($count>0)
				{
					while($result1=mysqli_fetch_array($s1))
					{
                        $t=$result1['type'];
					    $a="select subject_name from tbl_subject_master where subject_id=$t";
                        $s=mysqli_query($con,$a);
                        $row=mysqli_fetch_array($s);
                        $p=$row['subject_name'];

?>
						<input type="checkbox" name="course[]" value="<?php echo  $t; ?>"> <?php echo $p; ?> <br>
<?php
					}
				}
				else
				{
				     echo "<h3>No Courses Available</h3>";	
				}
			}
			else if($syl=='ICSE')
			{
				$quer1 = "SELECT * FROM icse_tbl where classid=$cls";
				$s2=mysqli_query($con,$quer1);
				$count=mysqli_num_rows($s2);
				if($count>0)
				{
					while($result1=mysqli_fetch_array($s2))
					{
                        $t=$result1['type'];
                        $a="select subject_name from tbl_subject_master where subject_id=$t";
                        $s=mysqli_query($con,$a);
                        $row=mysqli_fetch_array($s);
                        $p=$row['subject_name'];
?>
						<input type="checkbox" name="course[]" value="<?php echo  $t; ?>"> <?php echo $p; ?> <br>
<?php
					}
				}
				else
				{
				     echo "<h3>No Courses Available</h3>";	
				}
			}
			else if($syl=='CBSE')
			{
				$quer2 = "SELECT * FROM cbse_tbl where classid=$cls";
				$s3=mysqli_query($con,$quer2);
				$count=mysqli_num_rows($s3);
				if($count>0)
				{
					while($result2=mysqli_fetch_array($s3))
					{
                        $t=$result2['type'];
                        $a="select subject_name from tbl_subject_master where subject_id=$t";
                        $s=mysqli_query($con,$a);
                        $row=mysqli_fetch_array($s);
                        $p=$row['subject_name'];
?>
						<input type="checkbox" name="course[]" value="<?php echo  $t; ?>"> <?php echo $p; ?>  <br>
<?php
					}
				}
				else
				{
					echo "<h3>No Courses Available</h3>";	
				}
			}
		}
		
?>