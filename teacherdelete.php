<!DOCTYPE html>
<?php
$t_id=$_POST['t_id'];
echo $s_id;
  $con =mysqli_connect("localhost","root","","studentmanagement");
  if (!$con)
  {
    echo "Not connected";
    echo '<br>';
  }
  else
  {
    echo "Successfully connected";
    echo '<br>';
  }
  
  $sql="DELETE FROM teacher WHERE t_id='$t_id'";
  //echo $sql;
  if (mysqli_query($con,$sql))
  {
		echo "Successfully Deleted";	
  }
  else
  {
    echo "Deletion failed/Couldn't find the required element/sql query failed";
    echo '<br>';
  }
  
?>
<html>
<body align="center">
<br>
<a href="nextofadmin.php">Back to Home</a>
</body>
</html>

