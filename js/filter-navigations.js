id="filter-toggle"
id="StoreItem"
id="filter-box"
id="filter-toggle-hidden"

document.addEventListener("DOMContentLoaded", function() {

const filterBoxToggle = document.getElementById('filter-box');
const filterToggle = document.getElementById('filter-toggle');
const filterTogglehidden = document.getElementById('filter-toggle-hidden');
const storeItem = document.getElementById('StoreItem');

filterBoxToggle.addEventListener('click' ,() => {
      filterBoxToggle.classList.toggle("Filter-Active")

      Box = filterBoxToggle.nextElementSibling
      Box.classList.toggle('box-Active');
})

filterTogglehidden.addEventListener('click', () => {
      filterToggle.classList.toggle('hidden');
      
      // Pengaturan kelas-kelas Lg
      if (filterToggle.classList.contains("hidden")) {
          storeItem.classList.add('lg:grid-cols-4', 'lg:col-span-8');
          storeItem.classList.remove('lg:grid-cols-3', 'lg:col-span-6');
      } else {
          storeItem.classList.add('lg:grid-cols-3', 'lg:col-span-6');
          storeItem.classList.remove('lg:grid-cols-4', 'lg:col-span-8');
      }
      
      // Pengaturan kelas-kelas md
      if (filterToggle.classList.contains("hidden")) {
          storeItem.classList.add('md:grid-cols-3', 'md:col-span-8');
          storeItem.classList.remove('md:grid-cols-2', 'md:col-span-6');
      } else {
          storeItem.classList.add('md:grid-cols-2', 'md:col-span-6');
          storeItem.classList.remove('md:grid-cols-3', 'md:col-span-8');
      }
  });
  

});