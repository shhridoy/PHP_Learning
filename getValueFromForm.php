
<!DOCTYPE>
<html>
	<head>
		<title>Getting data from form</title>
	</head>
	<body>
	
		<?php
		
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$department = $_POST['department'];
				$gender = $_POST['gender'];
				$language = $_POST['language'];
			}
			
		?>
		
		<table>
			<tr>
				<td colspan="2" align="center">OUTPUT</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Department</td>
				<td><?php echo $department; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $gender; ?></td>
			</tr>
			<tr>
				<td>Language</td>
				<td><?php echo $language; ?></td>
			</tr>
		</table>
		
		<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" required="1"/></td>
				</tr>
				<tr>
					<td>Department</td>
					<td>
						<input type="checkbox" name="department" value="CSTE"/>CSTE
						<input type="checkbox" name="department" value="SE"/>SE
						<input type="checkbox" name="department" value="ICE"/>ICE
						<input type="checkbox" name="department" value="Math"/>Math
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="Male"/>Male
						<input type="radio" name="gender" value="Female"/>Female
						<input type="radio" name="gender" value="Other"/>Other
					</td>
				</tr>
				<tr>
					<td>Language</td>
					<td>
						<select name="language" required="1">
							<option value="">Select One</option>
							<option value="JAVA">Java</option>
							<option value="C#">C#</option>
							<option value="PHP">PHP</option>
							<option value="C++">C++</option>
							<option value="C">C</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit"/>
						<input type="reset" value="Clear"/>
					</td>
				</tr>
			</table>
		</form>

	</body>
</html>