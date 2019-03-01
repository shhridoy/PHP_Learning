<!DOCTYPE>
<html>
	<head>
		<title>Variables and output</title>
	</head>
	<body>
	
		<?php
		
			$a = 5;
			$b = 7;
			echo "Sum: " . ($a+$b);
			echo "<br/>";
			
			$name = "Hridoy";
			$profession = "Student";
			echo $name . " is a " . $profession;
			echo "<br/>";
			
			$x = 5.0;
			$y = 6.5;
			echo "Float sum: " . ($x + $y);
			
			echo "<br/>", "This ", "is ", "multiple echo";
			
			print "<br/>". "This is print";
			
			//print doesn't support multiple output
			
			/* 
			OUTPUT:
			Sum: 12
			Hridoy is a Student
			Float sum: 11.5
			This is multiple echo
			This is print
			*/
			
		?>
		
	</body>
</html>