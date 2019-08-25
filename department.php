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
$dept_name=$_POST['dept_name'];
$campus=$_POST['campus'];
$floor=$_POST['floor'];

echo $dept_name;
echo '<br>';
echo $campus;
echo '<br>';
echo $floor;
echo '<br>';
$sql="INSERT INTO department (dept_name,campus,floor) VALUES ('$dept_name','$campus','$floor')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>