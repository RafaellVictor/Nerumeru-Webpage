const nav = document.querySelector("header");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 50) {
    nav.classList.add("nav-ActiveCont");
  } else {
    nav.classList.remove("nav-ActiveCont");
  }
});

const navBurger = document.getElementById("navBurger");
const navLinks = document.getElementById("navLinks");
const navCont = document.getElementById("navCont");
const dropdownNavs = document.querySelectorAll(".dropdownNav");

let activeDropdownNav = null; // Variable to track the currently active element

// Function to close the active dropdown
function closeActiveDropdown() {
  if (activeDropdownNav) {
    activeDropdownNav.classList.remove("navDrop-Active");
    const parentNav = activeDropdownNav.parentNode; // Change 'dropdownNav' to 'activeDropdownNav'
    const dropMenu = parentNav.querySelector(".dropDownBox");
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

// Close the active dropdown for all dropdownNavs when clicking outside
document.addEventListener("click", (e) => {
  if (!navCont.contains(e.target)) {
    closeActiveDropdown();
  }
});

navBurger.addEventListener("click", () => [
  navBurger.classList.toggle("nav-active"),
  navCont.classList.toggle("navCont-active"),
  navLinks.classList.toggle("navLinks-active"),
]);
