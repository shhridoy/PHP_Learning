
<!DOCTYPE>
<html>
	<head>
		<title>File Handeling</title>
	</head>
	<body>
	
		
		<?php
			// include 'external.php'; 
			// require 'file.php';
			
			$ourFile = fopen("text.txt", "r") or die("File not found!!");
			//echo fread($ourFile, filesize("text.txt"));
			while(!feof($ourFile)) {
				echo fgets($ourFile)."<br/>"; //count every line
				//echo fgetc($ourFile)."<br/>"; count every character
			}
			fclose($ourFile);
		?>
		
	</body>
</html>