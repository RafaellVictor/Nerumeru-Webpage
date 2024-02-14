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

if (pageName === "Admin-Products.php") {
  document.querySelectorAll(".ProductsNav").forEach(function (element) {
    element.classList.add("navAdmin-active");
  });
}

if (pageName === "Admin-Products.php") {
  document.querySelectorAll(".ProductsNav").forEach(function (element) {
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

const NotificationBoxDelete = document.getElementById("TrashNotifications");
const CancelDelete = document.getElementById("CancelDelete");
const TogglerTrash = document.querySelectorAll(".HapusDataToggler");

TogglerTrash.forEach((OtherTrash) => {
  OtherTrash.addEventListener("click", () => {
    NotificationBoxDelete.classList.add("NofiDeleteBoxActive");
  });
});

CancelDelete.addEventListener("click", () => {
  NotificationBoxDelete.classList.remove("NofiDeleteBoxActive");
});

function cancelDelete() {
  // Sembunyikan popup
  document.getElementById("TrashNotifications").classList.add("invisible");
}
