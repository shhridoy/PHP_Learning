
<!DOCTYPE>
<html>
	<head>
		<title>Getting value from Checkbox</title>
	</head>
	<body>
	
		<?php
		
			if(isset($_POST['lang'])) {
				$lang = $_POST['lang'];
				echo "Prepered language is : ";
				foreach($lang as $l=>$value) {
					echo $value.", ";
				}
			}
		
		?>
		
		<form action="" method="post" name="myform" id="myform">
			<table>
				<tr>
					<td>Programming Language : </td>
					<td>
						<input type="checkbox" name="lang[]" value="PHP"/>PHP
						<input type="checkbox" name="lang[]" value="Java"/>Java
						<input type="checkbox" name="lang[]" value="C#"/>C#
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