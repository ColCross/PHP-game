<!DOCTYPE html>
<html>
<head>
<title>Project 2</title>


</head>

<body>
	<?php
	
	
		function countarray($array, $target){
			$total = 0;
			foreach($array as $value){
				if($value == $target){
					$total++;
				}
			}
			return $total;
		}
		function roll(&$array){
			foreach($array as &$value){
				$value = rand(1,6);
			}
			return $array;
		}
		
		function printDie($array){
			
			$size = count($array);
			
			for($k = 0; $k<$size; $k++){
				switch($array[$k]){
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
						echo '<img src="images/die5" alt="icon" />';
						break;
					case 6: 
						echo '<img src="images/die6.png" alt="icon" />';
						break;
				}
			}
		}
		
		
		session_start();
		
		$players = $_SESSION['players'];
		$totalDie = $_SESSION['totalDie'];
		$player = $_SESSION['player'];
	
		echo "Number of players $players";
		echo "<br><br>";
		echo "Total number of die $totalDie";
		echo "<br><br>";
		print_r($player);
		echo "<br><br>";
		
		$currP = $_POST['currP'];
		$prevP = $_SESSION['prevP'];
		echo "Current player $currP";
		echo " Prev player $prevP";
		
		
		for($i=0; $i<$players; $i++){
			if($player[$i] == 1){
				$i++;
				${'cup'.$i} = $_SESSION['cup'.$i];
				echo "<br><br>";
				echo "Player $i: ";
				printDie(${'cup'.$i});
				echo "<br><br>";
				$i--;
			}
		}
		
		
		
		
		$currBetNum = $_SESSION['currBetNum'];
		$currBetVal = $_SESSION['currBetVal'];
		
		echo "Current bet is:  ";
		echo " $currBetNum -- $currBetVal 's";
		
		
		
		
		
		$x = 0;
		for($i=0; $i<$players; $i++){
			if($player[$i] == 1){
				$i++;
				$x+= countarray(${'cup'.$i}, $currBetVal);
				$i--;
			}
		}
		echo "<br><br>";
		echo "Total matches of all active players $x";
		echo "<br><br>";
		
		if($x == $currBetNum){
			echo "Player $prevP wasn't bluffing. Player $currP loses a dice!";
			array_pop(${'cup'.$currP});
			$totalDie--;
		}
		else{
			echo "Player $currP doesn't fall for bluffs. Player $prevP loses a dice!";
			array_pop(${'cup'.$prevP});
			$totalDie--;
		}
		
		
		
		$count = 1;
		while($count <= $players){
			if (empty(${'cup'.$count})) {
				$count--;
				$player[$count] = 0;
				$count++;
				
				if($players == 1){
					callWinner();
				}
			}
			echo "<br><br>";
			echo "Player $count: ";
			printDie(${'cup'.$count});
			
			
			roll(${'cup'.$count});
			echo "<br><br>";
			
			
			$_SESSION['cup'.$count] = ${'cup'.$count};
			
			echo "<br><br>";
			
			echo "<br><br>";
			echo "<br><br>";
			$count++;
		}
		
		
		
		
		
		
		if ($count == 1){
			
		}
		do{
		$currP = rand(1,$players);
		$currP--;
		}
		while ($player[$currP] == 0);
		$currP++;
		
	
		$_SESSION['players'] = $players;
		$_SESSION['totalDie'] = $totalDie;
		$_SESSION['player'] = $player;
		
		
	?>


	<form action="dicegame4.php" method="post">
	<input type="hidden" name="currP" value= <?php echo '"'.$currP.'">'; ?>
	<input type = "submit" value = "ReRoll!" name = "submit1"/>
	</form>



</body>
</html>