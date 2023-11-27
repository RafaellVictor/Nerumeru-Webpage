const NavDrop = document.querySelector(".navdrop");
const NavdropBoxes = document.querySelectorAll(".NavdropBox");
const navBarAdmin = document.querySelectorAll(".navBarAdmin");

const notifBox = document.querySelector(".notifBox");
const notificationsToggle = document.getElementById("notifications");

notificationsToggle.addEventListener("click", () => {
  notifBox.classList.toggle("BoxNotifications-Active");
});

navBarAdmin[0].classList.add("navAdmin-active");

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

NavDrop.addEventListener("click", () => {
  const ParentBox = NavDrop.parentNode;
  const NavdropNextElement = NavDrop.nextElementSibling;
  NavDrop.classList.toggle("NavAdminToggle-active");
  NavdropNextElement.classList.toggle("BoxNavAdmin-Active");
  ParentBox.classList.toggle("parentAdminNav-Active");
});
