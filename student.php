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
$name= $_POST['name'];
$id= $_POST['id'];
$intake= $_POST['intake'];
$section= $_POST['section'];
$department= $_POST['department'];
$email= $_POST['email'];
echo $name;
echo '<br>';
echo $id;
echo '<br>';
echo $intake;
echo '<br>';
echo $section;
echo '<br>';

echo $email;
echo '<br>';
$sql="INSERT INTO student (name,s_id,intake,section,dept_name,email) VALUES ('$name','$id','$intake','$section','$department','$email')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>