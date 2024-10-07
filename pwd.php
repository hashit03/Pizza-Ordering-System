<?php

require ("conn.php") ;
extract ($_POST);


if (isset ($done))
{
	
	$sql ="SELECT password FROM `registeration` WHERE username='$user' and  email='$email' and dob='$dob'";
	$r= mysqli_query($c,$sql);
	if (!$r) 
	{
		die("error".mysqli_error());
	}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<table border="double" align="center"  height="50%" width="50%" bgcolor="lightgreen">';
echo "<tr height='20%'><th>password";

while($show=mysqli_fetch_array($r))
{
	echo "<tr align='center' height='50%'><td width='20%'>$show[password]";
}
echo "</table>";
}
else
{

?>
<html>
<head>
<title>forgot password </title>
</head>
<br><br>
<body style="background-color: #f7786b;">
<div><br><br>
<b><h2 align="center"><u>Register</u></b>
</div>
<form method="POST"
	 action="<?php
	  			echo $_SERVER['PHP_SELF'];?>" ><br>

		<table border="double" align="center" width="60%"  bgcolor="pink"><br><br>
<tr height="10%"><td width="50%">Username<td width="60%"><input type="text" name="user" >
<tr height="10%"><td width="50%">Email<td width="60%"><input type="text" size="70%" name="email">
<tr height="10%"><td width="30%">D.O.B<td width="60%"><input type="date" id="date" size="70%" name="dob">
<tr height="10%"><td colspan="2" align="center"><input type="submit" name="done" value="done" size="10%">
</table>

</form>
</body>
</html>

<?php
}
?>




