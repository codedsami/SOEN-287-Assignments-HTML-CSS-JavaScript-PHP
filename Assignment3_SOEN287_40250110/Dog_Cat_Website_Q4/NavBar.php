<?php
$current_page = basename($_SERVER['PHP_SELF']);
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <nav>
    <ul>
    <li><a class="<?php if ($current_page == 'Home.php') {echo "active";} else {echo "noactive";} ?>" href="Home.php">Home</a></li>
     <!-- <li> <a  <?php if ($current_page == 'Browse_Available_Pets.php') {echo ' class="active"';} ?> href="Browse_Available_Pets.php">Browse Available Pets </a></li> -->

    <li><a <?php if ($current_page == 'Find_a_dog_cat_form.php') {echo ' class="active"';} ?> href="Find_a_dog_cat_form.php">Find a dog/cat</a>  </li>

    <li><a <?php if ($current_page == 'Dog_care.php') {echo ' class="active"';} ?> href="Dog_care.php">Dog Care</a></li>

    <li ><a <?php if ($current_page == 'Cat_care.php') {echo ' class="active"';} ?> href="Cat_care.php">Cat Care</a></li>
    <li><a class="<?php if ($current_page == 'Create_An_Account.php') {echo "active";} else {echo "noactive";} ?>" href="Create_An_Account.php">Create An Account</a></li>

    <li ><a <?php if ($current_page == 'give_away_form.php') {echo ' class="active"';} ?> href="give_away_form.php">Have a pet to give away</a></li>
    <li><a href="Logout.php">Logout</a></li>

    <li ><a  <?php if ($current_page == 'contact.php') {echo ' class="active"';} ?> href="contact.php">Contact Us</a></li>



    </ul>



    </nav>
    </body>
    </html>