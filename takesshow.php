<!DOCTYPE html>
<html>
<head>
	<title>Student's Courses</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>COURSES TAKEN BY STUDENTS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM takes";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Student ID</th><th>Course Code</th><th>Status</th><th>Semester</th><th>Year</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['s_id'].'</td>';
	echo'<td align="center">'.$row['course_code'].'</td>';
	echo'<td align="center">'.$row['STATUS'].'</td>';
	echo'<td align="center">'.$row['semester'].'</td>';
	echo'<td align="center">'.$row['year'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>