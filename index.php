<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<!--PUT CSS HERE-->"/>
</head>

<body>

<h1>
    <?php
    echo "Liar's Dice"
    ?>
</h1>
<h2>
    <?php
    echo "How to play: Place a bet on how many of the die you think <br>is in the game including your own and
                the other players'. <br>For example: I bet that there are 4 2's. <br>Depending on whose turn it is,
                the player may decide <br>to bid or call bluff. If a player guesses correctly, each player loses<br>
                a die. Last one standing will be the winner."
    ?>
</h2>
<form action="game.php" method="POST">
    Number of Players:
    <select class="numPlayers">
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>
    <br/>
    Number of Dice:
    <select class="numDice">
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select>
    <br/>
    <input type="submit" value="Play" onclick="window.location.href='index.php'"/>
</form>

<?php
$numPlayers = 2;
$numDice = 3;
if (isset($_POST['submit'])) {
    $numPlayers = $_POST["numPlayers"];
    $numDice = $_POST["numDice"];
}

?>
</body>
</html>