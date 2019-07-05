
// Material Select Initialization
$(document).ready(function() {
  $('.mdb-select').materialSelect();
  });

// Bilder vorladen
var images = new Array();
            
  function preloadImages(){
  
      for (i=0; i < preloadImages.arguments.length; i++){
  
           images[i] = new Image();
  
          images[i].src = preloadImages.arguments[i];
  
      }
  
  }
  
  preloadImages("Images/Produkte/Camille.jpg", "Images/Produkte/Denovo.jpg", "Images/Produkte/Edan.jpg", "Images/Produkte/Felix.jpg", "Images/Produkte/Hutomo.jpg", "Images/Produkte/Jonny.jpg", "Images/Produkte/Kari.jpg", "Images/Produkte/lampe.jpg", "Images/Produkte/Natasha.jpg", "Images/Produkte/Nathan_small.jpg", "Images/Produkte/Nathan.jpg", "Images/Produkte/Pierre.jpg", "Images/Produkte/Samuel.jpg", "Images/Produkte/stehlampe.jpg", "Images/Produkte/Steve.jpg", "Images/Produkte/Sven.jpg");