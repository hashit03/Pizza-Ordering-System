<?php

require ("conn.php") ;
extract ($_POST);


if (isset ($submit))
{
	echo $_FILES['photo']['name'];
	$p="$user"."_".$_FILES['photo']['name'];
	$sql ="INSERT INTO `registeration` (`name`, `username`, `password`, `p_no`, `email`, `gender`, `dob`, `address`,`photo`) VALUES ('$name ', '$user', '$pwd', '$phone', '$email', '$gender', '$dob', '$add','$p')";
    echo "$sql";
	$r= mysqli_query($c,$sql);
	
move_uploaded_file($_FILES['photo']['tmp_name'], "upload/".$user."_".$_FILES['photo']['name']);
}
?>

<html>
<head>
<title>Registration </title>
</head>
<br><br>
<body style="background-color:lightblue;">
<div><br><br>
<b><h2 align="center"><u>Register</u></b>
</div>
<form method="POST"
	 action="<?php
	  			echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" ><br>

		<table border="double" align="center" width="60%"  bgcolor="cyan"><br><br>
		
<tr height="10%"><td width="50%">NAME<td width="60%"><input type="text" size="70%" name="name">
<tr height="10%"><td width="50%">Username<td width="60%"><input type="text" name="user" >
<tr height="10%"><td width="50%">Password<td width="60%"><input type="password" name="pwd" >
<tr height="10%"><td width="50%">PHONE NUMBER<td width="60%"><input type="text" size="70%" name="phone">
<tr height="10%"><td width="50%">Email<td width="60%"><input type="text" size="70%" name="email">
<tr height="10%"><td width="30%">Gender<td><input type="radio" name="gender" value="male" size="10%">male
									    <input type="radio" name="gender" value="female" size="10%">female
<tr height="10%"><td width="30%">D.O.B<td width="60%"><input type="date" id="date" size="70%" name="dob">
<tr height="10%"><td width="30%">Address<td width="60%"><textarea rows="5%" cols="95%" name="add">
                                                        </textarea>
<tr height="10%"><td width="30%">Photo<td width="60%"><input type="file" size="70%" name="photo">
<tr height="10%"><td colspan="2" align="center"><input type="submit" name="submit" value="Register" size="10%">
<tr height="10%"><td width="50%" colspan="2" align="center"><a href="login.php" ><h4>login	</a><pre>
  **-**-**-click here-**-**-**
</pre>

												
</table>

</form>
</body>
</html>
