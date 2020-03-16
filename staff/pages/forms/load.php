<?php 
    session_start(); 
    include('config.php');
    $s=$_POST["syl"];
    $cls=$_POST["cls"];
    $exam=$_POST["exam"];
    $query="SELECT DISTINCT loginid FROM `studentsub` WHERE syid='$s' ";
    $result = mysqli_query($con,$query);
    $cl="select classname from tbl_class where classname='$cls'";
    $c=mysqli_query($con,$cl);  
    $res=mysqli_fetch_array($c);
    $clas=$res['classname'];
?>
<form name="form2" action="#" method="POST">
   <thead>
      <tr>
        <th> Names</th>
        <th> Marks</th>
      </tr>
    </thead>
  
    <tbody>
<?php
    while($row = mysqli_fetch_array($result)) 
    {
     $a=$row['loginid'] ;
     $b="select fname from studtbl where loginid='$a'AND course='$clas' ";
     $bres=mysqli_query($con,$b);
     //echo mysqli_error($con);

      while($r=mysqli_fetch_array($bres))
      {

        echo '<tr><td>';
        echo  $r['fname'];
        echo '<td>';
        echo"<input type='hidden'  name='log' value='$a'>";
        echo "<input type='text' name='nm'>";
        echo '</td>';
        echo '</td>';
        echo '</tr>';   
      } 
    }
    echo '<br> <br>';
    echo '<tr>  <td colspan="2" align="center">';
      


                  echo '</td>';
                  echo '</tr>';
?>
</tbody>
</form>
