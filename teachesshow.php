<!DOCTYPE html>
<html>
<head>
	<title>Teacher's Courses</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>COURSES TAKEN BY TEACHERS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM teaches";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Teacher ID</th><th>Course Code</th><th>Department</th><th>Intake</th><th>Section</th><th>Year</th><th>Semester</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['t_id'].'</td>';
	echo'<td align="center">'.$row['course_code'].'</td>';
	echo'<td align="center">'.$row['dept_name'].'</td>';
	echo'<td align="center">'.$row['intake'].'</td>';
	echo'<td align="center">'.$row['section'].'</td>';
	echo'<td align="center">'.$row['year'].'</td>';
	echo'<td align="center">'.$row['semester'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>