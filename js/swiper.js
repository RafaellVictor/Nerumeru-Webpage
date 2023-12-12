let TestimonialSwiper = new Swiper(".testimonial-Content", {
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  loop: true,
  spaceBetween: 12,
  grabCursor: true,
  // If we need pagination

  // Navigation arrows
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },

  breakpoints: {
    360: {
      slidesPerView: 1.1,
      centeredSlides: true,
    },

    600: {
      slidesPerView: 1.2,
      centeredSlides: true,
    },
    968: {
      slidesPerView: 3,
      spaceBetween: 32,
    },
  },
});

let bannerSwiper = new Swiper(".banner-content ", {
  grabCursor: true,
  loop: true,
  // speed: 600,
  // parallax: true,
  // If we need pagination

  pagination: {
    el: ".swiper-custom-pagination",
    renderBullet: function (index, className) {
      return `<div class=${className}>
            <span class="number">${index + 1}</span>
            <span class="line"></span>
            </div>`;
    },
    clickable: true,
  },

  effect: 'fade', // Use fade effect
  fadeEffect: {
    crossFade: true
  },

  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  // Navigation arrows
  breakpoints: {
    360: {
      slidesPerView: 1,
    },

    600: {
      centeredSlides: true,
      slidesPerView: 1,
    },
    968: {
      centeredSlides: true,
      slidesPerView: 1,
    },
  },
});

let Otherproduct = new Swiper(".otherProduct-Content", {
  loop: true,
  grabCursor: true,
  // If we need pagination

  // Navigation arrows
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },

  breakpoints: {
    360: {
      slidesPerView: 1.9,
      spaceBetween: 6,
      centeredSlides: true,
    },

    600: {
      slidesPerView: 3,
      spaceBetween: 9,
      centeredSlides: true,
    },
    968: {
      slidesPerView: 4,
      spaceBetween: 10,
      centeredSlides: true,
    },
  },
});

// Coverflow

var swiper = new Swiper(".ProductCoverflow-content", {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slideShadows:false,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  coverflowEffect: {
    rotate: -4,
    stretch: 0,
    depth: 100,
    modifier: 4.5,
    slideShadows : true,
  },
  pagination: {
    el: '.swiper-custom-pagination-WhatsOn',
    clickable: true,
    dynamicBullets : true,
  },
  breakpoints: {
    360: {
      slidesPerView: 2,

    },

    600: {
      slidesPerView: 2,

    },
    968: {
      slidesPerView: 2.5,
    },
  },
});

var swiper = new Swiper(".EventCoverflow-content", {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slideShadows:false,
  loop: true,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 70,
    modifier: 3,
    slideShadows : true,
  },
  breakpoints: {
    360: {
      slidesPerView: 2,

    },

    600: {
      slidesPerView: 2,

    },
    968: {
      slidesPerView: 2.5,
    },
  },
});

// Coverflow end


var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  grabCursor: true,
  thumbs: {
    swiper: swiper,
  },
});


