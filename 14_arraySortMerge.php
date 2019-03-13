
<!DOCTYPE>
<html>
	<head>
		<title>Array Merge & Sort</title>
	</head>
	<body>
	
		
		<?php
			
			$car = array("BMW", "Audi", "Lamborgini");
			$bike = array("Hero", "Discovery", "Honda");
			
			$allRounder = array(
				"Ban" => "Shakib",
				"Ind" => "Jadeja",
				"Pak" => "Hafeez"
			);
			
			$batsMan = array(
				"Ind" => "Kohli",
				"Aus" => "Warner",
				"Ban" => "Tamim"
			);
			
			$merge = array_merge($car, $bike);
			$merge2 = array_merge($allRounder, $batsMan);
			
			print("<pre>");
			print_r($merge);
			print("</pre>");
			
			print("<pre>");
			print_r($merge2);
			print("</pre>");
			
			array_multisort($car);
			
			print("<pre>");
			print_r($car);
			print("</pre>");
			
			/* OUTPUT
			Array
				(
					[0] => BMW
					[1] => Audi
					[2] => Lamborgini
					[3] => Hero
					[4] => Discovery
					[5] => Honda
				)
			Array
				(
					[Ban] => Tamim
					[Ind] => Kohli
					[Pak] => Hafeez
					[Aus] => Warner
				)
				
			Array
				(
					[0] => Audi
					[1] => BMW
					[2] => Lamborgini
				)
			*/
			
		?>
		
	</body>
</html>