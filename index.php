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
        <br />
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
        <br />
        <br />
        <input type="text" value="Please enter a team name." name="username"/>
        <br />
        Select a team icon.<br />
        <input type="radio" name="icon" value="valor" /><img src="valor.jpg" /><br />
        <input type="radio" name="icon" value="mystic" /><img src="mystic.png" /><br />
        <input type="radio" name="icon" value="valor" /><img src="instinct.png" /><br />

        <br />
        <input type="submit" value="Play" onclick="window.location.href='index.php'" />
    </form>

     <?php
     $numPlayers = 2;
     $numDice = 3;
     $username=$_POST['username'];
     if(isset($_POST['submit'])){
         $numPlayers = $_POST["numPlayers"];
         $numDice = $_POST["numDice"];
         print ($username);
     }
     
     ?>

</body>
</html>



























<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<!--PUT CSS HERE-->" />
</head>

<body>
    <h1>
        <?php
        echo"Liar's Dice"
        ?>
    </h1>
    <h2>
        <?php
        echo "Please click the link to see"
        ?>
        <br />
        <a href="http://www.dicegamedepot.com/dice-n-games-blog/dice-game-rules-liars-dice/">How to Play</a>
        <br />
        Please note this online game is the "single hand liars dice".<br />
        Quick Rules:<br />
        There are X players with Y dice.<br />
        Players bid on what they think is on the table.<br />
        Player 1 says there are three 5's.<br />
        Player 2 MUST raise the number OR call Player 1 out on a bluff.<br />
        If a bluff is called, all players' dice are revealed and if there are<br />
        really three 5's on the table, Player 2 loses a die because Player 1<br />
        was not bluffing. If there are two 5's or four 5's, Player 1 loses<br />
        a die because he guessed incorrectly.<br />
        <br />
        Important rule exclusive to this game: A player must bid a higher quantity of any face.<br />
    </h2>
    <form action="mainmenu2.php" method="POST">        
        Number of Players:<br />
        <input type="radio" name="numPlayers" value="numPlayers" />2
        
        <input type="radio" name="numPlayers" value="numPlayers" />3
       
        <input type="radio" name="numPlayers" value="numPlayers" />4
          
        <input type="radio" name="numPlayers" value="numPlayers" />5
           
        <br />
        Number of Dice:
        <select class="numDice">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        <br />
        <br />
        <input type="submit" value="Play Now" onclick="window.location.href='index.php'" />
    </form>

     <?php
     $numPlayers = 2;
     $numDice = 3;
     if(isset($_POST['submit'])){
         $numPlayers = $_POST["numPlayers"];
         $numDice = $_POST["numDice"];
     }
     
     ?>

?>
</body>
</html>
