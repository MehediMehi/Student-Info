<?php
$id= $_POST['id'];
$name= $_POST['name'];
$department=$_POST['department'];
$designation=$_POST['designation'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$email= $_POST['email'];
echo $name;
echo '<br>';
echo $id;
echo '<br>';
echo $department;
echo '<br>';
echo $designation;
echo '<br>';
echo $phone;
echo '<br>';
echo $salary;
echo '<br>';
echo $email;
echo '<br>';
$sql="INSERT INTO teacher (t_id,t_name,dept_name,designation,email,phone,salary) VALUES ('$id','$name','$department','$designation','$email','$phone','$salary')";
  if (mysqli_query($con,$sql))
  {
    echo "Inserted Successfully";
  }
  else
  {
    echo "Insertion Failed";
  }
?>