<?php
require("conn.php");

$sql = "SELECT * FROM `emp`"; 
	 
$r = mysqli_query($c,$sql);

echo '<table border="double" width="70%" align="center" bgcolor="lightyellow">';
echo "<tr><th>emp_code<th>emp_name<th>salary<th>department<th>designation";

while($show = mysqli_fetch_array($r))

{
	echo "<tr align='center'><td>$show[0]";
	echo "<td>$show[1]";
	echo "<td>$show[2]";
	echo "<td>$show[3]";
	echo "<td>$show[4]";
}


echo '</table>';


?>