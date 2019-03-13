
<!DOCTYPE>
<html>
	<head>
		<title>Array Column & Combine</title>
	</head>
	<body>
	
		
		<?php
			$account = array(
				array(
					'id' => '200',
					'first_name' => 'Fahad',
					'last_name' => 'Hossen'
				),
				array (
					'id' => '201',
					'first_name' => 'Robin',
					'last_name' => 'Haque'
				),
				array (
					'id' => '202',
					'first_name' => 'Masud',
					'last_name' => 'Rana'
				)
			);
			
			$first_name = array_column($account, 'first_name');
			echo("<pre>");
			print_r($first_name);
			echo("</pre>");
			
			$first_name = array_column($account,'first_name', 'id');
			echo("<pre>");
			print_r($first_name);
			echo("</pre>");
			
			$name = array("Babul", "Pijush", "Rahim");
			$age = array("34", "23", "28");
			
			$combine = array_combine($name, $age);
			
			print("<pre>");
			print_r($combine);
			print("</pre>");
			
			
			/* OUTPUT
			Array
				(
					[0] => Fahad
					[1] => Robin
					[2] => Masud
				)
			Array
				(
					[200] => Fahad
					[201] => Robin
					[202] => Masud
				)
				
			Array
				(
					[Babul] => 34
					[Pijush] => 23
					[Rahim] => 28
				)
			*/
			
		?>
		
	</body>
</html>