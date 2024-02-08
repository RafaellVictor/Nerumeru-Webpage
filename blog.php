<?php
include("function.php");
$icons = query("SELECT * FROM blog WHERE status = '1' AND blog_type = 'icon' ;");
$vidios = query("SELECT * FROM blog WHERE status = '1' AND blog_type = 'vidio' ;")[0];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/output.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Nerumeru | Blog</title>
</head>

<body>
  <?php include "layout/navbar.php" ?>
  <main>
    <section class="hero lg:mt-44 md:mt-32">
      <div class="container max-w-screen-lg flex flex-col">
        <div class="content-wrapper flex flex-col 2xl:gap-12 gap-8">
          <div class="logo flex flex-col gap-4 items-center justify-center">
            <img src="img/logoNerumeru.png" class="xl:w-[10%] w-[20%]" alt="" />
          </div>
          <div class="title flex 2xl:gap-12 gap-8 flex-col items-center">
            <h3 class="font-semibold text-center tracking-widest">
              Our Story
            </h3>
            <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
          </div>
          <div class="toggle-event grid md:grid-cols-4 grid-cols-3 lg:gap-20 md:gap-10 gap-5">
            <?php foreach ($icons as $icon) : ?>
              <span class="flex flex-col gap-2 items-center w-full">
                <a href="#OurStory" class="rounded-full group relative overflow-hidden cursor-pointer bg-blue-Neru xl:p-9 p-6">
                  <img src="<?= $icon["blog_icon"] ?>" class="xl:w-14 w-7 " alt="">
                  <div class="bg-black bg-opacity-50 absolute flex flex-col items-center justify-center transition-all ease-in-out duration-300 top-0 inset-x-0 w-full h-full rounded-full -translate-y-full -translate-x-20 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                  <div class="bg-black bg-opacity-50 absolute flex flex-col items-center justify-center text-white font-semibold transition-all ease-in-out duration-300 top-0 inset-x-0 w-full h-full rounded-full translate-y-full translate-x-20 group-hover:translate-x-0 group-hover:translate-y-0">
                    <h6 class="md:text-base text-[10px] text-white font-semibold">
                      <?= $icon["blog_icon_title"] ?>
                    </h6>
                  </div>
                </a>
              </span>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>
    <section id="OurStory" class="video mx-auto lg:max-w-screen-xl md:w-full overflow-hidden">
      <div class="container">
        <div class="rounded-xl overflow-hidden player">
          <div class="plyr__video-embed" id="player">
            <!-- <video src="<?= $vidios["blog_vidio"] ?>" controls autoplay allowfullscreen allowtransparency allow="autoplay"></video> -->
            <iframe src="https://youtu.be/TQ0ra_pZ1SM?si=J026Tm_NGh8GAj0b" allowfullscreen allowtransparency allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </section>
    <section id="OurEvent" class="whats'on nerumeru">
      <div class="container">
        <div class="title flex gap-2.5 flex-col items-center mt-12">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">
            OUR EVENTS
          </h3>
          <h6 class="text-center font-semibold">
            This is all the reviwes of all the <br />
            events that been held
          </h6>
        </div>
        <div class="swiper EventCoverflow-content mt-12" id="WhatsOn">
          <div class="swiper-wrapper">
            <?php $eventneru = query("SELECT * FROM neru_event WHERE event_type = 'event' AND status = 1") ?>
            <?php foreach ($eventneru as $event) : ?>
              <div class="swiper-slide">
                <img src="img/WhatOnNerumeru/<?= $event["event_img"] ?>" />
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <section id="HappyStory" class="testimonial relative">
      <div class="container">
        <div class="title text-center flex flex-col md:gap-3 gap-1.5">
          <h3 class="font-extrabold">What Our Customers Says About Us</h3>
          <h6 class="font-medium md:text-lg text-xs">Happy Story From Our Customers</h6>
        </div>
        <div class="swiper my-10">
          <div class="testimonial-Content">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card bg-white h-[313px] shadow-md px-6 py-8 w-full flex flex-col items-center gap-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="text-center 3xl:px-16 2xl:px-7 h-32 line-clamp-5">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</h6>
                  <span class="flex items-center gap-4">
                    <img src="img/Image-testi.png" alt="" />
                    <h6>
                      Serhiy Hipskyy
                      <br />
                      CEO Universal
                    </h6>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-custom-nav absolute lg:-bottom-10 -bottom-5 right-1/2 translate-x-1/2 z-10 flex gap-4">
        <svg id="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42" class="md:w-12 w-10 relative text-white transition-all ease-in-out duration-300 opacity-30 hover:opacity-100" fill="none">
          <rect x="0.5" y="0.5" width="41" height="41" rx="20.5" stroke="#42454A" />
          <path d="M28 21H14M14 21L18 17M14 21L18 25" stroke="#42454A" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <svg id="next" xmlns="http://www.w3.org/2000/svg" class="md:w-12 w-10 text-white transition-all ease-in-out duration-300 opacity-30 hover:opacity-100 relative" viewBox="0 0 42 42" fill="none">
          <rect x="41.5" y="41.5" width="41" height="41" rx="20.5" transform="rotate(-180 41.5 41.5)" stroke="#42454A" />
          <path d="M14 21L28 21M28 21L24 25M28 21L24 17" stroke="#42454A" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </section>
    <section id="OurInsta" class="insta">
      <div class="container">
        <div class="title flex gap-2.5 flex-col lg:items-start items-center mb-10">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">
            instagram
          </h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="elfsight-app-74d2d199-22bd-44a0-8d1b-865bf0233c05" data-elfsight-app-lazy></div>
      </div>
    </section>
    <?php include "layout/floatingButton.php" ?>
  </main>
  <?php include "layout/footer.php" ?>
  <script src="js/plyr.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/button.js"></script>
<script src="js/nav.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="js/floatingbtn.js"></script>

</html>