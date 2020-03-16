
<?php
include('../config.php');

if (! empty($_POST["state"])) {
	$a=$_POST["state"];
    $query = "SELECT * FROM tlb_district WHERE stateid =$a";
    $s=mysqli_query($con,$query);
	echo "<option>District</option>";
	while($row=mysqli_fetch_array($s))
	{
    ?>
<option value="<?php echo $row["districtid"]; ?>"><?php echo $row["district"]; ?></option>
<?php
    }
}
?>