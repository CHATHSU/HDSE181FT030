<html>
<head><title> Guest Book </title></head>
<body>
	<form name ="Comment:" method = "POST" action = "#">
		<label><h1> Enrer your name: </h1></label>
		<input type = "text" name = "name">
		<label><h1> Enter your comment: </h1></label>
		<textarea cols = "50" rows = "15" name = "comment"> </textarea><br>
		<input type = "submit" name = "btnComment" values = "Submit"/>
 
		</form>

<?php
{
	if (isset($_POST["btnComment"]))
		$name = $_POST["name"];
		$Comment = $_POST["comment"];

		$con= mysqli_connect("localhost","root","");
		mysqli_select_db($con,"system_security");
		$sql = "INSERT INTO hw (name,comment) VALUES('$name','$Comment')";
		$result = mysqli_query($con,$sql);
}
?>

</body>
</html>
