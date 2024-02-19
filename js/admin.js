const NavDrop = document.querySelector(".navdrop");
const NavdropBoxes = document.querySelectorAll(".NavdropBox");
const navBarAdmin = document.querySelectorAll(".navBarAdmin");

const notifBox = document.querySelector(".notifBox");
const notificationsToggle = document.getElementById("notifications");
const SidebarAdmin = document.getElementById("SidebarAdmin");

notificationsToggle.addEventListener("click", () => {
  notifBox.classList.toggle("BoxNotifications-Active");
});

navBarAdmin.forEach((othernav) => {
  othernav.addEventListener("click", () => {
    navBarAdmin.forEach((nav) => {
      if (nav !== othernav && nav.classList.contains("navAdmin-active")) {
        nav.classList.remove("navAdmin-active");
      }
    });
    othernav.classList.add("navAdmin-active");
  });
});

// Navlink Active Navbar
const pathName = window.location.pathname;
const pageName = pathName.split("/").pop();
// Navlink

if (pageName === "Admin-Homepage.php") {
  document.querySelectorAll(".FrontendNav").forEach(function (element) {
    element.classList.add("navAdmin-active");
    const ParentBox = NavDrop.parentNode;
    const NavdropNextElement = NavDrop.nextElementSibling;
    SidebarAdmin.classList.add("overflow-y-auto");
    NavDrop.classList.add("NavAdminToggle-active");
    NavdropNextElement.classList.add("BoxNavAdmin-Active");
    ParentBox.classList.add("parentAdminNav-Active");
  });
}

if (pageName === "Admin-Blog.php") {
  document.querySelectorAll(".FrontendNav").forEach(function (element) {
    element.classList.add("navAdmin-active");
    const ParentBox = NavDrop.parentNode;
    const NavdropNextElement = NavDrop.nextElementSibling;
    SidebarAdmin.classList.add("overflow-y-auto");
    NavDrop.classList.add("NavAdminToggle-active");
    NavdropNextElement.classList.add("BoxNavAdmin-Active");
    ParentBox.classList.add("parentAdminNav-Active");
  });
}

if (pageName === "Admin-Customer.php") {
  document.querySelectorAll(".CustomerNav").forEach(function (element) {
    element.classList.add("navAdmin-active");
  });
}

if (pageName === "Admin-Dashboard.php") {
  document.querySelectorAll(".DashboardNav").forEach(function (element) {
    element.classList.add("navAdmin-active");
  });
}

// Navlink end

// Navlink Active Navbar End

NavDrop.addEventListener("click", () => {
  const ParentBox = NavDrop.parentNode;
  const NavdropNextElement = NavDrop.nextElementSibling;
  SidebarAdmin.classList.toggle("overflow-y-auto");
  NavDrop.classList.toggle("NavAdminToggle-active");
  NavdropNextElement.classList.toggle("BoxNavAdmin-Active");
  ParentBox.classList.toggle("parentAdminNav-Active");
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
