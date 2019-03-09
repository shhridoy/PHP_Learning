<!DOCTYPE>
<html>
	<head>
		<title>PHP String</title>
	</head>
	<body>
	
		<?php
		
			$x = "PHP is nice.";
			echo "Original String: " . $x . "<br/>";
			echo "String length: " . strlen($x) . "<br/>";
			echo "Words in String: " . str_word_count($x) . "<br/>";
			echo "Reverse String: " . strrev($x) . "<br/>";
			echo "Position of 'is' in the String: " . strpos($x, "is") . "<br/>";
			echo "Replace String: " . str_replace("PHP", "JAVA", $x) . "<br/>";
			
			
			
			/* 
			OUTPUT:
			Original String: PHP is nice.
			String length: 12
			Words in String: 3
			Reverse String: .ecin si PHP
			Position of 'is' in the String: 4
			Replace String: JAVA is nice.
			*/
			
		?>
		
	</body>
</html>