<html>
<body>
<h1> THIS IS ADMININDEX PAGE</H1>
</body>
</html>

<?php
@session_start();
echo $_SESSION['username'];
echo"<br>";
echo"<br>";
echo "<a href='logout.php'><h4>logout</a>";
echo"<br>";
echo"<br>";

echo "<a href='report.php'>coustmer_report</a>";
?>
