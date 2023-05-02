// <!-- 
// Miskat Mahmud 
// ID: 40250110
// SOEN 287- Winter 2023
// Assignment 03
// Concordia University
// Date:  15 April 2023 
// -->


const timeElement = document.querySelector(".time");
const dateElement = document.querySelector(".date");

/**
 * @param {Date} date
 */
function formatTime(date) {
  const hours = date.getHours() % 12 || 12;
  
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();
  const isAm = date.getHours() < 12;

  return `${hours.toString().padStart(2, "0")}:${minutes
    .toString()
    .padStart(2, "0")}:${seconds.toString().padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
}

/**
 * @param {Date} date
 */
function formatDate(date) {
  const DAYS = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  const MONTHS = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

  return `${DAYS[date.getDay()]}, ${
    MONTHS[date.getMonth()]
  } ${date.getDate()} ${date.getFullYear()}`;
}



setInterval(() => {
  const now = new Date();

  timeElement.textContent = formatTime(now);
  dateElement.textContent = formatDate(now);
}, 200);






	


        function validateForm() {
          let preference = document.getElementById('preference').value;
        
          const dogBreeds = ['breed_1', 'breed_2', 'breed_3', 'breed_4', 'breed_5', 'breed_6', 'breed_7', 'breed_8', 'breed_9', 'breed_10'];
          const catBreeds = ['breed_11', 'breed_22', 'breed_33', 'breed_44', 'breed_55', 'breed_66', 'breed_77', 'breed_88', 'breed_99', 'breed_100'];
          const ages = ['age_1', 'age_2', 'age_3', 'age_4'];
          const genders = ['radio_option1_', 'radio_option2_', 'radio_option3_'];
          const alongChoices = ['alongChoice1', 'alongChoice2'];
          const suitableChoices = ['suitableChoice1', 'suitableChoice2'];
        
          if (preference === '') {
            alert('Please enter your pet preference');
            return false;
          }
        
          if (preference == 1 && !dogBreeds.some(id => document.getElementById(id).checked)) {
            alert('Please select a dog breed\nSince you selected dog as pet preference, you will not need to select a cat breed.');
            return false;
          }
        
          if (preference == 2 && !catBreeds.some(id => document.getElementById(id).checked)) {
            alert('Please select a cat breed\nSince you selected cat as pet preference, you will not need to select a dog breed.');
            return false;
          }

          if (preference == 3 && (!dogBreeds.some(id => document.getElementById(id).checked) || !catBreeds.some(id => document.getElementById(id).checked))) {
            alert('Please select at least one dog and one cat breed');
            return false;
          }
        
          if (!ages.some(id => document.getElementById(id).checked)) {
            alert('Please enter at least one preferred age');
            return false;
          }
        
          if (!genders.some(id => document.getElementById(id).checked)) {
            alert('Please select a preferred gender');
            return false;
          }
        
          if (!alongChoices.some(id => document.getElementById(id).checked)) {
            alert('Please select whether the pet gets along with other pets');
            return false;
          }
        
          if (!suitableChoices.some(id => document.getElementById(id).checked)) {
            alert('Please select whether the pet is suitable for a family with children');
            return false;
          }
        
          return true;
        }
        

        function validateGiveAwayForm(){
          let breed = document.getElementById('breed').value;

          let type = document.getElementById('breedtype');

          let age1 = document.getElementById('age_1').checked;
          let age2 = document.getElementById('age_2').checked;
          let age3 = document.getElementById('age_3').checked;

          let gender1 = document.getElementById('genderChoice1').checked;
          let gender2 = document.getElementById('genderChoice2').checked;

          let along1 = document.getElementById('alongChoice1').checked;
          let along2 = document.getElementById('alongChoice2').checked;

          let suitable1 = document.getElementById('suitableChoice1').checked;
          let suitable2 = document.getElementById('suitableChoice2').checked;

          let additional = document.getElementById('textarea1');

          const email = document.getElementById('input_email').value;
          const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/

          let petname = document.getElementById('PetName').value;
          let name = document.getElementById('Ownername');



          if(breed === '') {
            alert('Please enter your pet type');
            return false;
           }
           if(type.value == "") {
            alert('Please enter the breed of your type. If it is mixed breed, you can mention that as well.');
            return false;
           }
           if(age1 === false && age2 === false && age3 === false) {
            alert('Please enter the age of your pet');
            return false;
           }
           if(gender1 === false && gender2 === false) {
            alert('Please select the gender of your pet');
            return false;
           }
           if(along1 === false && along2 === false) {
            alert('Please select whether the pet gets along with other pets');
            return false;
           }
           if(suitable1 === false && suitable2 === false) {
            alert('Please select whether the pet is suitable for family with children');
            return false;
           }
           
           if(additional.value.trim() === '') {
            alert('Please provide additional information (You can just type \"Nothing\" if you don\'t want to provide any)');
            return false;
           }
           if(petname.trim() === '') {
            alert('Please enter the name of the pet:');
            return false;
           }
           if(name.value.trim() === '') {
            alert('Please enter the owner name');
            return false;
           }

           if(!email.match(pattern)) {
            alert('Please enter a valid email address');
            return false;
           }

          
        }
        

       function disableOption(){
        let petType = document.getElementById('preference').value;
        const dogOptions = document.querySelectorAll('.dogBreed');
        const catOptions = document.querySelectorAll('.catBreed');

       

        dogOptions.forEach(option => option.disabled = false);
        catOptions.forEach(option => option.disabled = false);

        if (petType == "dog") {
          catOptions.forEach(option => option.disabled = true);
        } else if (petType == "cat") {
          dogOptions.forEach(option => option.disabled = true);
        }
        else{
          dogOptions.forEach(option => option.disabled = false);
        catOptions.forEach(option => option.disabled = false);
        }
      
      }

const dropdown = document.getElementById('preference');

if (window.location.href.includes('Find_a_dog_cat_form.php')) {
  dropdown.addEventListener('change', uncheckPrevious);
}

function uncheckPrevious() {
  const dogOptions = document.querySelectorAll('.dogBreed');
  const catOptions = document.querySelectorAll('.catBreed');
  
  dogOptions.forEach(option => {
    if (option.checked) {
      option.checked = false;
    }
  });
  catOptions.forEach(option => {
    if (option.checked) {
      option.checked = false;
    }
  });
}

