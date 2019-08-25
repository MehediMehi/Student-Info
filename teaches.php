<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
  if (!$con)
  {
    echo "Not connected\n";
  }
  else
  {
    echo "Successfully connected\n";
  }
$t_id= $_POST['t_id'];
$course_code= $_POST['course_code'];
$department= $_POST['department'];
$intake= $_POST['intake'];
$section= $_POST['section'];
$semester= $_POST['semester'];
$year= $_POST['year'];

echo $t_id;
echo '<br>';
echo $course_code;
echo'<br>';
echo $department;
echo '<br>';
echo $intake;
echo '<br>';
echo $section;
echo '<br>';
echo $semester;
echo'<br>';
echo $year;
echo'<br>';
$sql="INSERT INTO teaches(t_id,course_code,dept_name,intake,section,year,semester) VALUES ('$t_id','$course_code','$department','$intake','$section','$year','$semester')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }

?>