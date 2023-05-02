<?php
session_start();

$fileName = "loginfile.txt";

function checkk_username($username){
	if(!ctype_alnum($username)){
		return false;
	}
	return true;
}


function check_username($username, $fileName){
	$file = fopen($fileName, "r");
	while(!feof($file)){
		$line = fgets($file);
		$parts = explode(":", $line);
		if($parts[0] == $username){
			return true;
		}
	}
	
	fclose($file);
	
	return false;
}



function check_password($password){
	if(strlen($password) < 4 || !ctype_alnum($password)){
		return false;
	}
	return preg_match('/^(?=.*[A-Za-z])(?=.*\d).*$/', $password);
}



if($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!checkk_username($username)){
		echo '<script>alert("Username can only contain letters and digits.")</script>';
	}
	else if(check_username($username, $fileName)){
		echo '<script>alert("UserName already exists. Please enter a new username")</script>';
	}
	else if(!check_password($password)){
		echo '<script>alert("Password should be atleast 4 characters long consisting only letters and digits and atleast one digit and one letter.")</script>';

	}
	else {
		$file = fopen($fileName, "a");
		fwrite($file, $username.":".$password."\n");
		fclose($file);

		echo '<script>alert("Account created successfully.");
		 window.location.href = "login.php";</script>';

		exit();
	}
}

?>




<!DOCTYPE html>
<!-- 
Miskat Mahmud 
ID: 40250110
SOEN 287- Winter 2023
Assignment 03
Concordia University
Date:  15 April 2023 
-->



<html lang="en">

    <head>
	     <meta charset="utf-8">
		 <meta name="Home" content="Home page">
		 <title>Adopt a Dog/Cat</title>
		 <link rel="stylesheet" href="q8.css">
		 <link rel="stylesheet" href="CssForNavigationBar.css">
		 <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <script src="website.js" defer></script>

	</head>
	
    <body>
	<div class="container"> 
	
	<header>	<?php include 'Header.php'; ?>
</header>
	
	<div class="main">
		<aside class="left">
			<div class="nav">

<nav>
<?php include 'NavBar.php'; ?>
</nav>
</div>
		</aside>
		<main>
			<h1>Create an Account</h1>
			
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div style="display:flex; flex-direction: column; align-items: center;">
		
		<label style="font-size: 16px; font-weight: bold;">Username:</label>
		<input type="text" name="username" required style="margin-bottom: 10px; padding: 10px; border-radius: 20px; border: none; box-shadow: 0px 2px 4px #888888;"><br>
		<label style="font-size: 16px; font-weight: bold;">Password:</label>
		<input type="text" name="password" required style="margin-bottom: 10px; padding: 10px; border-radius: 20px; border: none; box-shadow: 0px 2px 4px #888888;"><br>
		<button type="submit" style="background-color: #ff69b4; color: #fff; font-size: 16px; font-weight: bold; border-radius: 20px; padding: 10px 20px; border: none; box-shadow: 0px 2px 4px #888888;">Create Account</button>
	</div>
</form>
<span style="color: #888; font-size: 14px;">Already have an account? <a href="login.php" style="color: purple; text-decoration: none;">Log in here</a></span>



		  
























</pre>
			
		
		</main>
		
		
		
	</div>
	</div>
	
	<footer>
	<?php include 'Footer.php'; ?>
	</footer>
	</body>
	
	</html>
	