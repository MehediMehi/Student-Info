<!DOCTYPE html>
<?php
$course_code=$_POST['course_code'];
echo $course_code;
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
  
  $sql="DELETE FROM course_code WHERE course_code='$course_code'";
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

