<!DOCTYPE html>
<html>
<head>
	<title>Routine</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>ROUTINE</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM routine";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Course Code</th><th>Year</th><th>Semester</th><th>Day</th><th>Timeslot</th><th>Intake</th><th>section</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['course_code'].'</td>';
	echo'<td align="center">'.$row['year'].'</td>';
	echo'<td align="center">'.$row['semester'].'</td>';
	echo'<td align="center">'.$row['day'].'</td>';
	echo'<td align="center">'.$row['time_slot'].'</td>';
	echo'<td align="center">'.$row['intake'].'</td>';
	echo'<td align="center">'.$row['section'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>