<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $type = $_POST['preference'];

   if ($type == 'dog'){
      header('Location: dogs.php');
   }
   else if($type == 'cat'){
      header('Location: cats.php');
   }
   else {
      header('Location: Browse_Available_Pets.php');
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
      <title>Pet Adoption Form</title>
      <link rel="stylesheet" href="q8.css">
      <link rel="stylesheet" href="CssForNavigationBar.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="website.js" defer></script>

      
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
         <h1>Find a Dog/Cat</h1>
         <form id="form"  onsubmit="return validateForm()" method = 'post'>
            <label for="preference">Pet preference:</label>
            <select id="preference" name="preference" onchange="disableOption()" >
               <option value=""> -- Select an option -- </option>
               <option value="dog">Dog</option>
               <option value="cat">Cat</option>
               <option value="doesn't matter">Doesn't Matter</option>
               </select>
            <br><br>

            <h3>Choose your preferred dog breeds:</h3>
            <input  id="breed_1" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_1">Labrador Retriever</label>
            <input  id="breed_2" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_2">German Shepherd</label>
            <input  id="breed_3" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_3">Golden Retriever</label>
            <input id="breed_4" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_4">Bulldog</label>
            <input  id="breed_5" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_5">Beagle</label><br>
            <input  id="breed_6" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_6">Poodle</label>
            <input  id="breed_7" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_7">Rottweiler</label>
            <input id="breed_8" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_8">Siberian Husky</label>
            <input  id="breed_9" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_9">Dachshund</label>
            <input  id="breed_10" name="checkbox" type="checkbox" class="dogBreed" disabled>
            <label for="breed_10">Doesn't matter</label><br><br>
            



            <h3>Choose your preferred cat breeds:</h3>
           
            <input type="checkbox" id="breed_11" name="checkbox" class="catBreed" disabled>
            <label for="breed_11">Siamese</label>
            <input type="checkbox" id="breed_22" name="checkbox" class="catBreed" disabled>
            <label for="breed_22">Persian</label>
            <input type="checkbox" id="breed_33" name="checkbox" class="catBreed" disabled>
            <label for="breed_33">Maine Coon</label>
            <input type="checkbox" id="breed_44" name="checkbox" class="catBreed" disabled>
            <label for="breed_44">Sphynx</label>
            <input type="checkbox" id="breed_55" name="checkbox" class="catBreed" disabled>
            <label for="breed_55">American Shorthair</label><br>
            <input type="checkbox" id="breed_66" name="checkbox" class="catBreed" disabled>
            <label for="breed_66">Scottish Fold</label>
            <input type="checkbox" id="breed_77" name="checkbox" class="catBreed" disabled>
            <label for="breed_77">Bengal</label>
            <input type="checkbox" id="breed_88" name="checkbox" class="catBreed" disabled>
            <label for="breed_88">British Shorthair</label>
            <input type="checkbox" id="breed_99" name="checkbox" class="catBreed" disabled>
            <label for="breed_99">Abyssinian</label>
            <input type="checkbox" id="breed_100" name="checkbox" class="catBreed" disabled>
            <label for="breed_100">Doesn't matter</label><br><br>
            
            


            <h3>Choose the age range:</h3>
            <input type="checkbox" id="age_1" name="checkboxage" value="Puppy/Kitten (0-1 year)">
            <label for="age_1">Puppy/Kitten (0-1 year)</label><br>
            <input type="checkbox" id="age_2" name="checkboxage" value="Young (1-3 years)">
            <label for="age_2">Young (1-3 years)</label><br>
            <input type="checkbox" id="age_3" name="checkboxage" value="Adult (3+ years)">
            <label for="age_3">Adult (3+ years)</label><br>
            <input type="checkbox" id="age_4" name="checkboxage" value="Doesn't matter">
            <label for="age_4">Doesn't matter</label><br>
            
            <br>
              <h3> Preferred gender</h3>
            
            

            <input id="radio_option1_" name="radio_" value="Male" type="radio">
            <label for="radio_option1_">Male</label>
            <input id="radio_option2_" name="radio_" value="Female" type="radio" >
            <label for="radio_option2_">Female</label>
            <input id="radio_option3_" name="radio_" value="doesn't matter" type="radio">
            <label for="radio_option3_">Doesn't matter</label>
            <br>
            <br>
            <h3>Gets along with other pets?</h3>
            
            <input type="radio" id="alongChoice1" name="getsalong" value="YesAlong" >
               <label for="alongChoice1">Yes</label> 
            <input type="radio" id="alongChoice2" name="getsalong" value="NoAlong" >
               <label for="alongChoice2">No</label> 
               <br>
               <br>
                  <h3>Suitable for family with small children?</h3>
              
               <input id="suitableChoice1" name="radio" type="radio" value="YesSuitable">
               <label for="suitableChoice1">Yes</label>
               <input id="suitableChoice2" name="radio" type="radio" value="NoSuitable" >
               <label for="suitableChoice2">No</label>
               <br>
               <br>

               <input type="submit" value="Submit" style="background-color: #ff6b81; border-radius: 50px; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; transition: background-color 0.3s ease-in-out;">
<input type="reset" value="Clear" style="background-color: #74b9ff; border-radius: 50px; border: none; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">



            
         </form>
      </main>
      <aside class="right">
         <a href="https://www.petfinder.com/pet-adoption/dog-adoption/"  target="_blank"><img src="pictures/adoptdog.jpg" alt="dgcat" height="300" width="300"> </a>
			<br><br><a href="https://www.americanhumane.org/fact-sheet/cat-adoption-checklist/"  target="_blank"><img src="pictures/adoptcat.jpg" alt="family" height="300" width="300"> </a>

      </aside>
      
      
   </div>
   <footer>
	<?php include 'Footer.php'; ?>
	</footer>
   
   </body>
</html>



