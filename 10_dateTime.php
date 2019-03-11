<!DOCTYPE>
<html>
	<head>
		<title>REQUEST_METHOD POST GET</title>
	</head>
	<body>
	
		
		<?php
			echo "Date is: ". date("d-m-Y") ."<br/>";
			echo "Day is: ". date("l") ."<br/>";
			echo "Default Time is: ". date("h:i:sa") ."<br/>";
			date_default_timezone_set("Asia/Dhaka");
			echo "Local Time is: ". date("h:i:sa") ."<br/>";
			echo "Time zone: " . date_default_timezone_get() . "<br/>";
		?>
		
	</body>
</html>