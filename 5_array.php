<!DOCTYPE>
<html>
	<head>
		<title>PHP Arrays</title>
	</head>
	<body>
	
		<?php
		
			
			$arr = array(3, 44, 55, 33, 55, 5);
			for ($i=0; $i<count($arr); $i++) {
				echo $arr[$i] . " ";
			}
			echo "<br/>";
			
			sort($arr);
			for ($i=0; $i<count($arr); $i++) {
				echo $arr[$i] . " ";
			}
			echo "<br/>";
			
			rsort($arr);
			for ($i=0; $i<count($arr); $i++) {
				echo $arr[$i] . " ";
			}
			echo "<br/>";
			
			$ages = array("Korim"=>"26", "Rahim"=>"28", "Mofiz"=>"30");
			foreach($ages as $x => $age) {
				echo "Key = " . $x . ", Age = " . $age;
				echo "<br/>";
			}
			
			asort($ages);
			ksort($ages);
			foreach($ages as $x => $age) {
				echo "Key = " . $x . ", Age = " . $age;
				echo "<br/>";
			}
			
			$cars = array(
				array("BMW", 14),
				array("Ferrari", 50, "Awesome", "I wanna buy one."),
				array("Primio", 10, "Good")
			);
			
			for ($row=0; $row<count($cars); $row++) {
				echo "<p>Row Number $row</p>";
				echo "<ul>";
				for ($col=0; $col<count($cars[$row]); $col++) {
					echo "<li>" . $cars[$row][$col]. "</li>";
				}
				echo "</ul>";
			}
			
			/* 
			OUTPUT:
			3 44 55 33 55 5 
3 5 33 44 55 55 
55 55 44 33 5 3 
Key = Korim, Age = 26
Key = Rahim, Age = 28
Key = Mofiz, Age = 30
Key = Korim, Age = 26
Key = Mofiz, Age = 30
Key = Rahim, Age = 28
Row Number 0

BMW
14
Row Number 1

Ferrari
50
Awesome
I wanna buy one.
Row Number 2

Primio
10
Good
			*/
			
		?>
		
	</body>
</html>