const navBurger = document.getElementById("navBurger");
const navCont = document.getElementById("navCont");
const navLinks = document.getElementById("navLinks");
const dropdownNavs = document.querySelectorAll(".dropdownNav");
const nav = document.querySelector("header");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 50) {
    nav.classList.add("nav-ActiveCont");
  } else {
    nav.classList.remove("nav-ActiveCont");
  }
});

let activeDropdownNav = null; // Variable to track the currently active element

// Function to close the active dropdown
function closeActiveDropdown() {
  if (activeDropdownNav) {
    activeDropdownNav.classList.remove("navDrop-Active");
    const parentNav = activeDropdownNav.parentNode;
    const dropMenu = parentNav.querySelector(".dropDownBox");

    parentNav.classList.remove("pb-active");

    dropMenu.classList.remove("dropMenu-Active");
    dropMenu.classList.add("opacity-0");
    navCont.classList.remove("navCont-active");
    activeDropdownNav = null;
  }
}

function activateDropdown(dropdownNav) {
  dropdownNav.classList.add("navDrop-Active");
  const parentNav = dropdownNav.parentNode;
  const dropMenu = parentNav.querySelector(".dropDownBox");

  console.log(parentNav, dropMenu);

  parentNav.classList.add("pb-active");

  dropMenu.classList.add("dropMenu-Active");
  dropMenu.classList.remove("opacity-0");
  navCont.classList.add("navCont-active");
  activeDropdownNav = dropdownNav;
}

dropdownNavs.forEach((dropdownNav) => {
  dropdownNav.addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent the click event from reaching the document click event handler

    if (activeDropdownNav === dropdownNav) {
      // Clicked on the currently active element, close the dropdown
      closeActiveDropdown();
      activeDropdownNav = null; // Reset the activeDropdownNav variable
    } else {
      // Close the active dropdown if there is one
      closeActiveDropdown();

      // Activate the new dropdown
      activateDropdown(dropdownNav);
    }
  });
});

// Close the active dropdown when leaving the navContainer
navCont.addEventListener("mouseleave", () => {
  closeActiveDropdown();
});

navBurger.addEventListener("click", () => {
  navBurger.classList.toggle("nav-active");
});

const mobileMenuButton = document.getElementById("navBurger");
const mobileMenu = document.getElementById("offCanvasSm");

mobileMenuButton.addEventListener("click", () => {
  mobileMenu.classList.toggle("translate-x-full");
});
