<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Nerumeru | Profile</title>
  </head>
  <body>
  <?php include "layout/navbar.php" ?>
    <main>
      <section class="profle lg:mt-44 md:mt-32">
        <!-- Profile Mode -->
        <div class="container">
          <div class="grid grid-cols-8 gap-5">
            <div class="lg:col-span-2 col-span-8 row-span-6 px-8 py-8 bg-white rounded-md">
              <div class="sticky top-32">
                <div class="head flex items-center gap-6">
                  <img src="img/Image.png" class="w-[15%]" alt="" />
                  <span class="flex flex-col">
                    <h6 class="font-medium line-clamp-1">Immanuel Christian Hirani</h6>
                    <span class="flex items-center gap-2 text-grey-neru">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                      </svg>
                      <a href="login_Register.php"><h6 class="flex gap-1 items-center">Logout</h6></a>
                    </span>
                  </span>
                </div>
                <hr class="my-4" />
                <span class="lg:hidden flex gap-12 items-center justify-center">
                  <h5 class="hover:underline underline-offset-8 md:text-lg text-base AkunToggle">Akun</h5>
                  <hr class="border-[1px] h-4 border-separate border-black" />
                  <h5 class="hover:underline underline-offset-8 md:text-lg text-base PesananToggle">Pesanan</h5>
                </span>
                <div class="body lg:block hidden">
                  <ul class="transition-all ease-in-out duration-300">
                    <li class="font-semibold dropdownProfile">
                      <span class="flex justify-between">
                        <h6 class="cursor-pointer AkunToggle">Akun</h6>
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all ease-in-out duration-300 w-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M6 9l6 6l6 -6" />
                        </svg>
                      </span>
                    </li>
                    <ul class="dropdownBoxProfile transition-all ease-in-out duration-200 absolute -z-10 flex flex-col opacity-0 gap-3 mt-3 ml-6">
                      <li><a href="#profile">Profil</a></li>
                      <li><a href="#alamat">Alamat</a></li>
                      <li><a href="#password">Ubah Password</a></li>
                    </ul>
                  </ul>
                  <ul class="mt-3">
                    <li class="font-semibold"><h6 class="cursor-pointer PesananToggle">Pesanan Saya</h6></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Akun -->
            <div id="AkunBox" class="lg:col-span-6 col-span-8 row-span-6">
              <div class="flex flex-col gap-5">
                <div id="profile" class="bg-white lg:p-8 md:p-6 p-4 rounded-md">
                  <div class="head flex flex-col gap-1">
                    <h6 class="font-semibold">Profile Saya</h6>
                  </div>
                  <hr class="my-4" />
                  <div class="body lg:grid grid-cols-6 flex flex-col-reverse gap-12 lg:py-0 py-6 lg:items-center items-start mt-6">
                    <form class="flex flex-col gap-4 w-full col-span-4">
                      <div class="flex md:flex-row flex-col md:gap-6 gap-4">
                        <label for="" class="md:w-28 w-24"><h6>Username</h6></label>
                        <label for=""><h6>Zhaprael668</h6></label>
                      </div>
                      <hr class="lg:hidden" />
                      <div class="flex md:flex-row lg:items-center flex-col md:gap-6 gap-4">
                        <label for="" class="md:w-28 w-24"><h6>Name</h6></label>
                        <input type="text" class="2xl:text-base xl:text-sm md:text-base text-sm md:w-1/2 w-full outline-none border-[1px] shadow-inner border-grey-neru p-2" placeholder="Immanuel Christian Hirani" />
                      </div>
                      <hr class="lg:hidden" />
                      <div class="flex md:flex-row flex-col md:gap-6 gap-4">
                        <label for="" class="md:w-28 w-24"><h6>Email</h6></label>
                        <span class="flex md:gap-3 gap-1.5 items-center text-grey-neru">
                          <label for="" class="underline"><h6>nuel.hirani8@gmail.com</h6></label>
                          <svg xmlns="http://www.w3.org/2000/svg" class="md:w-6 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                            <path d="M16 5l3 3" />
                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
                          </svg>
                        </span>
                      </div>
                      <hr class="lg:hidden" />
                      <div class="flex md:flex-row flex-col md:gap-6 gap-4">
                        <label for="" class="md:w-28 w-24"><h6>No Telephone</h6></label>
                        <span class="flex md:gap-3 gap-1.5 items-center text-grey-neru">
                          <label for="" class="underline"><h6>0813-1480-1945</h6></label>
                          <svg xmlns="http://www.w3.org/2000/svg" class="md:w-6 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                            <path d="M16 5l3 3" />
                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
                          </svg>
                        </span>
                      </div>
                    </form>
                    <div class="col-span-2 w-full flex flex-col gap-4 items-center">
                      <img src="img/Person Test.png" class="md:w-32 md:h-32 w-24 h-24 object-cover rounded-full" alt="" />
                      <label class="border-[1px] border-grey-neru flex justify-between font-spartanMedium items-center p-2">
                        <h6>Pilih Gambar</h6>
                        <input type="file" class="hidden" />
                      </label>
                      <span class="lg:w-1/2 w-full">
                        <h6 class="text-center">Ukuran gambar: maks. 1 MB Format gambar: .JPEG, .PNG</h6>
                      </span>
                    </div>
                  </div>
                </div>
                <div id="Alamat" class="bg-white lg:p-8 md:p-6 p-4  rounded-md flex flex-col gap-6">
                  <div class="head flex justify-between items-center">
                    <h6 class="font-semibold">Alamat Saya</h6>
                    <span class="flex justify-between items-center px-4 py-2 bg-blue-Neru rounded-lg font-semibold text-white gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                      <a class=""><h6 class="md:text-sm text-xs">Tambah Alamat</h6></a>
                    </span>
                  </div>
                  <div class="user-informations flex flex-col gap-4 border-2 p-6 rounded-lg border-blue-Neru  bg-blue-Neru bg-opacity-5">
                    <div class="flex md:flex-row flex-col justify-between items-center gap-4">
                      <div class="wrapper lg:w-1/2 w-full flex flex-col gap-2">
                        <span class="flex md:flex-row flex-col lg:items-center items-start gap-2">
                          <h6 class="font-semibold">Immanuel Christian Hirani</h6>
                          <hr class="md:block hidden border-[1px] h-4 border-separate border-black" />
                          <h6 class="font-light">(0813-1480-1495)</h6>
                        </span>
                        <h6 class="font-light lg:text-base text-sm">Jalan Kakap Raya No.155, RT.1/RW.3, Karawaci Baru, Karawaci (Rumah hijau besar) KARAWACI, KOTA TANGERANG, BANTEN, ID, 15116</h6>
                        <div class="flex gap-2 items-center md:w-1/2 w-full justify-start mt-4">
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-green-500 cursor-pointer">
                            <h6>Ubah Alamat</h6>
                          </a>
                          <hr class="border-[1px] h-4 border-separate border-black" />
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-red-500 cursor-pointer">
                            <h6>Hapus</h6>
                          </a>
                        </div>
                      </div>
                      <div class="flex gap-2 items-center md:w-1/2 w-full md:justify-end justify-start mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:block hidden w-6 text-blue-Neru"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <button class="bg-blue-Neru md:hidden block rounded-lg p-2 text-xs text-white font-medium w-full">Alamat Terpilih</button>
                      </div>
                    </div>
                  </div>
                  <div class="user-informations bg-white flex flex-col gap-4 border-2 p-6 rounded-lg">
                    <div class="flex md:flex-row flex-col justify-between items-center gap-4">
                      <div class="wrapper lg:w-1/2 w-full flex flex-col gap-2">
                        <span class="flex md:flex-row flex-col lg:items-center items-start gap-2">
                          <h6 class="font-semibold">Immanuel Christian Hirani</h6>
                          <hr class="md:block hidden border-[1px] h-4 border-separate border-black" />
                          <h6 class="font-light">(0813-1480-1495)</h6>
                        </span>
                        <h6 class="font-light lg:text-base text-sm">Jalan Kakap Raya No.155, RT.1/RW.3, Karawaci Baru, Karawaci (Rumah hijau besar) KARAWACI, KOTA TANGERANG, BANTEN, ID, 15116</h6>
                        <div class="flex gap-2 items-center md:w-1/2 w-full justify-start mt-4">
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-green-500 cursor-pointer">
                            <h6>Ubah Alamat</h6>
                          </a>
                          <hr class="border-[1px] h-4 border-separate border-black" />
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-red-500 cursor-pointer">
                            <h6>Hapus</h6>
                          </a>
                        </div>
                      </div>
                      <div class="flex gap-2 items-center md:w-1/2 w-full md:justify-end justify-start mt-4">
                        <a id="UbahAlamat" class="md:bg-blue-Neru rounded-lg px-4 text-center justify-center py-2 lg:text-base text-sm flex gap-1 items-center text-black md:border-0 border-2 md:text-white md:w-fit w-full  cursor-pointer">
                          <h6 class="md:text-sm text-xs">Pilih Alamat</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="user-informations bg-white flex flex-col gap-4 border-2 p-6 rounded-lg">
                    <div class="flex md:flex-row flex-col justify-between items-center gap-4">
                      <div class="wrapper lg:w-1/2 w-full flex flex-col gap-2">
                        <span class="flex md:flex-row flex-col lg:items-center items-start gap-2">
                          <h6 class="font-semibold">Immanuel Christian Hirani</h6>
                          <hr class="md:block hidden border-[1px] h-4 border-separate border-black" />
                          <h6 class="font-light">(0813-1480-1495)</h6>
                        </span>
                        <h6 class="font-light lg:text-base text-sm">Jalan Kakap Raya No.155, RT.1/RW.3, Karawaci Baru, Karawaci (Rumah hijau besar) KARAWACI, KOTA TANGERANG, BANTEN, ID, 15116</h6>
                        <div class="flex gap-2 items-center md:w-1/2 w-full justify-start mt-4">
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-green-500 cursor-pointer">
                            <h6>Ubah Alamat</h6>
                          </a>
                          <hr class="border-[1px] h-4 border-separate border-black" />
                          <a id="UbahAlamat" class="lg:text-base text-sm flex gap-1 items-center text-red-500 cursor-pointer">
                            <h6>Hapus</h6>
                          </a>
                        </div>
                      </div>
                      <div class="flex gap-2 items-center md:w-1/2 w-full md:justify-end justify-start mt-4">
                        <a id="UbahAlamat" class="md:bg-blue-Neru rounded-lg px-4 text-center justify-center py-2 lg:text-base text-sm flex gap-1 items-center text-black md:border-0 border-2 md:text-white md:w-fit w-full  cursor-pointer">
                          <h6 class="md:text-sm text-xs">Pilih Alamat</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="Password" class="bg-white lg:p-8 md:p-6 p-4 rounded-md">
                  <div class="head flex gap-1 items-center justify-between">
                    <h6 class="font-semibold">Ubah Password</h6>
                  </div>
                  <hr class="my-4" />
                  <div class="user-informations bg-white flex flex-col gap-4">
                    <div class="flex md:flex-row w-full flex-col gap-6 lg:items-center items-start">
                      <label for="" class="w-40"><h6>Password</h6></label>
                      <span class="flex items-center gap-4">
                        <input type="text" class="w-full outline-none border-[1px] shadow-inner border-grey-neru p-2" placeholder="********" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                          <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                          <path d="M3 3l18 18" />
                        </svg>
                      </span>
                    </div>
                    <div class="flex md:flex-row flex-col gap-6 lg:items-center items-start">
                      <label for="" class="w-40"><h6>Confirm Password</h6></label>
                      <span class="flex items-center gap-4">
                        <input type="text" class="w-full outline-none border-[1px] shadow-inner border-grey-neru p-2" placeholder="********" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                          <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                          <path d="M3 3l18 18" />
                        </svg>
                      </span>
                    </div>
                    <hr />
                  </div>
                </div>
              </div>
            </div>
            <!-- Akun End -->
            <!-- Pesanan -->
            <div id="pesanaBox" class="lg:col-span-6 hidden col-span-8 row-span-6">
              <div class="flex flex-col gap-5">
                <div class="bg-white md:p-8 p-3 rounded-md">
                  <ul class="justify-between gap-8 lg:flex hidden">
                    <li class="transition-all ease-in-out duration-300 underline hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Semua Pesanan</h6></a>
                    </li>
                    <li class="transition-all ease-in-out duration-300 hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Menunggu Pembayaran</h6></a>
                    </li>
                    <li class="transition-all ease-in-out duration-300 hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Sedang Dikemas</h6></a>
                    </li>
                    <li class="transition-all ease-in-out duration-300 hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Di kirim</h6></a>
                    </li>
                    <li class="transition-all ease-in-out duration-300 hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Selesai</h6></a>
                    </li>
                    <li class="transition-all ease-in-out duration-300 hover:underline hover:text-blue-Neru font-medium underline-offset-[14px]">
                      <a href=""><h6>Dibatalkan</h6></a>
                    </li>
                  </ul>
                  <div class="lg:hidden flex justify-between items-center relative">
                    <h6 class="font-medium lg:text-base md:text-sm text-xs">Pilih Berdasarkan</h6>
                    <button id="ToggleTypePesanan" class="bg-blue-Neru p-3 rounded-sm text-white flex items-center gap-2">
                      <h6 class="font-medium lg:text-base md:text-sm text-xs">Semua Pesanan</h6>
                      <svg xmlns="http://www.w3.org/2000/svg" class="transition-all ease-in-out duration-300 md:w-6 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 9l6 6l6 -6"></path>
                      </svg>
                    </button>
                    <div class="durasiBox bg-white shadow-md p-2 absolute right-0 top-4 w-52 rounded-sm opacity-0 -z-10 transition-all ease-in-out duration-300 md:h-36 h-28 overflow-y-auto">
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Semua Pesanan</h6>
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Menunggu Pembayaran</h6>
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Sedang Dikemas</h6>
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Dikirim</h6>
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Selesai</h6>
                      <h6 class="py-2 px-4 hover:bg-black hover:bg-opacity-5 md:text-base text-xs">Dibatalkan</h6>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-6 col-span-8 flex flex-col gap-5">
                  <div class="cart-item bg-white lg:p-8 p-3">
                    <hr class="mb-5" />
                    <div class="flex md:gap-6 gap-4 items-center">
                      <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                      <div class="item-informations flex justify-between w-full">
                        <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                          <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                          <h6 class="lg:text-base md:text-sm text-xs flex justify-between items-center">Rp.500.000 <span class="lg:text-base md:text-sm text-xs bg-blue-Neru md:px-3 px-2 rounded-sm py-1 text-white font-medium">x1</span></h6>
                          <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                          <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                            Catatan
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                              <path d="M16 5l3 3"></path>
                              <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                            </svg>
                          </h6>
                          <h6 class="lg:text-base md:text-sm text-xs text-blue-Neru font-semibold">Beri Nilai</h6>
                        </span>
                      </div>
                    </div>
                    <hr class="mt-5" />
                    <div></div>
                    <div class="flex items-center justify-between">
                      <h6 class="items-center md:gap-4 gap-2 flex mt-2 lg:text-base md:text-sm text-xs">
                        Total Pesanan :
                        <span>Rp 500.000</span>
                      </h6>
                      <h6 class="gap-1 items-center text-green-500 mt-2 lg:hidden flex lg:text-base md:text-sm text-xs">
                        Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle md:W-6 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </div>
                  </div>
                  <div class="cart-item bg-white lg:p-8 p-3">
                    <hr class="mb-5" />
                    <div class="flex md:gap-6 gap-4 items-center">
                      <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                      <div class="item-informations flex justify-between w-full">
                        <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                          <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                          <h6 class="lg:text-base md:text-sm text-xs flex justify-between items-center">Rp.500.000 <span class="lg:text-base md:text-sm text-xs bg-blue-Neru md:px-3 px-2 rounded-sm py-1 text-white font-medium">x1</span></h6>
                          <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                          <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                            Catatan
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                              <path d="M16 5l3 3"></path>
                              <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                            </svg>
                          </h6>
                          <h6 class="lg:text-base md:text-sm text-xs text-blue-Neru font-semibold">Beri Nilai</h6>
                        </span>
                      </div>
                    </div>
                    <hr class="mt-5" />
                    <div></div>
                    <div class="flex items-center justify-between">
                      <h6 class="items-center md:gap-4 gap-2 flex mt-2 lg:text-base md:text-sm text-xs">
                        Total Pesanan :
                        <span>Rp 500.000</span>
                      </h6>
                      <h6 class="gap-1 items-center text-green-500 mt-2 lg:hidden flex lg:text-base md:text-sm text-xs">
                        Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle md:W-6 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </div>
                  </div>
                  <div class="cart-item bg-white lg:p-8 p-3">
                    <hr class="mb-5" />
                    <div class="flex md:gap-6 gap-4 items-center">
                      <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                      <div class="item-informations flex justify-between w-full">
                        <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                          <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                          <h6 class="lg:text-base md:text-sm text-xs flex justify-between items-center">Rp.500.000 <span class="lg:text-base md:text-sm text-xs bg-blue-Neru md:px-3 px-2 rounded-sm py-1 text-white font-medium">x1</span></h6>
                          <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                          <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                            Catatan
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                              <path d="M16 5l3 3"></path>
                              <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                            </svg>
                          </h6>
                          <h6 class="lg:text-base md:text-sm text-xs text-blue-Neru font-semibold">Beri Nilai</h6>
                        </span>
                      </div>
                    </div>
                    <hr class="mt-5" />
                    <div></div>
                    <div class="flex items-center justify-between">
                      <h6 class="items-center md:gap-4 gap-2 flex mt-2 lg:text-base md:text-sm text-xs">
                        Total Pesanan :
                        <span>Rp 500.000</span>
                      </h6>
                      <h6 class="gap-1 items-center text-green-500 mt-2 lg:hidden flex lg:text-base md:text-sm text-xs">
                        Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle md:W-6 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </div>
                  </div>
                  <div class="cart-item bg-white lg:p-8 p-3">
                    <hr class="mb-5" />
                    <div class="flex md:gap-6 gap-4 items-center">
                      <img src="img/card-item-2.png" class="lg:w-[20%] md:w-[30%] w-[35%]" alt="" />
                      <div class="item-informations flex justify-between w-full">
                        <span class="flex flex-col 3xl:gap-5 2xl:gap-3 xl:gap-2 gap-2.5">
                          <h5 class="font-semibold lg:text-base md:text-sm text-xs">NeruBedding - Silver Grey</h5>
                          <h6 class="lg:text-base md:text-sm text-xs flex justify-between items-center">Rp.500.000 <span class="lg:text-base md:text-sm text-xs bg-blue-Neru md:px-3 px-2 rounded-sm py-1 text-white font-medium">x1</span></h6>
                          <h6 class="lg:text-base md:text-sm text-xs">Berat Barang : 100g</h6>
                          <h6 class="lg:text-base md:text-sm text-xs gap-1 items-center text-green-500 lg:flex hidden">
                            Catatan
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                              <path d="M16 5l3 3"></path>
                              <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                            </svg>
                          </h6>
                          <h6 class="lg:text-base md:text-sm text-xs text-blue-Neru font-semibold">Beri Nilai</h6>
                        </span>
                      </div>
                    </div>
                    <hr class="mt-5" />
                    <div></div>
                    <div class="flex items-center justify-between">
                      <h6 class="items-center md:gap-4 gap-2 flex mt-2 lg:text-base md:text-sm text-xs">
                        Total Pesanan :
                        <span>Rp 500.000</span>
                      </h6>
                      <h6 class="gap-1 items-center text-green-500 mt-2 lg:hidden flex lg:text-base md:text-sm text-xs">
                        Catatan
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle md:W-6 w-4" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                          <path d="M16 5l3 3"></path>
                          <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pesanan End -->
          </div>
        </div>
        <!-- Profile End -->
      </section>
      <?php include "layout/floatingButton.php" ?>
    </main>
    <?php include "layout/footer.php" ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/button.js"></script>
  <script src="js/profile.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/floatingbtn.js"></script>
</html>