<!DOCTYPE>
<html>
	<head>
		<title>PHP Loop</title>
	</head>
	<body>
	
		<?php
		
			$x = 0;
			echo "While loop: <br/>";
			while ($x < 10) {
				echo $x . " ";
				$x++;
			}
			
			$y = 0;
			echo "<br/>Do While loop: <br/>";
			do {
				echo $y . " ";
				$y++;
			} while ($y < 10);
			
			echo "<br/>For loop: <br/>";
			for ($i=0; $i<10; $i++) {
				echo $i . " ";
			}
			
			echo "<br/>Foreach loop: <br/>";
			$a = array("Dhaka", "Cumilla", "Rangpur", "Chattragram");
			foreach ($a as $cities) {
				echo $cities . ", ";
			}
			
			
			/* 
			OUTPUT:
			While loop: 
			0 1 2 3 4 5 6 7 8 9 
			Do While loop: 
			0 1 2 3 4 5 6 7 8 9 
			For loop: 
			0 1 2 3 4 5 6 7 8 9
			Foreach loop: 
			Dhaka, Cumilla, Rangpur, Chattragram,
			*/
			
		?>
		
	</body>
</html>