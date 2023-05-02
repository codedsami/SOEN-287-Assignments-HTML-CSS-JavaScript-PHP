<!DOCTYPE html>
<!-- 
Miskat Mahmud 
ID: 40250110
SOEN 287- Winter 2023
Assignment 03
Concordia University
Date:  15 April 2023 
-->

 
<html>
<head>
	<title>Phone Number Validation</title>
</head>
<body>
	<h2>Enter Your Name and Phone Number</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="name" required><br><br>
		Telephone Number: <input type="text" name="phone" required><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
    //Miskat Mahmud
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$pattern = "/^\d{3}-\d{3}-\d{4}$/";
		if (preg_match($pattern, $phone)) {
			echo "Hello " . $name . "! Your phone number is " . $phone . ".";
		} else {
			echo "The format of the entered number is not valid. Please enter a phone number in the format 'ddd-ddd-dddd'.";
		}
	}
	?>
</body>
</html>
