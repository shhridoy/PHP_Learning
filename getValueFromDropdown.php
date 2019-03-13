
<!DOCTYPE>
<html>
	<head>
		<title>Getting value from Dropdown</title>
	</head>
	<body>
	
		<?php
		
			if(isset($_POST['submit'])) {
				$coder = $_POST['coder'];
				echo "You're ".$coder." coder.";
			}
		
		?>
		
		<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Programming Language : </td>
					<td>
						<select name="coder">
							<option>Select one</option>
							<option value="Java">Java</option>
							<option value="PHP">PHP</option>
							<option value="C#">C#</option>
							<option value="C++">C++</option>
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