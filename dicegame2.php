<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>
</head>

<body>

<form action="dicegame3.php" method="post">

    <h1>Players</h1>
    <select name="players">
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
    </select>

    <h1>Enter Number of Dice</h1>

    <select name="dice">
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
    </select>

    <br></br>
    <input type="submit" value="Click" name="submit"/>

</form>

<?php
session_start();
?>

</body>
</html>