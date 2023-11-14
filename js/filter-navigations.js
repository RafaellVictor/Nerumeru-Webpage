document.addEventListener("DOMContentLoaded", function () {
  const filterBoxToggle = document.getElementById("filter-box");
  filterBoxToggle.addEventListener("click", () => {
    filterBoxToggle.classList.toggle("Filter-Active");

    Box = filterBoxToggle.nextElementSibling;
    Box.classList.toggle("box-Active");
  });
});

const overlayFilter = document.getElementById("overlay-Filter-Moderen");
const filtertoggle = document.getElementById("filter-toggle");

filtertoggle.addEventListener('click' , () => {
    overlayFilter.classList.toggle('filter-overlay-active')
})