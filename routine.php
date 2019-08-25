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
$course_code=$_POST['course_code'];
$intake= $_POST['intake'];
$section= $_POST['section'];
$semester=$_POST['semester'];
$year=$_POST['year'];
$day=$_POST['day'];
$time=$_POST['time'];
$dept=$_POST['department'];

echo $day;
echo'<br>';
echo $time;
echo'<br>';

echo $course_code;
echo'<br>';
echo $intake;
echo '<br>';
echo $section;
echo '<br>';
echo $semester;
echo'<br>';

echo $year;
echo'<br>';
$sql="INSERT INTO routine (course_code,year,semester,day,timeslot,intake,section,dept_name) VALUES ('$course_code','$year','$semester','$day','$time','$intake','$section','$dept')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>