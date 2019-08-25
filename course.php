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
$title=$_POST['title'];
$prereq=$_POST['prereq'];
$department=$_POST['department'];
$credit=$_POST['credit'];

echo $course_code;
echo'<br>';

echo $title;
echo '<br>';

echo $prereq;
echo'<br>';

echo $department;
echo'<br>';

echo $credit;
echo'<br>';
$sql="INSERT INTO course (course_code,title,prerequesite,dept_name,credit) VALUES ('$course_code','$title','$prereq','$department','$credit')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }

?>
