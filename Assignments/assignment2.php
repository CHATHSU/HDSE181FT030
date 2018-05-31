<html>
<head><title>Login</title></head>
<body>
	<form name="frmLogin" method="post" action="#">
	<tr>User Name:</tr>
	<input type="text" name="txtUID"/></br>
	<tr>Password:</tr>
	<input type="text" name="txtPW"/></br>
	<input type="submit" name="btnLogin" value="Login"/></br>
	</form>


<?php
	if (isset($_COOKIE["user"]))
	{
		header('Location:assignmentWelcomePage.php');
	}
	else
	{
		if (isset($_REQUEST["btnLogin"]))
		{
			$ID = $_REQUEST["txtUID"];
			$PW = $_REQUEST["txtPW"];
			$con= mysqli_connect("localhost","root","");
			mysqli_select_db($con,"system_security");

			$sql = "SELECT * FROM login WHERE ID = '$ID' AND password = '$PW'";
			$result = mysqli_query($con,$sql);

			if($row = mysqli_fetch_array($result))
			{
				echo "GG";
				setcookie("user", $ID, time()+360);
				header('Location:assignmentWelcomePage.php');
			}
		else
		{
			echo "INVALID PASSWORD OR USERNAME!";
		}
		}
	}
?>
</body>
</html>