<?php
session_start();

function checkLogin($username, $password) {

    $accounts = file('loginfile.txt', FILE_IGNORE_NEW_LINES);
    foreach ($accounts as $account){
        list($Username, $Password) = explode(':', $account);
        if($Username == $username && $Password == $password){
            return true;
        }

    }
    return false;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(checkLogin($username, $password)){
        $_SESSION['username'] = $username;
        echo '<script>alert("Logged in successfully. You will be redirected to give away form page.");
        window.location.href = "give_away_form.php";</script>';

        exit();
    }
    else{
        echo '<script>alert("Invalid username or password")</script>';
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
			<h1>          Log In</h1>
			<br>
			
<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="display: flex; flex-direction: column; align-items: center;">
  <label for="username" style="margin-bottom: 10px;">User name:</label>
  <input type="text" name="username" id="username" required style="padding: 10px; border-radius: 5px; border: none; box-shadow: 0px 2px 4px #888888;">

  <label for="password" style="margin-top: 20px; margin-bottom: 10px;">Password:</label>
  <input type="text" name="password" id="password" required style="padding: 10px; border-radius: 5px; border: none; box-shadow: 0px 2px 4px #888888;">

  <input type="submit" value="Sign In" style="background-color: #e65db1; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-top: 20px;">
</form>

<div style="text-align: center; margin-top: 20px;">
  <a href="Create_An_Account.php" style="color: #e65db1; text-decoration: none;">Create An Account</a>
</div>












		  














</pre>
			
		
		</main>
		
		
		
	</div>
	</div>
	
	<footer>
	<?php include 'Footer.php'; ?>
	</footer>
	</body>
	
	</html>
	