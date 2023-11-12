document.addEventListener("DOMContentLoaded", function () {
    const filterBoxToggle = document.getElementById("filter-box");
    const filterToggle = document.getElementById("filter-toggle");
    const filterTogglehidden = document.getElementById("filter-toggle-hidden");
    const storeItem = document.getElementById("StoreItem");
  
    filterBoxToggle.addEventListener("click", () => {
      toggleClass(filterBoxToggle, "Filter-Active");
  
      const Box = filterBoxToggle.nextElementSibling;
      toggleClass(Box, "box-Active");
    });
  
    filterTogglehidden.addEventListener("click", () => {
      toggleClass(filterToggle, "hidden");
  
      // Pengaturan kelas-kelas Lg
      const lgClassToAdd = filterToggle.classList.contains("hidden")
        ? ["lg:grid-cols-4", "lg:col-span-8"]
        : ["lg:grid-cols-3", "lg:col-span-6"];
  
      const lgClassToRemove = filterToggle.classList.contains("hidden")
        ? ["lg:grid-cols-3", "lg:col-span-6"]
        : ["lg:grid-cols-4", "lg:col-span-8"];
  
      toggleClassList(storeItem, lgClassToAdd, lgClassToRemove);
  
      // Pengaturan kelas-kelas md
      const mdClassToAdd = filterToggle.classList.contains("hidden")
        ? ["md:grid-cols-3", "md:col-span-8"]
        : ["md:grid-cols-2", "md:col-span-6"];
  
      const mdClassToRemove = filterToggle.classList.contains("hidden")
        ? ["md:grid-cols-2", "md:col-span-6"]
        : ["md:grid-cols-3", "md:col-span-8"];
  
      toggleClassList(storeItem, mdClassToAdd, mdClassToRemove);
    });
  
    // Fungsi untuk menambah atau menghapus kelas pada elemen
    function toggleClass(element, className) {
      element.classList.toggle(className);
    }
  
    // Fungsi untuk menambah atau menghapus sekelompok kelas pada elemen
    function toggleClassList(element, classToAdd, classToRemove) {
      element.classList.add(...classToAdd);
      element.classList.remove(...classToRemove);
    }
  });
  