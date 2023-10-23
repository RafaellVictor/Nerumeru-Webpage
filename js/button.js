const NeruCollection = document.getElementById("NeruCollection");

NeruCollection.addEventListener("mouseenter", () => {
  NeruCollection.classList.add("btn-Active");
});

NeruCollection.addEventListener("mouseleave", () => {
  NeruCollection.classList.remove("btn-Active");
});
