id="filter-toggle"
id="StoreItem"
id="filter-box"
id="filter-toggle-hidden"

const filterBoxToggle = document.getElementById('filter-box');
const filterToggle = document.getElementById('filter-toggle');
const filterTogglehidden = document.getElementById('filter-toggle-hidden');
const storeItem = document.getElementById('StoreItem');

filterBoxToggle.addEventListener('click' ,() => {
      filterBoxToggle.classList.toggle("Filter-Active")

      Box = filterBoxToggle.nextElementSibling
      Box.classList.toggle('box-Active');
})

filterTogglehidden.addEventListener('click' , () => {
      filterToggle.classList.toggle('hidden')

      if(filterToggle.classList.contains("hidden")) {
            // Lg
            storeItem.classList.remove('lg:grid-cols-3')
            storeItem.classList.add('lg:grid-cols-4')
            storeItem.classList.remove('lg:col-span-6')
            storeItem.classList.add('lg:col-span-8')
            // Lg end
             // md
             storeItem.classList.remove('md:grid-cols-2')
             storeItem.classList.add('md:grid-cols-3')
             storeItem.classList.remove('md:col-span-6')
             storeItem.classList.add('md:col-span-8')
             // md end
      } else {
            // Lg
            storeItem.classList.add('lg:grid-cols-3')
            storeItem.classList.remove('lg:grid-cols-4')
            storeItem.classList.add('lg:col-span-6')
            storeItem.classList.remove('lg:col-span-8')
            // Lg end
             // md
             storeItem.classList.add('md:grid-cols-2')
             storeItem.classList.remove('md:grid-cols-3')
             storeItem.classList.add('md:col-span-6')
             storeItem.classList.remove('md:col-span-8')
             // md end
      }
})