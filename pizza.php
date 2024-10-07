<?php
include 'conn.php';
extract($_POST);
if(isset($su))
{
	
$toppings = ($t);
$top=""; 
foreach($toppings as $top1) 
{ 
$top.= $top1." , "; 
} 	

$sql="INSERT INTO `order` (`c_name`, `p_no`, `pi_size`, `pi_type`, `topping`, `quantity`) 
                   VALUES ('$cn', '$pn', '$ps', '$pt', '$top', '$qu')";

echo "$sql";
$r=mysqli_query($c,$sql);


echo "<body background='pi.jpg' >";
echo "<center><b>YOUR ORDER DETAIL</b></center>";
echo "<br>";
echo "<center>";
echo "<table border='double' align='center' height='70%' width='70%' bgcolor='skyblue'";
echo "<tr align='center'><td align='center' width='30%'>COUSTMER NAME<td width='50%' align='center'>$cn";

echo "<tr align='center'><td width='30%' >PHONE NUMBER<td>$pn";

echo "<tr align='center'><td width='30%' >PIZZA TYPE<td>$pt";

echo "<tr align='center'><td width='30%' >PIZZA SIZE<td>$ps";

echo "<tr align='center'><td width='30%' >QUANTITY<td>$qu<td><b>OFFER VALID: </b><br/><h4><i>";
if($qu>4)
{
 $b= "one large pizza free";
 echo $b;
}
elseif ($qu>2) 
{
	$b= "one coke free";
	echo $b;
}
else
   { 
   	$b="no bonus";
   	echo $b;
   }

echo "<tr align='center'><td width='30%' >TOPPINGS<td>";
foreach ($t as $value) {
	echo $value;
	echo "<br>";
}

echo "<tr align='center'><td width='30%' >PRICE<td>";
if($ps=='Large')
	{
		$x=500;
	    echo $x;
	}
elseif ($ps=='Medium') 
	{
		$x=300;
	    echo $x;
	}
else
	{
		$x=200;
	    echo $x;
	}

echo "<tr align='center'><td width='30%' >TOTAL PRICE<td><b>quantity * price : </b><br/><br/>";
if($ps=='Large')
{
	echo '500'." * ".$qu." = ";
    $y= 500*$qu;
    echo $y;
}
elseif ($ps=='Medium')
{
	echo '300'." * ".$qu." = ";
    $y=300*$qu;
    echo $y;
} 
else
{
	echo '200'." * ".$qu." = ";
    $y=200*$qu;
    echo $y;
}

echo "<tr align='center'><td width='30%'>GST<td>";
if($ps=='Large')
{
    $z=(500*$qu)*.18;
    echo $z;
}
elseif ($ps=='Medium')
{
    $z=(300*$qu)*.18;
    echo $z;
} 
else
{
    $z=(200*$qu)*.18;
    echo $z;
}

echo "<tr align='center'><td width='30%'>SERVICE TAX<td>";
if($ps=='Large')
{
    $v=(500*$qu)*.14;
    echo $v;
}
elseif ($ps=='Medium')
{
    $v=(300*$qu)*.14;
    echo $v;
} 
else
{
    $v=(200*$qu)*.14;
    echo $v;
}

echo "<tr align='center'><td width='30%'><H3>TOTAL AMOUNT TO BE PAID<td><H3>";
if($ps=='Large')
{
   $w=(500*$qu)+(500*$qu)*.18+(500*$qu)*.14;
   echo $w;
}
elseif ($ps=='Medium')
{
    $w=(300*$qu)+(300*$qu)*.18+(300*$qu)*.14;
    echo $w;
} 
else
{
    $w=(200*$qu)+(200*$qu)*.18+(200*$qu)*.14;
    echo $w;
}

echo "</table>";
echo "<br>";

echo "<h4><i>THANKU FOR VISITING , HAVE A GREAT DAY....</i></h4>";
echo "<input type='button' value='Print' onclick='window.print()'>";

$query="INSERT INTO `billing`(`c_name`, `price`,`offer`, `t_price`, `gst`, `s_tax`, `bill_amt`) 
                      VALUES ('$cn','$x','$b','$y','$z','$v','$w')";
echo "$query";
$r=mysqli_query($c,$query);

}
else
{
?>

<html>
<head>
<title>pizza</title>
</head>
<br><br><br><br>
<marquee behavior="scroll" direction="right" size="20%" >
	<h3><i>******_____WELCOME TO ONLINE PIZZA ORDER :-)_____******</i></h3></marquee><br><br><br>
<body background="pizza.jpg" >
<div><br><br>
</div>
<form method="POST"
	 action="<?php
	  			echo $_SERVER['PHP_SELF'];?>" ><br>

<b><h2><u>PIZZA ORDER</u></b>
		<table border="double" width="50%" height="50%" bgcolor="lightyellow"><br><br>
<tr height="10%"><td width="30%">COUSTMER NAME<td width="60%"><input type="text" size="70%" name="cn">
<tr height="10%"><td width="30%">PHONE NUMBER<td width="60%"><input type="text" size="70%" name="pn">
<tr height="10%"><td width="30%">PIZZA SIZE<td width="60%" ><select  name="ps">
																<option>--select--
																<option>Small
																<option>Medium
																<option>Large</option></select>
<tr height="10%"><td width="30%">PIZZA TYPE<td><input type="radio" name="pt" value="veg" size="10%">Veg
									    <input type="radio" name="pt" value="non-veg" size="10%">Non-Veg
<tr height="10%"><td width="30%">TOPPINGS<td width="60%"><input type="checkbox" size="70%" name="t[]" value="Tomato															">Tomato
														<br><input type="checkbox" size="70%" name="t[]" value="Onion">Onion
														<br><input type="checkbox" size="70%" name="t[]" value="Capsicum">Capsicum
														<br><input type="checkbox" size="70%" name="t[]" value="Corn">Corn
<tr height="10%"><td width="30%">QUANTITY<td width="60%" ><select  name="qu">	
														  <?php
														  for($i=1;$i<=10;$i++)
														  {
														  echo "<option>$i</option>";
														  }
														  ?>
														  </select>	
<tr height="10%"><td colspan="2" align="center"><input type="submit" name="su" value="CONFIRM" size="10%">
												 <input type="reset" name="re" value="RESET" size="10%">
</table>
</form>
</body>
</html>

<?php
}

?>