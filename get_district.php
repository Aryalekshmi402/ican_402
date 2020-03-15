
<?php
$con=mysqli_connect("localhost","root","","ican");

if (! empty($_POST["state"])) {
	$a=$_POST["state"];
    $query = "SELECT * FROM tlb_district WHERE stateid =$a";
    $s=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($s))
	{
    ?>
<option></option>
<option value="<?php echo $row["districtid"]; ?>"><?php echo $row["district"]; ?></option>
<?php
    }
}
?>