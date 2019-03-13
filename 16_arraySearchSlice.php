
<!DOCTYPE>
<html>
	<head>
		<title>Array Search & Slice</title>
	</head>
	<body>

		<?php
			
			$color = array(
				"a" => "red",
				"b" => "green",
				"c" => "blue"
			);
			
			$arr = array("R", "S", "C", "D");
			$slice = array_slice($arr, 1, 3);
			//$slice = array_slice($arr, 3);
			
			
			print("<pre>");
			print_r($slice);
			print("</pre>");
			
			if(isset($_POST['text'])){
				global $txt;
				$txt = $_POST['text'];
				$result = array_search($txt, $color);
				echo "You have searched by $txt and your key is $result";
			}
			
		?>
		
		<form action="16_arraySearchSlice.php" method="post">
			<input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
			<input type="submit" value="submit"/>
		</form>
	
		
	</body>
</html>