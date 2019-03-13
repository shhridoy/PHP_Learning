
<!DOCTYPE>
<html>
	<head>
		<title>Array Map</title>
	</head>
	<body>
	
		
		<?php
			
			function myFunc($value){
				return ($value+$value);
			}
			$arr = array(1, 2, 3, 4, 5);
			$result = array_map("myFunc", $arr);
			
			print("<pre>");
			print_r($result);
			print("</pre>");
			
			function fun($value) {
				$v = strtoupper($value);
				return $v;
			}
			
			$ar = array(
				"Animal" => "cow",
				"Type" => "mammal"
			);
			
			$r = array_map("fun", $ar);
			
			print("<pre>");
			print_r($r);
			print("</pre>");
			
			/* OUTPUT
			Array
				(
					[0] => 2
					[1] => 4
					[2] => 6
					[3] => 8
					[4] => 10
				)
			Array
				(
					[Animal] => COW
					[Type] => MAMMAL
				)
			*/
			
		?>
		
	</body>
</html>