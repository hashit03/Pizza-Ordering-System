<?php

require("conn.php");

$sql = "SELECT * FROM `registeration`"; 
$r = mysqli_query($c,$sql);

echo '<table border="double" width="70%" align="center" bgcolor="lightyellow">';
echo "<tr><th>id<th><th>coustmer_name<th>phone_no<th>email<th>dob<th>address<th>photo";
while($show = mysqli_fetch_array($r))
{
	echo "<tr align='center'><td>$show[0]";
	echo "<td>$show[1]";
	echo "<td>$show[2]";
	echo "<td>$show[3]";
	echo "<td>$show[4]";
	echo "<td>$show[5]";
	echo "<td>$show[6]";
	echo "<td><a herf='detail_photo.php?a=$show[6]'>
	          <img src='upload/"."$show[6]' height='70' width='70'></a>";

}
echo '</table>';


?>