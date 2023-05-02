/**
   Miskat Mahmud 
   ID: 40250110
   SOEN 287- Winter 2023
   Assignment 2
   Concordia University
   Date: 20 March 2023 
   */




function addNumbers(array){
    let sum = 0;
    for (let i=0; i<array.length; i++){
     sum += Number(array[i]);}
     document.getElementById("add").innerHTML = sum;
     return sum;
    }

   

function findMaxNumber() {
    let max = 0;
    for (let i = 0; i < arguments.length; i++) {
      if (max < arguments[i]) {
        max = arguments[i];
      }
    }
    document.getElementById("max").innerHTML = max;
    return max;
  }

  

function addOnlyNumbers(array){
    let sum = 0;
    for(let i=0; i<array.length; i++){
       const number = parseFloat(array[i]);
       if (!isNaN(number)) {
        sum += number;
      }
    }
    document.getElementById("addOnlyNumbers").innerHTML = sum;
    return sum;
}


function getDigits(String){
    let numbers ="";
    for (let i = 0; i < String.length; i++) {
        if (String[i].match(/[0-9]/)) {
          numbers += String[i];
        }
    }
    document.getElementById("digit").innerHTML = numbers;
    return numbers;
  
}

function reverseString(String){
    let reversedString = String.split("").reverse().join("");
    document.getElementById("reverseString").innerHTML = reversedString;
    return reversedString;
     
}


function getCurrentDate(){
    const date = new Date();
    const day = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const days = day[date.getDay()];
    let monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    let month = monthNames[date.getMonth()];
    let numericDay = date.getDate();
    let year = date.getFullYear();
    let currentday = days + ", "  + month + " " + numericDay +", "+ year;
    document.getElementById("date").style.fontStyle = "italic";
    document.getElementById("date").innerHTML = currentday;
    return currentday;
}
