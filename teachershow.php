<!DOCTYPE html>
<html>
<head>
	<title>Teachers</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>TEACHERS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM teacher";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Teacher ID</th><th>Teacher Name</th><th>Department</th><th>Designation</th><th>Email</th><th>Phone</th><th>Salary</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['t_id'].'</td>';
	echo'<td align="center">'.$row['t_name'].'</td>';
	echo'<td align="center">'.$row['dept_name'].'</td>';
	echo'<td align="center">'.$row['designation'].'</td>';
	echo'<td align="center">'.$row['email'].'</td>';
	echo'<td align="center">'.$row['phone'].'</td>';
	echo'<td align="center">'.$row['salary'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>