const pawFloatToggle = document.getElementById("PawFloating");
const insta = document.getElementById("insta");
const whatsapp = document.getElementById("whatsapp");
const shopee = document.getElementById("shopee");

pawFloatToggle.addEventListener("click", () => {
  pawFloatToggle.classList.toggle("floatBTN-Active");
  insta.classList.toggle("insta-active");
  whatsapp.classList.toggle("wa-active");
  shopee.classList.toggle("shope-active");
});
