<!DOCTYPE html>
<!-- 
Miskat Mahmud 
ID: 40250110
SOEN 287- Winter 2023
Assignment 03
Concordia University
Date:  15 April 2023 
-->

<?php
// Define an array of pets
$hardcoded_pets = array(
    
);

// Read the available pet information from the text file
$available_pets = array();
$file = fopen("available_pet_information.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        $pet_info = explode(":", $line);
        if(trim($pet_info[2]) === "cat"){
            $pet = array(
                "name" => $pet_info[9],
                "image" => $pet_info[12],
                "age" => $pet_info[4],
                "description" => $pet_info[8],
            );
            array_push($available_pets, $pet);
        }
    }
    fclose($file);
} else {
    echo "Error opening file!";
}

// Merge the hardcoded pets and available pets into one array
$pets = array_merge($hardcoded_pets, $available_pets);


?>



<html lang="en">

    <head>
	     <meta charset="utf-8">
		 <meta name="Home" content="Home page">
		 <title>Adopt a Dog/Cat</title>
		 <link rel="stylesheet" href="q8.css">
		 <link rel="stylesheet" href="pets.css">

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
			<h2 style="color: rgb(189, 122, 208)">Available Pets</h2>


			<div class="pets-container">
            <?php foreach($pets as $pet) { ?>
			        
			        <div class="pet-container">
			            <img class="pet-image" src="<?php echo $pet["image"]; ?>" alt="<?php echo $pet["name"]; ?> image">
			            <h2 class="pet-name"><?php echo $pet["name"]; ?></h2>
			            <p class="pet-age">Age: <?php echo $pet["age"]; ?></p>
			            <p class="pet-description"><?php echo $pet["description"]; ?></p>
			            <label for="<?php echo $pet["name"]; ?>" class="checkbox-label">
			                <input type="checkbox" class="checkbox-input" id="<?php echo $pet["name"]; ?>">
			                I'm interested
			            </label>
			        </div>
			        
			    <?php } ?>
			  </div>
			  



			</main>
				
	
			
			
			
       
		
		
	</div>
	</div>
	<footer>
	<?php include 'Footer.php'; ?>
	</footer>
	
	</body>
	
	</html>
	