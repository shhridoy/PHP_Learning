<!DOCTYPE>
<html>
	<head>
		<title>REQUEST_METHOD POST GET</title>
	</head>
	<body>
	
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			Username: <input type="text" name="username"/>
			<input type="submit" value="Submit"/>
		</form>
	
		<?php
		
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_REQUEST['username'];
				if (empty($name)) {
					echo "<span style='color:red'>Username field must not be empty!!</span>";
				} else {
					echo "<span style='color:green'>You have submitted: " . $name . "</span>";
				}
			}
			
			
		?>
		
		<br/>
		<a href="text.php?msg=Good&txt=Bye">Send Text</a>
		
		<!-- OUTPUT text.php-->
		
		<?php

			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				$msg = $_GET['msg'];
				$txt = $_GET['txt'];
				echo $msg . " " . $txt;
			}

		?>
		
		
	</body>
</html>