const durationCargo = document.getElementById('durationCargo');
const options = document.querySelectorAll('.durasiBox h6');

const pilihanCargo = document.getElementById('CargoPilihan');
const optionsCargoBox = document.querySelectorAll('.pilihanCargoBox h6');

// Menyimpan referensi ke elemen yang aktif saat ini
let activeElement = null;

durationCargo.addEventListener('click', () => {
  if (activeElement === durationCargo) {
    // Nonaktifkan elemen jika sudah aktif
    durationCargo.classList.remove('active');
    durationCargo.lastElementChild.classList.remove('box-CargoActive');
    activeElement = null;
  } else {
    // Nonaktifkan elemen aktif saat ini (jika ada)
    if (activeElement) {
      activeElement.classList.remove('active');
      activeElement.lastElementChild.classList.remove('box-CargoActive');
    }

    // Aktifkan elemen yang baru
    durationCargo.classList.add('active');
    durationCargo.lastElementChild.classList.add('box-CargoActive');
    activeElement = durationCargo;
  }
});

options.forEach((option) => {
  option.addEventListener('click', () => {
    durationCargo.childNodes[0].nodeValue = option.innerText;
  });
});

pilihanCargo.addEventListener('click', () => {
  if (activeElement === pilihanCargo) {
    pilihanCargo.classList.remove('active');
    pilihanCargo.lastElementChild.classList.remove('box-CargoActive');
    activeElement = null;
  } else {
    if (activeElement) {
      activeElement.classList.remove('active');
      activeElement.lastElementChild.classList.remove('box-CargoActive');
    }

    pilihanCargo.classList.add('active');
    pilihanCargo.lastElementChild.classList.add('box-CargoActive');
    activeElement = pilihanCargo;
  }
});

optionsCargoBox.forEach((option) => {
    option.addEventListener('click', () => {
      const teksElementDiAtas = pilihanCargo.previousElementSibling;
      if (teksElementDiAtas) {
        teksElementDiAtas.querySelector('.infoKurir').textContent = option.innerText;
      }
    });
  });
  