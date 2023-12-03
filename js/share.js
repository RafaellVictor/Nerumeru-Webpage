const shareTriggers = document.querySelectorAll(".shareToggle");
const waShares = document.querySelectorAll(".waShare");

shareTriggers.forEach((shareTrigger, index) => {
  shareTrigger.addEventListener("click", (event) => {
    // Stop the event propagation to prevent it from reaching the document click listener
    event.stopPropagation();

    // Toggle class 'shareTrigger-Active' for the clicked element
    shareTrigger.classList.toggle("shareTrigger-Active");

    // Toggle class 'waShare-Active' for the clicked element
    waShares[index].classList.toggle("waShare-Active");

    // Close elements that were not clicked
    shareTriggers.forEach((shareTriggr, i) => {
      if (i !== index) {
        shareTriggr.classList.remove("shareTrigger-Active");
      }
    });

    waShares.forEach((waShare, i) => {
      if (i !== index) {
        waShare.classList.remove("waShare-Active");
      }
    });
  });
});

// Close elements when the document is clicked outside the desired elements
document.addEventListener("click", () => {
  // Close elements that were not clicked
  shareTriggers.forEach((shareTriggr) => {
    shareTriggr.classList.remove("shareTrigger-Active");
  });

  waShares.forEach((waShare) => {
    waShare.classList.remove("waShare-Active");
  });
});
