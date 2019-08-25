<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="SELECT *FROM admin";
$result=mysqli_query($con,$sql);
$f=0;
while($row=mysqli_fetch_array($result))
{
	//echo"<tr>";
	//echo $row['username'];
	//echo '<br>';
	//echo $row['password'];
	if(($row['username']==$username) && ($row['password']==$password))
	{
		//echo "successfully logged in\n";
		//echo '<a href="nextofadmin.html">Go to students</a>';
		header("Location: nextofadmin.html");
		die();
	
		break;
		$f=1;
	}
}
	if($f==0)
		echo "Wrong username or password\n";

	echo'<br>';
	echo"</tr>";
	

?>