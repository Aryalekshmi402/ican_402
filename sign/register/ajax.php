<?php
include('../config/conn.php');
$district=$_GET["district"];

if ($district!="")
 {

   $res=mysqli_query($con,"select * from tbl_zone where district_id=$district");
  echo "<select name=station required>";
  echo " <option disabled selected>Station Zone</option>";
  while ($row=mysqli_fetch_array($res))

  {
    ?>
    <option value="<?php echo $row['zone_id']; ?>"><?php echo $row['zone']; ?></option>
<?php
  }
  echo "</select>";
}
 ?>
