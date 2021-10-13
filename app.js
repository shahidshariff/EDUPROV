/*Navbar JS  */

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});

/* Testinomial slider */

$(document).ready(function(){
  $("#testimonial-slider").owlCarousel({
      items:1,
      itemsDesktop:[1000,1],
      itemsDesktopSmall:[979,1],
      itemsTablet:[768,1],
      pagination:false,
      navigation:true,
      navigationText:["",""],
      autoPlay:true
  });
});


/* FAQ JS SCRIPT */
const allVisiblePannels = document.querySelectorAll(".visible-pannel");

allVisiblePannels.forEach((question) => {
  question.addEventListener("click", (e) => {
    const elToOpen = e.target.nextElementSibling;
    const elHeight = elToOpen.scrollHeight;
    const imgTab = e.target.children[1];

    if (elToOpen.className.includes("opened")) {
      elToOpen.classList.remove("opened");
      gsap.to(elToOpen, {
        duration: 0.2,
        height: 0,
        opacity: 0,
        padding: "0px 15px",
      });
      gsap.to(imgTab, { duration: 0.2, rotate: "0deg" });
    } else {
      elToOpen.classList.add("opened");
      gsap.to(elToOpen, {
        duration: 0.2,
        height: elHeight + 40,
        opacity: 1,
        padding: "20px 15px",
      });
      gsap.to(imgTab, { duration: 0.2, rotate: "45deg" });
    }
  });
});
