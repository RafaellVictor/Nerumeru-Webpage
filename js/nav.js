const navBurger = document.getElementById("navBurger");
const navCont = document.getElementById("navCont");
const navLinks = document.getElementById("navLinks");

navBurger.addEventListener("click", () => [
  navBurger.classList.toggle("nav-active"),
  navCont.classList.toggle("navCont-active"),
  navLinks.classList.toggle("navLinks-active"),
]);
