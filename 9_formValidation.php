<?php
	$errname = $erremail = $errwebsite = $errcomment = $errgender = "";
	$name = $email = $website = $comment = $gender = "";
			
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		if(empty($_POST["name"])) {
			$errname = "Name is required!";
		} else {
			$name = validate($_POST["name"]);
		}
		
		if(empty($_POST["email"])) {
			$erremail = "Email is required!";
		} elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
			$erremail = "Invalid E-mail format!";
		} else {
			$email = validate($_POST["email"]);
		}
		
		if(empty($_POST["website"])) {
			$errwebsite = "Website is required!";
		} elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
			$errwebsite = "Invalid Website format!";
		} else {
			$website = validate($_POST["website"]);
		}
		
		if(empty($_POST["gender"])) {
			$errgender = "Gender is required!";
		} else {
			$gender = validate($_POST["gender"]);
		}
		
		$comment = validate($_POST["comment"]);
	}
	
	function validate($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function check($name, $item) {
		$text = "";
		if(empty($_POST[$name])) {
			$text = $item . " is required.";
		}
		return $text;
	}
?>

<!DOCTYPE>
<html>
	<head>
		<title>REQUEST_METHOD POST GET</title>
	</head>
	<body>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<table>
			
				<p style="color:red">* Required Field</p>
			
				<tr>
					<td><strong>Name </strong></td>
					<td><input type="text" name="name" /><span style="color:red">*<?php echo $errname; ?></span></td>
				</tr>
				<tr>
					<td><strong>E-mail </strong></td>
					<td><input type="text" name="email" /><span style="color:red">*<?php echo $erremail; ?></span></td>
				</tr>
				<tr>
					<td><strong>Website </strong></td>
					<td><input type="text" name="website" /><span style="color:red">*<?php echo $errwebsite; ?></span></td>
				</tr>
				<tr>
					<td><strong>Comment </strong></td>
					<td><textarea name="comment" rows="5" cols="40"></textarea></td>
				</tr>
				<tr>
					<td><strong>Gender </strong></td>
					<td>
						<input type="radio" name="gender" value="Female" />Female
						<input type="radio" name="gender" value="Male" />Male
						<span style="color:red">*<?php echo $errgender; ?></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" /></td>

				</tr>
			</table>
		</form>
		
		<?php
			echo "<strong>Name: </strong>".$name."<br/>";
			echo "<strong>E-mail: </strong>".$email."<br/>";
			echo "<strong>Website: </strong>".$website."<br/>";
			echo "<strong>Comment: </strong>".$comment."<br/>";
			echo "<strong>Gender: </strong>".$gender."<br/>";
		?>
		
	</body>
</html>