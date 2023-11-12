const shareTriggers = document.querySelectorAll(".shareToggle");
const waShares = document.querySelectorAll(".waShare");
const instaShare = document.querySelectorAll(".instaShare");
const copylinkShares = document.querySelectorAll(".copylinkShare");

shareTriggers.forEach((shareTrigger, index) => {
  shareTrigger.addEventListener("click", (event) => {
    // Stop the event propagation to prevent it from reaching the document click listener
    event.stopPropagation();

    // Toggle class 'shareTrigger-Active' for the clicked element
    shareTrigger.classList.toggle("shareTrigger-Active");

    document.body.classList.add("overflow-hidden");

    // Toggle class 'waShare-Active' for the clicked element
    waShares[index].classList.toggle("waShare-Active");

    // Toggle class 'instaShare-Active' for the clicked element
    instaShare[index].classList.toggle("instaShare-Active");

    // Toggle class 'copylinkShare-Active' for the clicked element
    copylinkShares[index].classList.toggle("copylinkShare-Active");

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

    instaShare.forEach((instaShare, i) => {
      if (i !== index) {
        instaShare.classList.remove("instaShare-Active");
      }
    });

    copylinkShares.forEach((copylinkShare, i) => {
      if (i !== index) {
        copylinkShare.classList.remove("copylinkShare-Active");
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

  copylinkShares.forEach((copylinkShare) => {
    copylinkShare.classList.remove("copylinkShare-Active");
  });

  instaShare.forEach((instaShareother) => {
    instaShareother.classList.remove("instaShare-Active");
  });
});