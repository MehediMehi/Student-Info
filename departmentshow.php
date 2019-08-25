<!DOCTYPE html>
<html>
<head>
	<title>All Departments</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>DEPARTMENTS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM department";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>Department Name</th><th>Campus</th><th>Floor</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['dept_name'].'</td>';
	echo'<td align="center">'.$row['campus'].'</td>';
	echo'<td align="center">'.$row['floor'].'</td>';

	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>