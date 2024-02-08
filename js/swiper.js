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
      slidesPerView: 1,
      centeredSlides: true,
    },

    430: {
      slidesPerView: 1.2,
      centeredSlides: true,
    },

    540: {
      slidesPerView: 1.5,
      centeredSlides: true,
    },

    768: {
      slidesPerView: 1.8,
      spaceBetween: 16,
      centeredSlides: true,
    },

    912: {
      slidesPerView: 1.8,
      spaceBetween: 16,
      centeredSlides: true,
    },

    1024: {
      slidesPerView: 2.2,
      spaceBetween: 16,
      centeredSlides: true,
    },

    1280: {
      slidesPerView: 3,
      spaceBetween: 16,
      centeredSlides: true,
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

  effect: "fade", // Use fade effect
  fadeEffect: {
    crossFade: true,
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

document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".ProductCoverflow-content", {
    effect: "coverflow",
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    coverflowEffect: {
      rotate: -2.3,
      stretch: 0,
      depth: 40,
      modifier: 4.5,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-custom-pagination-WhatsOn",
      clickable: true,
      dynamicBullets: true,
    },
    breakpoints: {
      360: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },

      600: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },
      968: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },
    },
  });

  // function setSlidesPerView() {
  //   // Get the number of swiper slides inside .location-content
  //   let swiperSlidesCount = document.querySelectorAll('.ProductCoverflow-content .swiper-slide').length;

  //   // Set slidesPerView based on the count
  //   return swiperSlidesCount > 3 ? 3.2 : 3;
  // }

  function checkLoopSlides() {
    let swiperSlidesCount = document.querySelectorAll(".ProductCoverflow-content .swiper-slide").length;

    return swiperSlidesCount > 3;
  }

  function checkCenteredSlides() {
    // Get the number of swiper slides inside .location-content
    let swiperSlidesCount = document.querySelectorAll(".ProductCoverflow-content .swiper-slide").length;

    // Check if the count is greater than 3
    return swiperSlidesCount > 3;
  }
});

document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".EventCoverflow-content", {
    effect: "coverflow",
    grabCursor: false,
    slideShadows: false,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 70,
      modifier: 3,
      slideShadows: true,
    },
    breakpoints: {
      360: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },

      600: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },
      968: {
        slidesPerView: 3,
        loop: checkLoopSlides(),
        centeredSlides: checkCenteredSlides(),
      },
    },
  });

  function checkLoopSlides() {
    let swiperSlidesCount = document.querySelectorAll(".EventCoverflow-content .swiper-slide").length;

    return swiperSlidesCount > 3;
  }

  function checkCenteredSlides() {
    // Get the number of swiper slides inside .location-content
    let swiperSlidesCount = document.querySelectorAll(".EventCoverflow-content .swiper-slide").length;

    // Check if the count is greater than 3
    return swiperSlidesCount > 3;
  }
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

let filterContent = new Swiper(".filter-content", {

  grabCursor: true,
  
  navigation: {
    nextEl: "#nextFilterSm",
    prevEl: "#prevFilterSm",
  },

  breakpoints: {
    360: {
      slidesPerView: 2.2,
      spaceBetween: 6,
    },

    430: {
      slidesPerView: 2.4,
      spaceBetween: 6,
    },

    540: {
      slidesPerView: 1.8,

    },

    768: {
      slidesPerView: 3.2,
      spaceBetween: 10,

    },

    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,

    },

    1920: {
      slidesPerView: 3.8,
      spaceBetween: 10,
    
    },
  },

});

let filterContentSm = new Swiper(".filter-contentSm", {

  grabCursor: true,
  
  navigation: {
    nextEl: "#nextFilterSm2",
    prevEl: "#prevFilterSm2",
  },

  breakpoints: {
    360: {
      slidesPerView: 2.2,
      spaceBetween: 6,
    },

    430: {
      slidesPerView: 2.4,
      spaceBetween: 6,
    },

    540: {
      slidesPerView: 1.8,

    },

    768: {
      slidesPerView: 3.2,
      spaceBetween: 10,

    },

    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,

    },

    1920: {
      slidesPerView: 3.8,
      spaceBetween: 10,
    
    },
  },

});

