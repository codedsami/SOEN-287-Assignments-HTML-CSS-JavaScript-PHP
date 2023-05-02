/**
   Miskat Mahmud 
   ID: 40250110
   SOEN 287- Winter 2023
   Assignment 2
   Concordia University
   Date: 20 March 2023 
   */
function calculateOrder() {
    let userInput1 = document.getElementById("quantity1").value;
    let userInput2 = document.getElementById("quantity2").value;
    let userInput3 = document.getElementById("quantity3").value;

    if (!userInput1.match(/[0-9]/) || !userInput2.match(/[0-9]/) || !userInput3.match(/[0-9]/)) {
        alert("Please enter a valid quantity");
        return;
    }

    else {
        let total = (userInput1 * 19.99) + (userInput2 * 86) + (userInput3 * 55);
        document.getElementById("first").innerHTML = ("<b>Basic Web Programming (Quantity = " + userInput1) + "):</b> $" + userInput1 * 19.99;
        document.getElementById("second").innerHTML = ("<br><b>Intro to PHP (Quantity = " + userInput2) + "):</b> $" + userInput2 * 86;
        document.getElementById("third").innerHTML = ("<br><b>Advanced JQuery (Quantity = " + userInput3) + "):</b> $" + userInput3 * 55;

        document.getElementById("total").innerHTML = ("<br><br><b>Final Total:</b> $" + total);
    }


}