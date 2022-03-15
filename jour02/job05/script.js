document.addEventListener("DOMContentLoaded", (event) => {
    const footer = document.querySelector("footer");
  
    
  
    window.addEventListener("scroll", () => {
  
      var y = window.scrollY;
      let etat = Math.round((y * 100 / 4096));
  
      if(etat > 0 && etat <= 30) {
  
        footer.className = 'red';
      }
      else if(etat > 30 && etat <= 45){
  
        footer.className = 'orange';
      }
      else if(etat > 45 && etat <= 60){
  
        footer.className = 'yellow';
      }    
      else if(etat > 60 && etat <= 75){
  
        footer.className = 'green';
      }
      else if(etat > 75 && etat <= 100){
  
        footer.className = 'violet';
      }
      else{
  
        footer.className = 'red';
      }
  
      
    })
  });