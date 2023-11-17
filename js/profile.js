const pesananBoxToggle = document.getElementById("ToggleTypePesanan");
const nextsiblings = pesananBoxToggle.nextElementSibling;
const AkunToggle = document.querySelectorAll(".AkunToggle");
const PesananToggle = document.querySelectorAll(".PesananToggle");
const AkunBox = document.getElementById("AkunBox");
const pesananBox = document.getElementById("pesanaBox");
const dropdownProfile = document.querySelectorAll(".dropdownProfile");
const dropBoxProfile = document.querySelector(".dropdownBoxProfile");

dropdownProfile.forEach(otherToggle => {
    otherToggle.addEventListener('mouseenter', () => {
        const ParentProflieDropdown = otherToggle.parentNode;
        otherToggle.classList.add('active-DropProfile');
        ParentProflieDropdown.classList.add('activeParentBox');
        dropBoxProfile.classList.add('DropDownBox-Active');
    });

    const dropdownContainer = dropBoxProfile.parentElement; // Mengambil container dari dropdown

    dropdownContainer.addEventListener('mouseleave', () => {
        dropdownProfile.forEach(toggle => {
            toggle.classList.remove('active-DropProfile');
            toggle.parentNode.classList.remove('activeParentBox');
        });
        dropBoxProfile.classList.remove('DropDownBox-Active');
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
    AkunBox.classList.add("hidden");
    pesananBox.classList.remove("hidden");
  });
});

pesananBoxToggle.addEventListener("click", () => {
  pesananBoxToggle.classList.toggle("togglePesanan-active");
  nextsiblings.classList.toggle("BoxPesanan-Active");
});
