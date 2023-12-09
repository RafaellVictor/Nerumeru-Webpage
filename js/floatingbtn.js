const pawFloatToggle = document.getElementById("PawFloating");
const insta = document.getElementById("insta");
const whatsapp = document.getElementById("whatsapp");
const shopee = document.getElementById("shopee");
const body = document.body; // Mendapatkan elemen body

// Fungsi untuk menutup item jika yang diklik bukan item tersebut
function closeItems(event) {
  if (
    !event.target.matches("#PawFloating") &&
    !event.target.matches("#insta") &&
    !event.target.matches("#whatsapp") &&
    !event.target.matches("#shopee")
  ) {
    pawFloatToggle.classList.remove("floatBTN-Active");
    insta.classList.remove("insta-active");
    whatsapp.classList.remove("wa-active");
    shopee.classList.remove("shope-active");
  }
}

pawFloatToggle.addEventListener("click", (event) => {
  event.stopPropagation(); // Menghentikan event dari mempropagasi ke atas (body)
  pawFloatToggle.classList.toggle("floatBTN-Active");
  insta.classList.toggle("insta-active");
  whatsapp.classList.toggle("wa-active");
  shopee.classList.toggle("shope-active");
});

// Menambahkan event listener pada body untuk menutup item jika yang diklik bukan item tersebut
body.addEventListener("click", closeItems);
