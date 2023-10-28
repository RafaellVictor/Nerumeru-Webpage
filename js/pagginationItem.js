// Get the treatment content wrapper and treatment items
const loadingOverlay = document.getElementById("loading-overlay");
const StoreContent = document.getElementById("StoreItem");
const CardItems = StoreContent.querySelectorAll(".card-wrapper");

// Get the pagination buttons and current page elements
const prevButton = document.querySelector(".prev-button"); // Menggunakan "querySelector" untuk mencari kelas ".prev-button"
const nextButton = document.querySelector(".next-button"); // Menggunakan "querySelector" untuk mencari kelas ".next-button"
const currentPageElements = document.querySelectorAll(".current-page");

// Define the current page and items per page
let currentPage = 1;
let itemsPerPage = 12; // Default items per page

// Function to show the items for the current page
function showItemsForPage(page) {
  CardItems.forEach((item, index) => {
    if (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}

function myFunction() {
  // Get the element with the ID "all-product"
  const allProductElement = document.getElementById("all-product");

  if (allProductElement) {
    // Scroll to the "all-product" element with smooth scrolling
    allProductElement.scrollIntoView({ behavior: "smooth" });
  }
}

// Function to update the current page elements
function updateCurrentPageElements() {
  currentPageElements.forEach((element) => {
    element.textContent = currentPage;
  });
}

// Initialize the page
showItemsForPage(currentPage);

// Update the current page elements
updateCurrentPageElements();

// Function to go to the previous page
function showPreviousPage() {
  if (currentPage > 1) {
    currentPage--;
    showItemsForPage(currentPage);
    updateCurrentPageElements();
  }
}

// Function to go to the next page
function showNextPage() {
  if (currentPage < Math.ceil(CardItems.length / itemsPerPage)) {
    currentPage++;
    showItemsForPage(currentPage);
    updateCurrentPageElements();
  }
}

// Check screen size and update itemsPerPage accordingly
function updateItemsPerPage() {
  if (window.innerWidth >= 1200) {
    itemsPerPage = 12; // For larger screens
  } else {
    itemsPerPage = 6; // For smaller screens
  }
  showItemsForPage(currentPage); // Update the displayed items
  updateCurrentPageElements(); // Update the current page elements
}

// Call the updateItemsPerPage function initially and on window resize
updateItemsPerPage();
window.addEventListener('resize', updateItemsPerPage);
