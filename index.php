<?php
require "function.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/output.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Nerumeru | Homepage</title>
</head>

<body>
  <?php include "layout/navbar.php" ?>
  <main>
    <section class="hero">
      <!-- Php Code -->
      <?php $hero_section = query("SELECT * FROM herosection WHERE status = 1; ")[0];  ?>
      <!-- Json Attach Data sending -->
      <script>
        const heroSectionData = <?php echo json_encode($hero_section); ?>;
      </script>
      <!-- Json Attach Data sending end -->
      <!-- Php Code End -->
      <img src="img/Bulat-Hero.png" class="absolute top-0 right-1/2 translate-x-1/2 -z-10 w-full md:block hidden" alt="" />
      <!-- 3xl:mt-80 2xl:mt-48 mt-10 -->
      <span class="flex md:flex-col flex-col-reverse">
        <div class="container relative 3xl:top-32 xl:top-20 md:top-2.5">
          <div class="flex flex-col items-center 3xl:gap-4 xl:gap-6 lg:gap-7 gap-4">
            <h2 id="text" class="3xl:text-5xl 2xl:text-4xl lg:text-3xl md:text-2xl text-xl md:w-[43%] w-[80%]  mx-auto 3xl:h-[100px] 2xl:h-[76px]  md:h-[56px] h-11 text-center font-extrabold  text-blue-Neru"></h2>
            <h6 class="text-center text-grey-neru xl:w-[30%] md:w-[50%] w-fit">
              <?= $hero_section["hero_subtitle"] ?>
            </h6>
            <a href="#whyus" class="bg-blue-Neru w-fit mx-auto lg:px-16 lg:py-3 px-8 py-2 md:text-base text-xs text-white font-bold rounded-full"><?= $hero_section["hero_button1"] ?></a>
            <a href="catalog.php" class="cursor-pointer outline hover:outline-none hover:text-white outline-2 relative w-fit mx-auto group outline-grey-neru text-grey-neru transition-all ease-linear duration-200 lg:px-4 px-2.5 lg:text-sm text-xs py-1.5 font-bold rounded-full overflow-hidden"><?= $hero_section["hero_button2"] ?>
              <div class="-z-10 w-full h-full flex items-center justify-center text-white bg-blue-Neru absolute rounded-full inset-x-0 top-0 -translate-x-full group-hover:translate-x-0 transition-all ease-linear duration-200"></div>
            </a>
          </div>
        </div>
        <div class="container 3xl:mt-48 2xl:mt-24 xl:mt-20 md:mt-0 mt-5">
          <img id="heroimg" src="img/<?= $hero_section["hero_img"] ?>" class="mx-auto xl:w-[55%] transition-transform ease-in-out duration-300 md:w-[60%] w-fit h-[45%]" alt="" />
        </div>
      </span>
    </section>
    <section class="why-us" id="whyus">
      <div class="container">
        <div class="title flex gap-2.5 flex-col lg:items-start items-center">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">Why us ?</h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="grid md:grid-cols-4 grid-cols-2 mt-12 mx-auto 3xl:gap-16 2xl:gap-10 xl:gap-5 gap-3">
          <?php $whyus = query("SELECT * FROM whyus WHERE status=1;") ?>
          <?php foreach ($whyus as $whys) : ?>
            <div class="text-center relative group overflow-hidden cursor-pointer">
              <img src="img/<?= $whys["whyus_img"] ?>" class="w-full object-fill" alt="" />
              <div class="absolute -translate-y-full group-hover:translate-y-0 transition-all ease-in-out duration-300 n h-full inset-0 bg-blue-Neru bg-opacity-70 text-white p-4 flex items-center flex-col lg:gap-4 md:gap-2 gap-1 justify-center">
                <h6 class="font-bold lg:text-base md:text-xs text-[8px]"><?= $whys["whyus_title"] ?></h6>
                <h6 class="lg:text-sm md:text-xs text-[8px] font-medium lg:text-center text-justify line-clamp-4"><?= $whys["whyus_subtitle"] ?></h6>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="catalog">
      <div class="container">
        <div class="title text-center flex flex-col md:gap-3 gap-1.5">
          <h3 class="font-extrabold">Recomended Product</h3>
          <h6 class="font-medium md:text-lg text-xs">select the product according to your wishes</h6>
        </div>
        <div class="text-white text-center mt-12">
          <?php $productRecommend = query("SELECT * FROM recommendsection WHERE status=1;") ?>
          <div class="grid md:grid-cols-6 md:grid-rows-6 grid-cols-4 grid-rows-4 md:gap-4 gap-2 h-[600px] max-w-screen mx-auto lg:text-4xl md:text-xl text-sm">
            <div onclick="window.location.href ='bedding.php';" style="background-image: url('img/<?= $productRecommend[0]["recommend_img"] ?>')" ; class="md:col-span-4 md:row-span-4 col-span-4 row-span-1 bg-blue-Neru  bg-no-repeat bg-cover bg-center relative overflow-hidden group cursor-pointer">
              <div class="overlay-text bg-black bg-opacity-70 absolute inset-0 flex items-center -translate-x-full group-hover:-translate-x-0 transition-all ease-in-out duration-500 justify-center font-extrabold tracking-widest"><?= $productRecommend[0]["recommend_title"] ?></div>
            </div>
            <div onclick="window.location.href ='sanitize.php';" style="background-image: url('img/<?= $productRecommend[2]["recommend_img"] ?>')" ; class="bg-blue-Neru md:row-span-3 md:col-span-2 col-span-2 row-span-1 bg-sanitize-catalog bg-no-repeat bg-cover bg-center relative overflow-hidden group cursor-pointer">
              <div class="overlay-text bg-black bg-opacity-70 absolute inset-0 flex items-center translate-x-full group-hover:translate-x-0 transition-all ease-in-out duration-500 justify-center font-extrabold tracking-widest"><?= $productRecommend[2]["recommend_title"] ?></div>
            </div>
            <div onclick="window.location.href ='trolly.php';" style="background-image: url('img/<?= $productRecommend[4]["recommend_img"] ?>')" ; class="bg-blue-Neru md:col-span-2 md:row-span-5 col-span-2 row-span-2 bg-trolly-catalog bg-no-repeat bg-cover bg-center relative overflow-hidden group cursor-pointer">
              <div class="overlay-text bg-black bg-opacity-70 absolute inset-0 flex items-center -translate-y-full group-hover:-translate-y-0 transition-all ease-in-out duration-500 justify-center font-extrabold tracking-widest"><?= $productRecommend[4]["recommend_title"] ?></div>
            </div>
            <div onclick="window.location.href ='toys.php';" style="background-image: url('img/<?= $productRecommend[1]["recommend_img"] ?>')" ; class="bg-blue-Neru w-full md:col-span-2 md:row-span-4 col-span-2 bg-toys-catalog bg-no-repeat bg-cover bg-center relative overflow-hidden group cursor-pointer">
              <div class="overlay-text bg-black bg-opacity-70 absolute inset-0 flex items-center translate-y-full group-hover:translate-y-0 transition-all ease-in-out duration-500 justify-center font-extrabold tracking-widest"><?= $productRecommend[1]["recommend_title"] ?></div>
            </div>
            <div onclick="window.location.href ='pillow.php';" style="background-image: url('img/<?= $productRecommend[3]["recommend_img"] ?>')" ; class="bg-blue-Neru md:col-span-2 md:row-span-4 col-span-4 bg-pillow-catalog bg-no-repeat bg-cover bg-center relative overflow-hidden group cursor-pointer">
              <div class="overlay-text bg-black bg-opacity-70 absolute inset-0 flex items-center translate-x-full group-hover:translate-x-0 transition-all ease-in-out duration-500 justify-center font-extrabold tracking-widest"><?= $productRecommend[3]["recommend_title"] ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="whats'on nerumeru overflow-hidden">
      <div class="container">
        <div class="title flex gap-2.5 flex-col items-center">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">What's On Nerumeru ?</h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="swiper ProductCoverflow-content mt-12" id="WhatsOn">
          <div class="swiper-wrapper pb-12">
            <?php $eventneru = query("SELECT * FROM neru_event WHERE event_type = 'news' AND status = 1") ?>
            <?php foreach ($eventneru as $event) : ?>
              <div class="swiper-slide">
                <img src="img/WhatOnNerumeru/<?= $event["event_img"] ?>" />
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination swiper-custom-pagination-WhatsOn"></div>
        </div>
      </div>
    </section>
    <section class="bio bg-blue-Neru 3xl:py-20 lg:py-16 py-6">
      <?php $bioneru = query("SELECT * FROM bio WHERE status = 1") ?>
      <div class="container">
        <div class="grid md:grid-cols-2 grid-cols-1 text-white gap-6">
          <h2 class="flex flex-col md:gap-8 gap-2.5 font-extrabold my-auto 2xl:text-5xl md:text-3xl lg:tracking-[10px] md:tracking-[5px]">
            <?= $bioneru[0]["bio_title"] ?>
            <span class="2xl:text-7xl md:text-4xl lg:tracking-widest"> <?= $bioneru[0]["bio_Subtitle"] ?></span>
          </h2>
          <h6 class="text-justify xl:text-base text-xs">
            <?= $bioneru[0]["bio_full"] ?>
          </h6>
        </div>
      </div>
    </section>
    <section class="testimonial relative">
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
    <section class="insta">
      <div class="container">
        <div class="title flex gap-2.5 flex-col lg:items-start items-center mb-10">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">instagram</h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="elfsight-app-74d2d199-22bd-44a0-8d1b-865bf0233c05" data-elfsight-app-lazy></div>
      </div>
    </section>
    <?php include "layout/floatingButton.php" ?>
  </main>
  <?php include "layout/footer.php" ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/button.js"></script>
<script src="js/nav.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="js/Typing-Text.js"></script>
<script src="js/floatingbtn.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
      var scrollY = window.scrollY || window.pageYOffset;
      var heroimg = document.getElementById("heroimg");
      heroimg.classList.toggle("transform", scrollY > 0);
      heroimg.style.transform = "translateY(" + (scrollY / 14) + "px)"; /* Ganti 2 dengan nilai yang diinginkan */
    });
  });
</script>

</html>