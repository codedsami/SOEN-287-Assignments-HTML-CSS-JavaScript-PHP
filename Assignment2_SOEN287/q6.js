/**
   Miskat Mahmud 
   ID: 40250110
   SOEN 287- Winter 2023
   Assignment 2
   Concordia University
   Date: 20 March 2023 
   */


   window.onload = displayImage;
const images = [
    'slide1.jpg',
    'slide2.jpg',
    'slide3.jpg',
    'slide4.jpg'
  ];

 let currentIndex = 0;

 function displayImage() {
   const img = document.getElementById('slideshow');
   img.src = images[currentIndex];
 }

 function nextImage() {
   currentIndex++;
   if (currentIndex >= images.length) {
     currentIndex = 0;
   }
   displayImage();
 }

 function prevImage() {
   currentIndex--;
   if (currentIndex < 0) {
     currentIndex = images.length - 1;
   }
   displayImage();
 }

 displayImage();