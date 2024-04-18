const notifBox = document.querySelector(".notifBox");
const notificationsToggle = document.getElementById("notifications");
const SidebarAdmin = document.getElementById("SidebarAdmin");

notificationsToggle.addEventListener("click", () => {
  notifBox.classList.toggle("BoxNotifications-Active");
});


document.addEventListener("DOMContentLoaded", function () {
  // Ambil semua tombol "Lihat Details"
  const detailTogglers = document.querySelectorAll(".DateDetailToggler");

  // Tambahkan event listener ke setiap tombol
  detailTogglers.forEach(function (toggler) {
    toggler.addEventListener("click", function () {
      const targetModalId = this.getAttribute("data-target");
      const targetModal = document.querySelector(targetModalId);

      // Semua box yang mungkin terbuka
      const allModals = document.querySelectorAll(".userChangesDetail");

      // Sembunyikan semua box terlebih dahulu
      allModals.forEach(function (modal) {
        modal.classList.remove("BoxDate-Active");
      });

      // Tampilkan modal yang sesuai
      if (targetModal) {
        targetModal.classList.add("BoxDate-Active");

        // Set timeout untuk menutup modal setelah 30 detik
        setTimeout(function () {
          targetModal.classList.remove("BoxDate-Active");
        }, 10000); // 30 detik
      }

      // Ambil tombol close
      const closeButton = targetModal.querySelector("#buttonClose");

      // Tambahkan event listener untuk tombol close
      closeButton.addEventListener("click", () => {
        targetModal.classList.remove("BoxDate-Active");
      });
    });
  });
});

