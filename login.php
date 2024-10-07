<?php

require ("conn.php") ;
extract ($_POST);


if (isset ($submit))
{
	$sql ="SELECT * FROM `registeration` WHERE username='$user' and password='$pwd '";
    echo "$sql";
	$r= mysqli_query($c,$sql);
	if (!$r) 
	{
		die("error".mysql_error());
	}
	
	if(mysqli_num_rows($r)>0)
	
	{
		while($show=mysqli_fetch_array($r))
		{
			if($show['username']=='shamlikv31')
			{
				echo "<center><h3>welcome This account is admin account</center>";
				@session_start();
				$_SESSION['username']=$user;
				header("refresh:2; url=adminindex.php");
			}
			else
			{
			echo "<center><h3>wlcome this is a user account </center>";
		    @session_start();
			$_SESSION['username']=$user;
			header("refresh:2; url=pizza.php");
			}
		}
		
	}
	else
	{
		echo "<center><h3>This is not a valid user... </center>";
		header("refresh:5;url=registration_table.php");
	}
	
}
?>
<html>
<head>
<title>login</title>
</head>
<br><br>
<body style="background-color:lightyellow;">
<div><br><br>
<b><h2 align="center"><u>Register</u></b>
</div>
<form method="POST"
	 action="<?php
	  			echo $_SERVER['PHP_SELF'];?>" ><br>

		<table border="double" align="center" width="60%" height="25%"  bgcolor="white"><br><br>
<tr height="20%"><td width="40%">Username<td width="50%"><input type="text" name="user" >
<tr height="20%"><td width="40%">Password<td width="50%"><input type="password" name="pwd" >
<tr height="10%"><td colspan="2" align="center"><input type="submit" name="submit" value="Register" size="10%">
<tr height="10%"><td width="50%" align="center" colspan="2"><a href="pwd.php"><h4>Forgot Password</a>
												
</table>

</form>
</body>
</html>







