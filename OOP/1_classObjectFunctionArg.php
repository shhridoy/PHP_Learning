
<!DOCTYPE>
<html>
	<head>
		<title>PHP OOP</title>
	</head>
	<body>
	
		<?php
		
			class Student{
				private $name;
				private $id;
				private $department;
				private $cgpa;
				private $arr;
				
				public function Student($name, $id, $department, $cgpa) {
					$this->name = $name;
					$this->id = $id;
					$this->department = $department;
					$this->cgpa = $cgpa;
				}
				
				public function printValues() {
					echo "<b>Name :</b> $this->name<br/>";
					echo "<b>ID :</b> $this->id<br/>";
					echo "<b>Department :</b> $this->department<br/>";
					echo "<b>CGPA :</b> $this->cgpa<br/>";
				}
				
				public function getPosition($arr) {
					$this->arr = $arr;
					$i = 1;
					foreach($this->arr as $a) {
						if ($a == $this->name) {
							echo "<br/>Serial is: $i";
						}
						$i++;
					}
					
				}
				
			}
			
			$ar = array("Riad", "Pijush", "DD", "Hridoy", "Shakil", "Rony");
			
			$stObject = new Student("Hridoy", "ASH1501037M", "CSTE", 3.10);
			$stObject->printValues();
			$stObject->getPosition($ar);
			
			/* OUTPUT:
			Name : Hridoy
			ID : ASH1501037M
			Department : CSTE
			CGPA : 3.1

			Serial is: 4
			*/
			
			
		?>
		

	</body>
</html>