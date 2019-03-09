<!DOCTYPE>
<html>
	<head>
		<title>Data Types</title>
	</head>
	<body>
	
		<?php
		
			Class Sample {
				function text() {
					return "This is sample object text.";
				}
				function echoText() {
					echo $this->text();
				}
			}
			
			$sam = new Sample();
			$sam->echoText();
			echo "<br/>";
	
			$x = "This is String.";
			var_dump($x);
			echo "<br/>";
			
			$x = 12;
			var_dump($x);
			echo "<br/>";
			
			$x = 2.3;
			var_dump($x);
			echo "<br/>";
			
			$x = true;
			var_dump($x);
			echo "<br/>";
			
			$x = array("Hridoy", "Fahad", "Robin");
			var_dump($x);
			echo "<br/>";
			
			$x = null;
			var_dump($x);
			echo "<br/>";
			
			/* 
			OUTPUT:
			This is sample object text.
			string(15) "This is String." 
			int(12) 
			float(2.3) 
			bool(true) 
			array(3) { [0]=> string(6) "Hridoy" [1]=> string(5) "Fahad" [2]=> string(5) "Robin" } 
			NULL 
			*/
			
		?>
		
	</body>
</html>