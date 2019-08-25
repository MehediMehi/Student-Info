<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<style>
body {
	background-color: #E4F7F5;
}
</style>
<body>
	<h2 align="center" style="font-family: stoke"><b>RESULTS</h2>

<?php
$con =mysqli_connect("localhost","root","","studentmanagement");
$sql="SELECT *FROM result";
$result=mysqli_query($con,$sql);
echo '<table border="2" align="center">';
echo "<tr><th>s_id</th><th>course_code</th><th>grade_point</th>";
echo "</tr>";
while($row=mysqli_fetch_array($result))
{
	echo'<tr>';
	echo'<td align="center">'.$row['s_id'].'</td>';
	echo'<td align="center">'.$row['course_code'].'</td>';
	echo'<td align="center">'.$row['grade_point'].'</td>';
	echo'<br>';
	echo'</tr>';
}
echo '</table>';
?>

<a href="view.html"><h3 align="center" style="font-family: gabriela"><font color="blue">Back to view info</h3></a>
</body>
</html>