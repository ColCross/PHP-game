<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>
</head>

<body>

<?php
//How this algorithm works on this page and why we need what we need. First off, the variables.
//Number of players
//number of dice
//total dice
//current player
//previous player(to check for loser)
//current bet value/face: which dice side
//current bet number: number of dices

//Next the arrays
//Based on the variables of players we create one array as active players or not. 1 is active, 0 is inactive or they ran out of dice
//Each player's dice are stored in a cup# array.

//This is a quick overview, I'll go into detail the next php file where the more logical parts come in.

session_start();

$players = $_POST['players'];           //number of players see form below
$_SESSION['players'] = $players;        //save variable to use in next page
$dice = $_POST['dice'];                 //number of dice for each player
$currP = 1;                             //current player is player1
$totalDie = $players * $dice;           //get total die
$_SESSION['totalDie'] = $totalDie;      //save total die to use in next page

//init player array
//initialize first state, generates new variables in of for loop for each cup.
$player = array();
for ($i = 1; $i <= $players; $i++) {
    ${'cup' . $i} = array();                    //equal to $cup1 = newarray, $cup2 = newarray - inside the for loop
    $player[] = 1;
    for ($j = 1; $j <= $dice; $j++) {
        ${'cup' . $i}[] = rand(1, 6);            //fills up our cup123.. with desired number of dice
        $_SESSION['cup' . $i] = ${'cup' . $i};    //save cup123 to use next page. we have all our dice stored in arrays
    }
    echo "<br><br>";
    echo "Player $i: ";
    printDie(${'cup' . $i});
    echo "<br><br>";
}
$_SESSION['player'] = $player;

function printDie($array)
{
    $size = count($array);

    for ($k = 0; $k < $size; $k++) {
        switch ($array[$k]) {
            case 1:
                echo '<img src="images/die1.png" alt="icon" />';
                break;
            case 2:
                echo '<img src="images/die2.png" alt="icon" />';
                break;
            case 3:
                echo '<img src="images/die3.png" alt="icon" />';
                break;
            case 4:
                echo '<img src="images/die4.png" alt="icon" />';
                break;
            case 5:
                echo '<img src="images/die5.png" alt="icon" />';
                break;
            case 6:
                echo '<img src="images/die6.png" alt="icon" />';
                break;
        }
    }
}

?>

<!--below is basic form handling for html.-->
<form action="game2.php" method="post">

    <h1>Current player <?php echo $currP; ?>    </h1>
    <h2>Make a bet</h2>
    <h2>Number of Dice</h2>
    <input type="hidden" name="currP" value=<?php echo '"' . $currP . '">'; ?>
    <select name="currBetNum">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    </select>

    <h3>Value of Dice</h3>
    <select name="currBetVal">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>

    </select>

    <br></br>
    <input type="submit" value="Click" name="submit"/>

</form>
</body>
</html>