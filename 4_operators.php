<!DOCTYPE>
<html>
	<head>
		<title>PHP Operators</title>
	</head>
	<body>
	
		<?php
		
			// define(name, value, case_insensitive=false);
			
			define("VALUE", "Hi there! This is Hridoy");
			echo  VALUE;
			
			$a = 6;
			$b = 7;
			$c = 8;
			//$b += $a;
			
			echo "<br/>Sum: " . ($a+$b); 
			echo "<br/>Sub: " . ($a-$b);
			echo "<br/>Div: " . ($a/$b);
			echo "<br/>Mul: " . ($a*$b);
			
			echo "<br/>Assignment<br/>";
			$c += $a;
			echo $c . "<br/>";
			$c -= $a;
			echo $c . "<br/>";
			$c /= $a;
			echo $c . "<br/>";
			$b *= $a;
			echo $b . "<br/>";
			
			$a = 6;
			$b = 7;
			$c = 8;
			
			var_dump($a == $b);
			$a++;
			echo "<br/>";
			var_dump($a == $b);
			$c--;
			echo "<br/>";
			var_dump($b == $c);
			echo "<br/>";
			var_dump($b != $c);
			echo "<br/>";
			
			if ($b == 8 || $c == 7) {
				echo "Yes";
			} else {
				echo "No";
			}
			
			echo "<br/>";
			
			if ($b == 8 && $c == 7) {
				echo "Yes";
			} else {
				echo "No";
			}
			
			echo "<br/>";
			
			if ($b == 7 xor $c == 7) {
				echo "Yes";
			} else {
				echo "No";
			}

			/* 
			OUTPUT:
			Hi there! This is Hridoy
			Sum: 13
			Sub: -1
			Div: 0.85714285714286
			Mul: 42
			Assignment
			14
			8
			1.3333333333333
			42
			bool(false) 
			bool(true) 
			bool(true) 
			bool(false)
			Yes
			No
			No
			*/
			
		?>
		
	</body>
</html>