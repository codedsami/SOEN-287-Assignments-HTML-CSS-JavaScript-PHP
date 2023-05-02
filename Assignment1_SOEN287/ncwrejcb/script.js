'use strict';

const button = document.querySelector(".show-modal");


const x = function displayModal() {
    const hidden = document.getElementsByClassName("modal");
    console.log(hidden);
    for (let i = 0; i < hidden.length; i++) {
      hidden[i].style.display = "none";
    }
    console.log(hidden);
    button.style.display = "block";
    console.log(button);
    console.log(button.style.display);
    console.log(button);
    console.log(button.style.display);
    
    
    

  }

  button.addEventListener("click", x);








