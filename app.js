$(document).ready(function(){function o(){verticalOffset="undefined"!=typeof verticalOffset?verticalOffset:0,element=$("body"),offset=element.offset(),offsetTop=offset.top,$("html, body").animate({scrollTop:offsetTop},30,"linear")}$(function(){$(document).on("scroll",function(){$(window).scrollTop()>100?$(".scroll-top-wrapper").addClass("show"):$(".scroll-top-wrapper").removeClass("show")}),$(".scroll-top-wrapper").on("click",o)})});

/*Navbar JS  */

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});

/* 404 */




