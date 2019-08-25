<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
  if (!$con)
  {
    echo "Not connected";
  }
  else
  {
    echo "Successfully connected";
  }
$s_id= $_POST['s_id'];
$course_code=$_POST['course_code'];
$grade_point=$_POST['grade_point'];

echo $s_id;
echo '<br>';

echo $course_code;
echo '<br>';

echo $grade_point;
echo '<br>';
$sql="INSERT INTO result (s_id,course_code,grade_point) VALUES ('$s_id','$course_code','$grade_point')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>