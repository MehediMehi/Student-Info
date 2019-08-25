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
$s_id=$_POST['s_id'];
$course_code=$_POST['course_code'];
$status =$_POST['status'];
$semester=$_POST['semester'];
$year=$_POST['year'];


echo $s_id;
echo'<br>';

echo $course_code;
echo '<br>';

echo $status;
echo'<br>';

echo $semester;
echo'<br>';

echo $year;
echo'<br>';
$sql="INSERT INTO takes (s_id,course_code,status,semester,year) VALUES ('$s_id','$course_code','$status','$semester','$year')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }

?>
