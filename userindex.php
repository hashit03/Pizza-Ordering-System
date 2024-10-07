<?php
@session_start();
echo $_SESSION['username'];
echo "<a href='logout.php'>logout</a>";
?>
<html>
<body>
<h1> THIS IS USERINDEX PAGE</H1>
</body>
</html>