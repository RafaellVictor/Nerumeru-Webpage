const accordionHeaders = document.querySelectorAll(".accordion-header");

// Function to toggle the accordion state
function toggleAccordion(accordionHeader) {
    const accordionBody = accordionHeader.nextElementSibling;

    // Toggle active class for the clicked header
    accordionHeader.classList.toggle("active");

    if (accordionHeader.classList.contains("active")) {
        // Expand the accordion body
        accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    } else {
        // Collapse the accordion body
        accordionBody.style.maxHeight = 0;
    }

    // Loop through other headers to deactivate them
    accordionHeaders.forEach((otherAccordionHeader) => {
        if (otherAccordionHeader !== accordionHeader) {
            const otherAccordionBody = otherAccordionHeader.nextElementSibling;

            // Deactivate other headers
            otherAccordionHeader.classList.remove("active");
            otherAccordionBody.style.maxHeight = 0;
        }
    });
}

// Initialize the first accordion as active
const firstAccordionHeader = accordionHeaders[0];
toggleAccordion(firstAccordionHeader);

// Add click event listeners to all headers
accordionHeaders.forEach((accordionHeader) => {
    accordionHeader.addEventListener("click", () => {
        toggleAccordion(accordionHeader);
    });
});
