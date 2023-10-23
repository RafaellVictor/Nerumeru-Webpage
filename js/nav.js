const navBurger = document.getElementById("navBurger");
const navCont = document.getElementById("navCont");
const navLinks = document.getElementById("navLinks");

const nav = document.querySelector("header");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 50) {
    nav.classList.add("nav-ActiveCont");
  } else {
    nav.classList.remove("nav-ActiveCont");
  }
});

// const nav = document.querySelector("header");
// window.addEventListener("scroll", function () {
//   if (window.innerWidth >= 832) {
//     // Cek apakah layar SM atau lebih besar
//     if (window.pageYOffset > 50) {
//       nav.classList.add("nav-ActiveCont");
//     } else {
//       nav.classList.remove("nav-ActiveCont");
//     }
//   } else {
//     // Untuk ukuran MD atau yang lebih kecil
//     if (window.pageYOffset > 50) {
//       nav.classList.remove("nav-ActiveCont");
//     }
//   }
// });

navBurger.addEventListener("click", () => [
  navBurger.classList.toggle("nav-active"),
  navCont.classList.toggle("navCont-active"),
  navLinks.classList.toggle("navLinks-active"),
]);
