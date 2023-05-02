<?php
session_start();

// If the user is not logged in, redirect them to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $username = $_SESSION['username'];
   $type = $_POST['breed'];
   $breed = $_POST['breedtype'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $along = $_POST['getsalong'];
   $suitable = $_POST['suitable'];
   $addition = $_POST['additional']; 
   $petname = $_POST['pet_name'];
   $nameOwner = $_POST['Owner_name'];
   $email = $_POST['email'];

   $name = 'available_pet_information.txt';
   $lines = file($name);
   $count = count($lines);
   $count++;
   


   $file = fopen($name, 'a');
   fwrite($file, $count.":".$username.":".$type.":".$breed.":".$age.":".$gender.":".$along.":".$suitable.":".$addition.":".$petname.":".$nameOwner.":".$email.":"."pictures/noavailable.jpg"."\n");
   fclose($file);

   echo '<script>alert("Your pet is up for adoption now!")</script>';
   



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
      <title>Pet Adoption Form</title>
      <link rel="stylesheet" href="q8.css">
      <link rel="stylesheet" href="CssForNavigationBar.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="website.js" ></script>

   </head>
   <body>
      
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
         <h1>Have a pet to give away?</h1>
         <form id="my-form" onsubmit="return validateGiveAwayForm()" method="post">
            <label for="breed">Pet type:</label>
            <select id="breed" name="breed">
               <option value=""> -- Select an option -- </option>
               <option value="dog">Dog</option>
               <option value="cat">Cat</option>
            </select>
            <br><br>
            <label for="breedtype">Dog/Cat breed:</label>
            <input type="text" id="breedtype" name="breedtype" size=16 >
            
            <h3>Choose the age range:</h3>
            <input type="checkbox" id="age_1" name="age" value="Puppy/Kitten (0-1 year)">
            <label for="age_1">Puppy/Kitten (0-1 year)</label>
            <input type="checkbox" id="age_2" name="age" value="Young (1-3 years)">
            <label for="age_2">Young (1-3 years)</label>
            <input type="checkbox" id="age_3" name="age" value="Adult (3+ years)">
            <label for="age_3">Adult (3+ years)</label><br>
         
            <br>
            
               <h3>Pet gender</h3>
			  
			
            <input type="radio" id="genderChoice1" name="gender" value="Male" >
            <label for="genderChoice1">Male</label> 
			<input type="radio" id="genderChoice2" name="gender" value="Female" >
            <label for="genderChoice2">Female</label> 
			<br>
			
            
               <h3>Gets along with other pets?</h3>
            
			<input type="radio" id="alongChoice1" name="getsalong" value="YesAlong" >
            <label for="alongChoice1">Yes</label> 
			<input type="radio" id="alongChoice2" name="getsalong" value="NoAlong" >
            <label for="alongChoice2">No</label> 
            <br>
            
               <h3>Suitable for family with small children?</h3>
           
            <input id="suitableChoice1" name="suitable" type="radio" value="YesSuitable">
            <label for="suitableChoice1">Yes</label>
            <input id="suitableChoice2" name="suitable" type="radio" value="NoSuitable" >
            <label for="suitableChoice2">No</label>
            <br>
            <br>
            <label for="textarea1">Additional Information:</label>
            <br>
            <textarea id="textarea1" name="additional" rows="5" style="width: 35%; text-align: left;" placeholder="Enter Text Here(Type 'No' if there is nothing to add)"></textarea>
            <br>
            <label for="PetName">Pet name: </label>
            <input type="text" id="PetName" placeholder="Enter your pet name" name="pet_name">
            <br><br>
            <label for="Ownername">Current owner's name: </label>
            <input type="text" id="Ownername" placeholder="Enter your full name" name="Owner_name">
            <br><br>
            <label for="input_email">Owner's current email:</label>
            <input id="input_email" type="email" name="email" placeholder="test@domain.com">
            <br>
            <br>
            <input type="submit" value="Submit" style="background-color: #c17ca2; border-radius: 25px; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">
<input type="reset" value="Clear" style="background-color: #6a5acd; border-radius: 25px; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">

         </form>

         <pre>









         </pre>
      </main>
      <aside class="right">
         <a href="https://pethavenmn.org/about-us/programs/"  target="_blank"><img src="pictures/Canva-Cute-Pet-Dog.jpg" alt="dogcat" height="300" width="300"> </a>
			<br><br><a href="https://www.lovetoknowpets.com/cats/adopt-kittens-for-free"  target="_blank"><img src="pictures/kitten.jpg" alt="family" height="300" width="300"> </a>

      </aside>
      
      
   </div>
   <footer>
	<?php include 'Footer.php'; ?>
	</footer>
 
   </body>
</html>


   