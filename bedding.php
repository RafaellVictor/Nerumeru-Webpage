<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/output.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Nerumeru | Bedding</title>
</head>



<body>
  <!-- pb-14 -->
  <?php include "layout/navbar.php";
  $neru_one = query("SELECT * FROM product WHERE product_type = 'Bedding' AND product_categories = 'Neru One' AND status = 1; ");
  $neru_two = query("SELECT * FROM product WHERE product_type = 'Bedding' AND product_categories = 'Neru Two' AND status = 1; ");
  ?>
  <main>
    <section class="custom-bed lg:mt-52 md:mt-32">
      <div class="container relative md:grid md:grid-cols-2 md:gap-0 gap-y-4 w-full flex flex-col-reverse md:place-items-end">
        <div class="desc col-span-1 w-full flex flex-col lg:gap-5 gap-4 capitalize ">
          <div class="flex flex-col gap-2">
            <h3 class="font-bold lg:text-2xl md:text-base text-sm">Order Produk Custom Bedding Di Whatsapp</h3>
            <h6 class="font-medium">Neru meru orthopedic bed structure</h6>
          </div>
          <h6 class="font-light text-justify 2xl:text-base xl:text-sm md:text-sm text-xs">
            The pet bed combines high-quality materials for comfort and durability. Its tough, scratch-resistant, and breathable outer fabric is machine washable. Beneath it, soft yet durable memory foam eases joint pressure and supports the pet. The inner fabric, also machine washable, is
            water-resistant and breathable. Structural support is provided by medium-firm, high-density polyurethane foam. In summary, this pet bed offers durability, comfort, and easy maintenance for your pet's relaxation.
          </h6>
          <div class="nav-button font-semibold flex gap-4">
            <button class="bg-green-500 md:h-10 w-48 h-8 px-6 rounded-md text-white md:text-base text-xs">Order now</button>
            <button class="overflow-hidden group relative custombedToggle outline outline-2 hover:outline-none transition-all ease-in-out duration-300 hover:text-white outline-blue-Neru md:h-10 w-48 h-8 rounded-md text-blue-Neru md:text-base text-xs">
              What to custom?
              <div class="-z-10 w-full h-full rounded-md flex items-center justify-center text-white bg-blue-Neru absolute inset-x-0 top-0 -translate-x-full group-hover:translate-x-0 transition-all ease-linear duration-200"></div>
            </button>
          </div>
        </div>
        <div class="col-span-1 md:w-1/2 w-full md:absolute top-0 flex justify-end items-end self-end">
          <img src="img/Custom-Bed.png" class="3xl:w-[45%] xl:w-[55%] lg:w-[72%] md:w-[90%] w-full  object-contain" alt="" />
        </div>
      </div>
    </section>
    <section>
      <div class="text-start fixed inset-0 bg-black bg-opacity-0 flex justify-center items-center -z-20 text-black">
        <div id="BoxWhatToCustom" class="alamat-wrapper opacity-0 bg-white lg:w-[40%] md:w-[70%] w-[90%] h-fit relative">
          <img src="img/WhatToCustom.png" class="" alt="" />
          <div class="closebox absolute cursor-pointer -top-2 p-2 -right-3 bg-blue-Neru text-white rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M18 6l-12 12"></path>
              <path d="M6 6l12 12"></path>
            </svg>
          </div>
        </div>
      </div>
    </section>
    <section class="Neruone" id="Neruone">
      <div class="container lg:p-4 p-2 md:mt-10 mt-5 flex flex-col gap-4">
        <div class="title flex gird gap-2.5 flex-col md:items-start items-center">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">Neru One</h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3  grid-cols-2 md:gap-2.5 gap-1.5 gap-x-2 gap-y-2 overflow-hidden mt-6">
          <?php foreach ($neru_one as $bed) : ?>
            <!-- Item -->
            <div class="h-fit card-wrapper shadow-lg flex flex-col w-full gap-3 bg-white rounded-md transition-all ease-in-out duration-300">
              <img src="img/<?= $bed['product_img'] ?>" onclick="window.location.href ='detail-product.php?product_id=<?= $bed['product_id'] ?>';" class="3xl:h-[370px] 2xl:h-[308px] md:h-[265px] rounded-b-none h-[170px] object-contain  cursor-pointer rounded-md w-full" alt="" />
              <div class="card-body md:py-3 lg:h-40 md:h-36 h-[120px] py-2 3xl:px-6 2xl:px-4 xl:px-3 md:px-3.5 px-1.5 flex flex-col md:gap-2 gap-1">
                <h6 class="font-medium flex flex-col lg:text-lg md:text-base text-[11px] line-clamp-2"><?= $bed['product_name'] ?></h6>
                <span class="flex justify-between items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-28 md:w-20 w-16" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="flex gap-2.5 items-center font-semibold lg:text-base md:text-sm text-[11px]">
                    Stock
                    <span class="stock bg-blue-Neru md:px-3 px-2.5 py-0.5 rounded-md text-white lg:text-base md:text-sm text-[11px]"><?= $bed['product_stock'] ?></span>
                  </h6>
                </span>
                <h6 class="flex justify-between items-center mt-2 font-medium lg:text-lg md:text-sm text-[11px]">
                  <span>Rp.<?= number_format($bed['product_price'], 0, ',', ',') ?></span>
                  <span class="relative">
                    <a class="cursor-pointer group">
                      <svg xmlns="http://www.w3.org/2000/svg" class="shareToggle bg-blue-Neru p-1.5 transition-all ease-in-out duration-300 rounded-full lg:w-7 md:w-6 w-[22px] text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M8.7 10.7l6.6 -3.4"></path>
                        <path d="M8.7 13.3l6.6 3.4"></path>
                      </svg>
                    </a>
                    <a href="copylink.html">
                      <svg xmlns="http://www.w3.org/2000/svg" class="waShare absolute top-0 lg:w-7 md:w-6 w-[22px] bg-blue-Neru rounded-full transition-all ease-in-out duration-300 -z-10 text-white p-1.5 left-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                      </svg>
                    </a>
                  </span>
                </h6>
              </div>
            </div>
            <!-- Item End -->
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="Nerutwo" id="Nerutwo">
      <div class="container lg:p-4 p-2 md:mt-10 mt-5 flex flex-col gap-4">
        <div class="title flex gap-2.5 flex-col md:items-end items-center">
          <h3 class="font-extrabold 3xl:text-3xl 2xl:text-2xl md:text-2xl text-xl">Neru Two</h3>
          <hr class="3xl:w-20 2xl:w-16 md:w-14 w-10 md:border-8 border-[5px] border-blue-Neru rounded-sm" />
        </div>
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 grid-cols-2 md:gap-2.5 gap-1.5 gap-x-2 gap-y-2 overflow-hidden mt-6">
          <!-- Item -->
          <?php foreach ($neru_two as $bed) : ?>
            <!-- Item -->
            <div class="h-fit card-wrapper shadow-lg flex flex-col w-full gap-3 bg-white rounded-md transition-all ease-in-out duration-300">
              <img src="img/<?= $bed['product_img'] ?>" onclick="window.location.href ='detail-product.php?product_id=<?= $bed['product_id'] ?>';" class="3xl:h-[370px] 2xl:h-[308px] md:h-[265px] rounded-b-none h-[170px] object-contain  cursor-pointer rounded-md w-full" alt="" />
              <div class="card-body md:py-3 lg:h-40 md:h-36 h-[120px] py-2 3xl:px-6 2xl:px-4 xl:px-3 md:px-3.5 px-1.5 flex flex-col md:gap-2 gap-1">
                <h6 class="font-medium flex flex-col lg:text-lg md:text-base text-[11px] line-clamp-2"><?= $bed['product_name'] ?></h6>
                <span class="flex justify-between items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-28 md:w-20 w-16" viewBox="0 0 96 17" fill="none">
                    <path d="M8.72727 0L11.0357 5.20317L17.0274 5.6535L12.4623 9.31956L13.857 14.8011L8.72727 11.8636L3.59751 14.8011L4.99222 9.31956L0.427143 5.6535L6.41888 5.20317L8.72727 0Z" fill="#FE8B75" />
                    <path d="M28.364 0L30.6724 5.20317L36.6641 5.6535L32.0991 9.31956L33.4938 14.8011L28.364 11.8636L23.2342 14.8011L24.6289 9.31956L20.0639 5.6535L26.0556 5.20317L28.364 0Z" fill="#FE8B75" />
                    <path d="M47.9997 0L50.3081 5.20317L56.2999 5.6535L51.7348 9.31956L53.1295 14.8011L47.9997 11.8636L42.87 14.8011L44.2647 9.31956L39.6996 5.6535L45.6913 5.20317L47.9997 0Z" fill="#FE8B75" />
                    <path d="M67.6363 0L69.9447 5.20317L75.9365 5.6535L71.3714 9.31956L72.7661 14.8011L67.6363 11.8636L62.5066 14.8011L63.9013 9.31956L59.3362 5.6535L65.3279 5.20317L67.6363 0Z" fill="#FE8B75" />
                    <path d="M87.2732 0L89.5816 5.20317L95.5733 5.6535L91.0082 9.31956L92.4029 14.8011L87.2732 11.8636L82.1434 14.8011L83.5381 9.31956L78.973 5.6535L84.9648 5.20317L87.2732 0Z" fill="#FE8B75" />
                  </svg>
                  <h6 class="flex gap-2.5 items-center font-semibold lg:text-base md:text-sm text-[11px]">
                    Stock
                    <span class="stock bg-blue-Neru md:px-3 px-2.5 py-0.5 rounded-md text-white lg:text-base md:text-sm text-[11px]"><?= $bed['product_stock'] ?></span>
                  </h6>
                </span>
                <h6 class="flex justify-between items-center mt-2 font-medium lg:text-lg md:text-sm text-[11px]">
                  <span>Rp.<?= number_format($bed['product_price'], 0, ',', ',') ?></span>
                  <span class="relative">
                    <a class="cursor-pointer group">
                      <svg xmlns="http://www.w3.org/2000/svg" class="shareToggle bg-blue-Neru p-1.5 transition-all ease-in-out duration-300 rounded-full lg:w-7 md:w-6 w-[22px] text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M8.7 10.7l6.6 -3.4"></path>
                        <path d="M8.7 13.3l6.6 3.4"></path>
                      </svg>
                    </a>
                    <a href="copylink.html">
                      <svg xmlns="http://www.w3.org/2000/svg" class="waShare absolute top-0 lg:w-7 md:w-6 w-[22px] bg-blue-Neru rounded-full transition-all ease-in-out duration-300 -z-10 text-white p-1.5 left-0" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                      </svg>
                    </a>
                  </span>
                </h6>
              </div>
            </div>
            <!-- Item End -->
          <?php endforeach; ?>
          <!-- Item End -->
        </div>
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
<script src="js/bedding.js"></script>
<script src="js/button.js"></script>
<script src="js/share.js"></script>
<script src="js/nav.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="js/floatingbtn.js"></script>

</html>