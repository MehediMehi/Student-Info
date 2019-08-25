<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>ALL STUDENTS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM student";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Name</th><th>Student ID</th><th>Intake</th><th>Section</th><th>Department</th><th>Email</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['name'].'</td>';
	echo'<td align="center">'.$row['s_id'].'</td>';
	echo'<td align="center">'.$row['intake'].'</td>';
	echo'<td align="center">'.$row['section'].'</td>';
	echo'<td align="center">'.$row['dept_name'].'</td>';
	echo'<td align="center">'.$row['email'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>