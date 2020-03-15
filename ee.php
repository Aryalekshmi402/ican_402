<html>
<head>
</head>
<body>
<form name="fors" method="post" action="#">

<script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
		var dv = document.getElementById("dv");
        dvPassport.style.display = ddlPassport.value == "A" ? "block" : "none";
		dv.style.display = ddlPassport.value == "B" ? "block" : "none";
    }
</script>

<span>Select Class</span>
    <select id = "ddlPassport" onchange = "ShowHideDiv()">
        <option value="A">Class A</option>
        <option value="B">Class B</option>            
    </select>
<hr />
<div id="dvPassport" style="display: none">
   <?php 
   $con=mysqli_connect("localhost","root","","test");
   $result=mysqli_query($con,"select name from student where classid='1'");
   while($row=mysqli_fetch_array($result))
   {
   echo $row['name'];?>:<input type="text" name="name[]"><br><br> <?php }?>
</div>

<input type="submit" name="submit" value="submit">
</form>
</body>
</html>