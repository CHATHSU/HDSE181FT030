<!DOCTYPE html>
<html>
<head>
	<title></title></head>
	<input type = 'submit' name="Logout"  value = 'Logout'>
<body>

<?php
	
	if(isset($_COOKIE["user"]))
	{
		$user = $_COOKIE["user"];
		echo "WElCOME";
	}
	else
	{
		header('Location : assignment2.php');
	}
	if(isset($_POST["Logout"]))
	{
		setcookie("user","$user",time()-300);
		header("Refresh:0");
	}
?>

</body>
</html>