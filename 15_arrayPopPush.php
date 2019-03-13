
<!DOCTYPE>
<html>
	<head>
		<title>Array Pop & Push</title>
	</head>
	<body>
	
		
		<?php
			
			$car = array("BMW", "Audi", "Lamborgini");
			
			array_pop($car);
			array_push($car, "Primio", "Suzuki");
			
			print("<pre>");
			print_r($car);
			print("</pre>");
			
			
			/* OUTPUT
			Array
				(
					[0] => BMW
					[1] => Audi
					[2] => Primio
					[3] => Suzuki
				)
			*/
			
		?>
		
	</body>
</html>