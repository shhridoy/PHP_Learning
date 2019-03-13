
<!DOCTYPE>
<html>
	<head>
		<title>Value from Text Box</title>
	</head>
	<body>
	
		<?php
		
			if(isset($_POST['username'])) {
				$name = $_POST['username'];
				echo "Username is : " . $name;
			}
		
		?>
		
		<script>
		
			function formFunction(){
				var name = document.myform.username.value;
				var showData = "Username : "+name;
				document.getElementById('output').innerHTML = showData;
			}
		
		</script>

		<div id="output"></div>
		<form action="" method="post" name="myform" id="myform" onsubmit="formFunction(); return false;">
			<table>
				<tr>
					<td>Username : </td>
					<td><input type="text" name="username" required="1"/></td>
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