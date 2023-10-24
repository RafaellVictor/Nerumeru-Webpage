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
  // If we need pagination

  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },

  pagination: {
    el: ".swiper-custom-pagination",
    renderBullet: function (index, className) {
      return `<div class=${className}>
            <span class="number">${index + 1}</span>
            <span class="line"></span>
            </div>`;
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  // Navigation arrows
  breakpoints: {
    600: {
      slidesPerView: 1,
    },
    968: {
      slidesPerView: 1,
    },
  },
});
