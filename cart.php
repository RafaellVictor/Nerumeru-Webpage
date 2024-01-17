<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Nerumeru | Cart</title>
  </head>
  <body>
  <?php include "layout/navbar.php" ?>
    <main>
      <section class="cart lg:mt-44 md:mt-32">
        <div class="container flex flex-col gap-6">
          <div class="breadcrumb font-semibold">
            <ul class="flex gap-4 items-center md:text-base text-sm">
              <li><a href="">Home > </a></li>
              <li><a href="">Bedding > </a></li>
              <li><a href="">Detail Product > </a></li>
              <li><a href="" class="text-blue-Neru">Cart</a></li>
            </ul>
          </div>
          <div class="grid lg:grid-cols-7 md:grid-cols-8 grid-cols-4 lg:gap-4 gap-2">
            <div class="left-content md:col-span-5 col-span-4 flex flex-col gap-3">
              <div class="user-informations bg-white px-4 py-6 flex flex-col gap-4">
                <span class="flex justify-between items-center">
                  <h5 class="font-semibold lg:text-base text-sm">Detail Pengeriman</h5>
                  <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-green-500 cursor-pointer">
                    <h6>Ubah Details</h6>
                    <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                      <path d="M16 5l3 3"></path>
                      <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                    </svg>
                    <!-- z-30 -->
                  </a>
                </span>
                <hr />
                <div class="wrapper flex flex-col gap-6">
                  <span>
                    <h6 class="font-semibold lg:text-base text-sm">Nama & Telephone</h6>
                    <h6 class="font-light lg:text-base text-sm">
                      Immanuel Christian Hirani <br />
                      (0813-1480-1495)
                    </h6>
                  </span>
                  <span>
                    <h6 class="font-semibold lg:text-base text-sm">Alamat</h6>
                    <h6 class="font-light lg:text-base text-sm">Tanggerang , Banten , Jalan kakap raya no 15 kecamatan karawaci,kelurahan Cibodas sari</h6>
                  </span>
                </div>
                <hr />
                <div class="relative overflow-hidden cursor-pointer self-end group text-blue-Neru border-2 border-blue-Neru md:px-6 px-4 py-2 rounded-lg">
                  <a href="" class="relative group-hover:z-20"><h6 class="md:text-sm text-xs group-hover:text-white font-semibold">Pilih Alamat Lain?</h6> </a>
                  <div class="z-10 w-full h-full rounded-md flex items-center justify-center text-white bg-blue-Neru absolute inset-x-0 top-0 -translate-x-full group-hover:translate-x-0 transition-all ease-linear duration-200"></div>
                </div>
              </div>
              <div class="cart-item bg-white lg:p-5 p-3">
                <hr class="mb-5" />
                <div class="flex md:gap-6 gap-4 items-center">
                  <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                  <div class="item-informations flex justify-between w-full">
                    <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                      <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                      <h6 class="lg:text-base md:text-sm text-xs">Rp.500.000</h6>
                      <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                      <span id="qty" class="flex gap-2">
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">-</button>
                        <input type="number" class="current-page lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 text-center py-1 bg-white md:text-2xl text-sm outline-none border-blue-Neru border-[1px]" min="0" max="9" value="1" />
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">+</button>
                      </span>
                      <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                        Tulis Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </span>
                    <h6 class="items-center md:gap-4 gap-2 lg:text-base md:text-sm text-xs text-red-500 lg:flex hidden">
                      Delete
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                      </svg>
                    </h6>
                  </div>
                </div>
                <hr class="mt-5" />
                <div class="flex items-center justify-between">
                  <h6 class="gap-1 md:text-sm text-xs items-center text-green-500 mt-2 lg:hidden flex">
                    Tulis Catatan
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                      <path d="M16 5l3 3"></path>
                      <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                    </svg>
                  </h6>
                  <h6 class="items-center md:text-sm text-xs md:gap-4 gap-1 text-red-500 lg:hidden flex mt-2">
                    Delete
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                  </h6>
                </div>
              </div>
              <div class="cart-item bg-white lg:p-5 p-3">
                <hr class="mb-5" />
                <div class="flex md:gap-6 gap-4 items-center">
                  <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                  <div class="item-informations flex justify-between w-full">
                    <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                      <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                      <h6 class="lg:text-base md:text-sm text-xs">Rp.500.000</h6>
                      <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                      <span id="qty" class="flex gap-2">
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">-</button>
                        <input type="number" class="current-page lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 text-center py-1 bg-white md:text-2xl text-sm outline-none border-blue-Neru border-[1px]" min="0" max="9" value="1" />
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">+</button>
                      </span>
                      <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                        Tulis Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </span>
                    <h6 class="items-center md:gap-4 gap-2 lg:text-base md:text-sm text-xs text-red-500 lg:flex hidden">
                      Delete
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                      </svg>
                    </h6>
                  </div>
                </div>
                <hr class="mt-5" />
                <div class="flex items-center justify-between">
                  <h6 class="gap-1 md:text-sm text-xs items-center text-green-500 mt-2 lg:hidden flex">
                    Tulis Catatan
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                      <path d="M16 5l3 3"></path>
                      <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                    </svg>
                  </h6>
                  <h6 class="items-center md:text-sm text-xs md:gap-4 gap-1 text-red-500 lg:hidden flex mt-2">
                    Delete
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                  </h6>
                </div>
              </div>
              <div class="cart-item bg-white lg:p-5 p-3">
                <hr class="mb-5" />
                <div class="flex md:gap-6 gap-4 items-center">
                  <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                  <div class="item-informations flex justify-between w-full">
                    <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                      <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                      <h6 class="lg:text-base md:text-sm text-xs">Rp.500.000</h6>
                      <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                      <span id="qty" class="flex gap-2">
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">-</button>
                        <input type="number" class="current-page lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 text-center py-1 bg-white md:text-2xl text-sm outline-none border-blue-Neru border-[1px]" min="0" max="9" value="1" />
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">+</button>
                      </span>
                      <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                        Tulis Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </span>
                    <h6 class="items-center md:gap-4 gap-2 lg:text-base md:text-sm text-xs text-red-500 lg:flex hidden">
                      Delete
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                      </svg>
                    </h6>
                  </div>
                </div>
                <hr class="mt-5" />
                <div class="flex items-center justify-between">
                  <h6 class="gap-1 md:text-sm text-xs items-center text-green-500 mt-2 lg:hidden flex">
                    Tulis Catatan
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                      <path d="M16 5l3 3"></path>
                      <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                    </svg>
                  </h6>
                  <h6 class="items-center md:text-sm text-xs md:gap-4 gap-1 text-red-500 lg:hidden flex mt-2">
                    Delete
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                  </h6>
                </div>
              </div>
              <div class="cart-item bg-white lg:p-5 p-3">
                <hr class="mb-5" />
                <div class="flex md:gap-6 gap-4 items-center">
                  <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                  <div class="item-informations flex justify-between w-full">
                    <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                      <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                      <h6 class="lg:text-base md:text-sm text-xs">Rp.500.000</h6>
                      <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                      <span id="qty" class="flex gap-2">
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">-</button>
                        <input type="number" class="current-page lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 text-center py-1 bg-white md:text-2xl text-sm outline-none border-blue-Neru border-[1px]" min="0" max="9" value="1" />
                        <button class="bg-blue-Neru text-white lg:w-10 md:w-8 w-6 lg:h-10 md:h-8 h-6 flex items-center justify-center rounded-sm lg:text-base text-sm">+</button>
                      </span>
                      <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                        Tulis Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </span>
                    <h6 class="items-center md:gap-4 gap-2 lg:text-base md:text-sm text-xs text-red-500 lg:flex hidden">
                      Delete
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-6 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 7l16 0"></path>
                        <path d="M10 11l0 6"></path>
                        <path d="M14 11l0 6"></path>
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                      </svg>
                    </h6>
                  </div>
                </div>
                <hr class="mt-5" />
                <div class="flex items-center justify-between">
                  <h6 class="gap-1 md:text-sm text-xs items-center text-green-500 mt-2 lg:hidden flex">
                    Tulis Catatan
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                      <path d="M16 5l3 3"></path>
                      <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                    </svg>
                  </h6>
                  <h6 class="items-center md:text-sm text-xs md:gap-4 gap-1 text-red-500 lg:hidden flex mt-2">
                    Delete
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                  </h6>
                </div>
              </div>
            </div>
            <div class="right-content lg:col-span-2 md:col-span-3 col-span-4">
              <div class="flex flex-col gap-3 sticky top-28">
                <div class="kurir bg-white px-4 py-6 flex flex-col gap-4">
                  <span class="flex justify-between items-center">
                    <h5 class="font-semibold lg:text-base text-sm">Pilih Durasi</h5>
                    <h6 class="lg:text-base md:text-sm text-xs text-black flex items-center gap-1.5 relative cursor-pointer" id="durationCargo">
                      Reguler
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 9l6 6l6 -6"></path>
                      </svg>
                      <div class="durasiBox bg-white shadow-md p-2 absolute right-0 top-4 w-52 rounded-sm opacity-0 -z-10 transition-all ease-in-out duration-300 md:h-36 h-28 overflow-y-auto">
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">Reguler</h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">Same Day</h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">Cargo</h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">Ekonomi</h6>
                      </div>
                    </h6>
                  </span>
                  <hr />
                  <div class="wrapper flex items-center justify-between gap-6">
                    <span class="flex flex-col lg:gap-1 gap-1.5">
                      <h6 class="font-semibold lg:text-base text-sm">Kurir Pilihan</h6>
                      <h6 class="font-light lg:text-base text-xs infoKurir md:w-[85%] w-[50%]">J&T (Rp58.000) Estimasi tiba 16 - 20 Aug</h6>
                    </span>
                    <h6 class="text-black lg:text-base text-xs flex items-center lg:gap-1.5 cursor-pointer relative" id="CargoPilihan">
                      ubah <span class="lg:block hidden">kurir</span>
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery lg:block hidden" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                        <path d="M3 9l4 0"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 9l6 6l6 -6"></path>
                      </svg>
                      <div class="pilihanCargoBox bg-blue-water shadow-md p-2 absolute right-0 top-4 -z-10 opacity-0 lg:w-72 w-60 rounded-sm h-36 overflow-y-auto">
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">
                          GTL (Rp21.500) <br />
                          Estimasi tiba 10 - 12 Aug
                        </h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">
                          SiCepat Gokil (Rp35.000) <br />
                          Estimasi tiba 10 - 14 Aug
                        </h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">
                          JNE (Rp65.000) <br />
                          Estimasi tiba 17 - 21 Aug
                        </h6>
                        <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 lg:text-base md:text-sm text-xs">
                          J&T (Rp58.000) <br />
                          Estimasi tiba 16 - 20 Aug
                        </h6>
                      </div>
                    </h6>
                  </div>
                </div>
                <div class="accordion-wrapper">
                  <div class="accordion-header cursor-pointer bg-white px-4 py-4 relative">
                    <div class="wrap flex justify-between items-center">
                      <h5 class="font-semibold lg:text-base text-sm">Ringkasan Belanja</h5>
                      <svg xmlns="http://www.w3.org/2000/svg" class="lg:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 9l6 6l6 -6"></path>
                      </svg>
                    </div>
                    <hr class="mt-4" />
                  </div>
                  <div class="accordion-body bg-white shadow-sm">
                    <div class="content-wrapper p-4">
                      <div class="wrapper flex flex-col gap-4">
                        <span class="flex justify-between">
                          <h6 class="lg:text-base text-sm">Neru Bedding</h6>
                          <h6 class="lg:text-base text-sm">Rp2000</h6>
                        </span>
                        <span class="flex justify-between">
                          <h6 class="lg:text-base text-sm">Ongkir</h6>
                          <h6 class="lg:text-base text-sm">Rp2000</h6>
                        </span>
                        <hr />
                        <span class="flex justify-between">
                          <h6 class="lg:text-base text-sm">Total Belanja</h6>
                          <h6 class="lg:text-base text-sm">Rp4000</h6>
                        </span>
                        <a id="checkoutToggle" class="bg-blue-Neru text-center lg:p-2 py-2 px-2 text-white font-semibold rounded-md lg:text-base text-sm triggerBox cursor-pointer" type="button">Checkout Now </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-start fixed inset-0 bg-black bg-opacity-0 flex justify-center items-center -z-20 text-black">
          <div id="BoxAlamat" class="alamat-wrapper opacity-0 bg-white lg:w-[30%] md:w-[70%] w-[90%] h-fit">
            <div class="p-4">
              <h6>Informasi User</h6>
            </div>
            <hr />
            <div class="flex flex-col gap-3 p-4">
              <div class="flex justify-between items-center">
                <h6 class="md:text-base text-xs capitalize">
                  Immanuel Christian Hirani <br />
                  <span class="font-light md:text-sm text-xs">(+62)-813-1480-1945 </span>
                </h6>
                <a id="UbahAlamatToggle-Feat" type="button" class="cursor-pointer md:text-sm text-xs text-blue-Neru font-semibold"><h6>Ubah</h6></a>
              </div>
              <div class="w-[80%]">
                <h6 class="md:text-sm text-xs font-light capitalize">Jalan Kakap Raya No.155, RT.1/RW.3, Karawaci Baru, Karawaci (Rumah hijau besar) KARAWACI, KOTA TANGERANG, BANTEN, ID, 15116</h6>
              </div>
            </div>
            <hr />
            <div class="flex items-center justify-end p-4">
              <button class="outline outline-[1px] outline-slate-200 md:text-sm text-xs px-9 py-2 font-semibold capitalize hover:bg-blue-Neru hover:text-white closeBox cursor-pointer">Tutup</button>
            </div>
          </div>
          <div id="Feat-UbahAlamat" class="hidden relative bg-white 3xl:w-[30%] 2xl:w-[40%] lg:w-[50%] md:w-[60%] w-[90%] h-[60%] overflow-y-auto rounded-md lg:px-10 lg:py-4 p-6">
            <h5 class="font-semibold text-center lg:text-lg md:text-base text-sm">Ubah Alamat</h5>
            <span class="absolute top-5 lg:right-9 right-5 closeBoxFeatUbahAlamat">
              <svg xmlns="http://www.w3.org/2000/svg" class="md:w-6 w-5 text-red-600 cursor-pointer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
              </svg>
            </span>
            <div class="flex flex-col justify-center gap-6">
              <label class="flex flex-col gap-1.5 font-medium lg:text-base md:text-sm text-xs" for=""
                >Pinpoint
                <div class="border-[1px] p-3 flex justify-between w-full bg-white shadow-md rounded-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" />
                  </svg>
                  <a href="" class="text-blue-Neru font-medium">Ubah</a>
                </div>
              </label>
              <label class="flex flex-col gap-1.5 font-medium lg:text-base md:text-sm text-xs" for=""
                >Label Alamat
                <input type="text" class="border-[1px] outline-none rounded-md shadow-md p-3 md:text-base text-xs" placeholder="Rumah" />
              </label>
              <label class="flex flex-col gap-1.5 font-medium lg:text-base md:text-sm text-xs" for=""
                >Alamat Lengkap
                <textarea name="" placeholder="Cth : Jalan  dukuh 3 no 106 , Tanggerang , Karawaci Baru" class="shadow-md lg:text-base md:text-sm text-xs border-[1px] outline-none rounded-md p-3" id="" cols="10" rows="5"></textarea>
              </label>
              <label class="flex flex-col gap-1.5 font-medium lg:text-base md:text-sm text-xs" for=""
                >Catatan Untuk Kurir (Opsional)
                <input type="text" class="border-[1px] outline-none rounded-md shadow-md p-3 lg:text-base md:text-sm text-xs" placeholder="Cth : Rumah Hijau Besar Spanduk pecel lele" />
              </label>
              <label class="flex flex-col gap-1.5 font-medium lg:text-base md:text-sm text-xs" for=""
                >Nama Penerima
                <input type="text" class="border-[1px] outline-none rounded-md shadow-md p-3 lg:text-base md:text-sm text-xs" placeholder="Cth : Immanuel" />
              </label>
              <button class="bg-blue-Neru px-6 py-2 w-fit text-white-neru font-semibold mx-auto rounded-md md:text-base text-xs">Simpan</button>
            </div>
          </div>
        </div>
        <div class="text-start fixed inset-0 bg-black bg-opacity-0 flex justify-center items-center -z-20 text-black">
          <div id="PaymentBox" class="alamat-wrapper transition-all ease-in-out duration-300 opacity-0 bg-white lg:w-[30%] md:w-[70%] w-[90%] h-fit rounded-lg">
            <div class="p-4 flex justify-between">
              <h6>Pembayaran</h6>
              <svg xmlns="http://www.w3.org/2000/svg" class="closeBox w-6 cursor-pointer text-blue-Neru" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M18 6l-12 12"></path>
                <path d="M6 6l12 12"></path>
              </svg>
            </div>
            <hr />
            <div class="flex flex-col gap-3 p-4">
              <div class="flex justify-between items-center">
                <h6 class="md:text-base font-semibold text-xs capitalize">Metode Pembayaran</h6>
              </div>
              <div class="flex flex-col gap-4">
                <span class="flex justify-between">
                  <label for="BCA" name="BCA" class="">
                    <img src="img/BCA.png" class="md:w-[70%] w-[50%]" alt="" />
                  </label>
                  <input type="radio" id="BCA" name="paymentMethod" onchange="handleRadioChange(this)" />
                </span>
                <span class="flex justify-between">
                  <label for="MANDIRI" name="MANDIRI" class="">
                    <img src="img/MANDIRI.png" class="md:w-[70%] w-[50%]" alt="" />
                  </label>
                  <input type="radio" id="MANDIRI" name="paymentMethod" onchange="handleRadioChange(this)" />
                </span>
              </div>
            </div>
            <hr />
            <div class="flex flex-col gap-3 p-4">
              <div class="flex justify-between items-center">
                <h6 class="md:text-base font-semibold text-xs capitalize">Ringkasan Belanja</h6>
              </div>
              <div class="flex flex-col gap-2.5">
                <span class="flex justify-between">
                  <h6>Bedding Silver Grey</h6>
                  <h6>Rp.500.000</h6>
                </span>
                <span class="flex justify-between">
                  <h6>Ongkir</h6>
                  <h6>Rp.13.000</h6>
                </span>
              </div>
            </div>
            <hr />
            <div class="flex flex-col gap-3 p-4">
              <div class="flex justify-between items-center">
                <h6 class="md:text-base font-semibold text-xs capitalize">Total Belanja</h6>
                <h6>Rp.513.000</h6>
              </div>
            </div>
            <hr />
            <div class="flex items-center justify-end">
              <a href="paymentWaitingList.html" class="text-center md:text-sm text-xs px-9 py-2 font-semibold capitalize bg-blue-Neru text-white closeBox cursor-pointer w-full rounded-lg rounded-t-none animate-pulse">Bayar</a>
            </div>
          </div>
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
  <script src="js/cart.js"></script>
  <script src="js/accordion.js"></script>
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <script src="js/floatingbtn.js"></script>
</html>
