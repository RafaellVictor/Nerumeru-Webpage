// const typed = new Typed('#text', {
//     strings: [
//     'Is Seeking For More Exciting And Challenging Projects.', 
//     'Is Eager to Tackle More Stimulating and Demanding Assignments.',
//     'Is Hunting for More Thrilling and Ambitious Opportunities.',
//     'Is Yearning for More Inspiring and Demanding Work.'
//     ],
//     typeSpeed: 40,
//     backSpeed: 20,
//     loop : true,
//     smartBackspace: true, // Default value
//   });


const textElement = document.getElementById('text');
const texts = [
  "Happy Pets Simple Care <br> Nerumeru",
  "Nerumeru's Delightful <br> Pets",
  "Love and Care for <br> Your Pets",
  "Discover the Joy <br> of Pet Companionship",
  "Creating Happy Moments <br> with Your Pets"
];

let textIndex = 0;
let charIndex = 0;

function typeText() {
  const currentText = texts[textIndex].slice(0, charIndex++);
  textElement.innerHTML = currentText;

  if (charIndex <= texts[textIndex].length) {
    setTimeout(typeText, 50);
  } else {
    setTimeout(eraseText, 1000); // Wait for a second before erasing
  }
}

function eraseText() {
  const currentText = texts[textIndex].slice(0, charIndex--);
  textElement.innerHTML = currentText;

  if (charIndex >= 0) {
    setTimeout(eraseText, 10); // Adjust the erasing speed
  } else {
    textIndex = (textIndex + 1) % texts.length;
    setTimeout(typeText, 100); // Wait for half a second before typing the next text
  }
}

// Start typing when the page is loaded
window.onload = typeText;
