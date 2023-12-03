const pesananBoxToggle = document.getElementById("ToggleTypePesanan");
const nextsiblings = pesananBoxToggle.nextElementSibling;
const AkunToggle = document.querySelectorAll(".AkunToggle");
const PesananToggle = document.querySelectorAll(".PesananToggle");
const AkunBox = document.getElementById("AkunBox");
const pesananBox = document.getElementById("pesanaBox");
const dropdownProfile = document.querySelectorAll(".dropdownProfile");
const dropBoxProfile = document.querySelector(".dropdownBoxProfile");

dropdownProfile.forEach((otherToggle) => {
  const ParentProflieDropdown = otherToggle.parentNode;
  ParentProflieDropdown.classList.add("activeParentBox");
  dropBoxProfile.classList.add("DropDownBox-Active");

  otherToggle.addEventListener("click", () => {
    const ParentProflie = otherToggle.parentNode;
    otherToggle.classList.toggle("active-DropProfile");
    ParentProflie.classList.toggle("activeParentBox");
    dropBoxProfile.classList.toggle("DropDownBox-Active");
  });
});

AkunToggle.forEach((otherToggle) => {
  otherToggle.addEventListener("click", () => {
    AkunBox.classList.remove("hidden");
    pesananBox.classList.add("hidden");
  });
});

PesananToggle.forEach((otherToggle) => {
  otherToggle.addEventListener("click", () => {
    // Menghapus item 2
    dropdownProfile.forEach((item) => {
      const ParentProfile = item.parentNode;
      const dropBoxProfile = document.querySelector(".dropdownBoxProfile");

      ParentProfile.classList.remove("activeParentBox");
      dropBoxProfile.classList.remove("DropDownBox-Active");
    });

    // Mengubah konten lainnya sesuai kebutuhan
    AkunBox.classList.add("hidden");
    pesananBox.classList.remove("hidden");
  });
});

pesananBoxToggle.addEventListener("click", () => {
  pesananBoxToggle.classList.toggle("togglePesanan-active");
  nextsiblings.classList.toggle("BoxPesanan-Active");
});
