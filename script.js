// Add event listeners for navigation  
document.addEventListener("DOMContentLoaded", function() {  
   const navLinks = document.querySelectorAll("nav a");  
   navLinks.forEach(function(link) {  
      link.addEventListener("click", function(event) {  
        event.preventDefault();  
        const target = event.target.getAttribute("href");  
        document.querySelector(target).scrollIntoView({ behavior: "smooth" });  
      });  
   });  
});
