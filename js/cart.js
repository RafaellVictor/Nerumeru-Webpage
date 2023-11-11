const durationCargo = document.getElementById("durationCargo");
const options = document.querySelectorAll(".durasiBox h6");
const pilihanCargo = document.getElementById("CargoPilihan");
const optionsCargoBox = document.querySelectorAll(".pilihanCargoBox h6");
const boxalamat = document.getElementById("BoxAlamat");
const ubahalamat = document.getElementById("UbahAlamat");
const boxalamatParent = boxalamat.parentNode;
const closeBox = document.querySelectorAll(".closeBox");
const checkoutToggle = document.getElementById("checkoutToggle");
const PaymentBox = document.getElementById("PaymentBox");
const PaymentBoxParent = PaymentBox.parentNode;

// Menyimpan referensi ke elemen yang aktif saat ini
let activeElement = null;

durationCargo.addEventListener("click", () => {
  if (activeElement === durationCargo) {
    // Nonaktifkan elemen jika sudah aktif
    durationCargo.classList.remove("active");
    durationCargo.lastElementChild.classList.remove("box-CargoActive");
    activeElement = null;
  } else {
    // Nonaktifkan elemen aktif saat ini (jika ada)
    if (activeElement) {
      activeElement.classList.remove("active");
      activeElement.lastElementChild.classList.remove("box-CargoActive");
    }

    // Aktifkan elemen yang baru
    durationCargo.classList.add("active");
    durationCargo.lastElementChild.classList.add("box-CargoActive");
    activeElement = durationCargo;
  }
});

options.forEach((option) => {
  option.addEventListener("click", () => {
    durationCargo.childNodes[0].nodeValue = option.innerText;
  });
});

pilihanCargo.addEventListener("click", () => {
  if (activeElement === pilihanCargo) {
    pilihanCargo.classList.remove("active");
    pilihanCargo.lastElementChild.classList.remove("box-CargoActive");
    activeElement = null;
  } else {
    if (activeElement) {
      activeElement.classList.remove("active");
      activeElement.lastElementChild.classList.remove("box-CargoActive");
    }

    pilihanCargo.classList.add("active");
    pilihanCargo.lastElementChild.classList.add("box-CargoActive");
    activeElement = pilihanCargo;
  }
});

optionsCargoBox.forEach((option) => {
  option.addEventListener("click", () => {
    const teksElementDiAtas = pilihanCargo.previousElementSibling;
    if (teksElementDiAtas) {
      teksElementDiAtas.querySelector(".infoKurir").textContent = option.innerText;
    }
  });
});

// Alamat

ubahalamat.addEventListener("click", () => {
  ubahalamat.classList.add("active");
  boxalamat.classList.add("box-Cart-active");
  boxalamatParent.classList.add("box-parent-active");
  document.body.classList.add("overflow-hidden");
});

closeBox.forEach((Otherclosebox) => {
  Otherclosebox.addEventListener("click", () => {
    ubahalamat.classList.remove("active");
    boxalamat.classList.remove("box-Cart-active");
    boxalamatParent.classList.remove("box-parent-active");
    checkoutToggle.classList.remove("active");
    PaymentBox.classList.remove("box-Cart-active");
    PaymentBoxParent.classList.remove("box-parent-active");
    document.body.classList.remove("overflow-hidden");

  });
});

checkoutToggle.addEventListener("click", () => {
  checkoutToggle.classList.add("active");
  PaymentBox.classList.add("box-Cart-active");
  PaymentBoxParent.classList.add("box-parent-active");
  document.body.classList.add("overflow-hidden");
});

// Radio Checkbox

function handleRadioChange(selectedRadio) {
  // Menonaktifkan semua radio button kecuali yang dipilih
  var allRadios = document.querySelectorAll('input[type="radio"][name="paymentMethod"]');
  allRadios.forEach(function (radio) {
    if (radio !== selectedRadio) {
      radio.checked = false;
    }
  });

  // Menambahkan kelas aktif pada label yang terkait dengan radio yang dipilih
  var labels = document.querySelectorAll('label[for="' + selectedRadio.id + '"]');
  labels.forEach(function (label) {
    label.classList.toggle("active-label", selectedRadio.checked);
  });
}

// Radio Checkbox end
