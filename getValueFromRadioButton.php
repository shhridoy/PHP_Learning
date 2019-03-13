
<!DOCTYPE>
<html>
	<head>
		<title>Getting value from Radio Button</title>
	</head>
	<body>
	
		<?php
		
			if(isset($_POST['gender'])) {
				$gender = $_POST['gender'];
				echo "Gender is : " . $gender;
			}
		
		?>
		
		<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Gender : </td>
					<td>
						<input type="radio" name="gender" value="Male"/>Male
						<input type="radio" name="gender" value="Female"/>Female
						<input type="radio" name="gender" value="Other"/>Other
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Submit"/>
						<input type="reset" value="Clear"/>
					</td>
				</tr>
			</table>
		</form>

	</body>
</html>