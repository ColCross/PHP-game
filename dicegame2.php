<!DOCTYPE html>
<html>
<head>
<title>Project 2</title>


</head>

<body>


	<form action="dicegame3.php" method="post">
	
	<h1>Players</h1>
	<select name="players">
		<option value="2">two</option>
		<option value="3">three</option>
		<option value="4">four</option>
		<option value="5">five</option>
		<option value="6">six</option>
	</select>
	
	
	<h1>Enter Number of Dice</h1>
	<select name="dice">
		<option value="3">Three</option>
		<option value="4">Four</option>
		<option value="5">five</option>
		<option value="6">six</option>
		<option value="7">seven</option>
		<option value="8">eight</option>
	</select>
	
	<br></br>
	<input type = "submit" value = "Click" name = "submit"/>

</form>

<?php
	session_start();
	

	
?>





</body>
</html>