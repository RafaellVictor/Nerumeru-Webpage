document.addEventListener("DOMContentLoaded", function () {
    const filterBoxToggle = document.getElementById("filter-box");
  
    filterBoxToggle.addEventListener("click", () => {
      toggleClass(filterBoxToggle, "Filter-Active");
  
      const Box = filterBoxToggle.nextElementSibling;
      toggleClass(Box, "box-Active");
    });
  });
  