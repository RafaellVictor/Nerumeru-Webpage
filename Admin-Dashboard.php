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
  <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css" rel="stylesheet" />
  <title>Nerumeru | Admin</title>
</head>

<body>
  <main class="my-0 flex overflow-hidden">
    <!-- Side Bar -->
    <?php include("layout/sidebar.admin.php"); ?>
    <!-- Side Bar end -->
    <section class="admin relative h-screen overflow-y-auto my-0 w-full">
      <!-- Main Menu -->
      <div class="flex flex-col gap-4 container">
        <?php include "layout/header-admin.php"; ?>
        <div class="body-dashboard-content grid 3xl:grid-cols-9 grid-cols-8 gap-4 w-full">
          <div class="table-wrapper bg-white rounded-lg px-4 shadow-sm py-4 3xl:col-span-7 col-span-6">
            <span class="flex items-center gap-3 mb-6">
              <i class="ti ti-history text-blue-Neru animate-spin text-3xl"></i>
              <h5 class="w-fit  text-blue-Neru rounded-lg font-semibold">Recent Order</h5>
            </span>
            <table id="TableOrder" class=" myTableDisplay text-center 3xl:text-lg text-sm py-6 display nowrap table hover order-column row-border stripe">
              <thead>
                <tr class="bg-blue-Neru text-white">
                  <th class="border-[1px] border-black-neru border-opacity-30 w-28">Order Id</th>
                  <th class="border-[1px] border-black-neru border-opacity-30 w-48">Customers Name</th>
                  <th class="border-[1px] border-black-neru border-opacity-30 w-44">Order Details</th>
                  <th class="border-[1px] border-black-neru border-opacity-30 w-44">Total Order</th>
                  <th class="border-[1px] border-black-neru border-opacity-30 w-32">Status Orders</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#ba9201</td>
                  <td>Fahrezza Rowi</td>
                  <td class="text-center"><a href="" class="bg-blue-Neru text-sm text-white rounded-lg py-2 px-3 font-semibold w-1/2">Open Order</a></td>
                  <td>Rp.1.200.000</td>
                  <td class="text-center">
                    <button class="badge bg-green-400 rounded-md w-[100px] px-2 py-2 mx-auto text-white font-semibold text-sm">Delivery</button>
                  </td>
                </tr>
                <tr>
                  <td>#ba9201</td>
                  <td>Rakesh Patel</td>
                  <td class="text-center"><a href="" class="bg-blue-Neru text-sm text-white rounded-lg py-2 px-3 font-semibold w-1/2">Open Order</a></td>
                  <td>Rp.1.900.000</td>
                  <td class="text-center">
                    <button class="badge bg-green-400 rounded-md w-[100px] px-2 py-2 mx-auto text-white font-semibold text-sm">Delivery</button>
                  </td>
                </tr>
                <tr>
                  <td>#ba9201</td>
                  <td>Enra Mosidik</td>
                  <td class="text-center"><a href="" class="bg-blue-Neru text-sm text-white rounded-lg py-2 px-3 font-semibold w-1/2">Open Order</a></td>
                  <td>Rp.1.100.000</td>
                  <td class="text-center">
                    <button class="badge bg-green-400 rounded-md w-[100px] px-2 py-2 mx-auto text-white font-semibold text-sm">Delivery</button>
                  </td>
                </tr>
                <tr>
                  <td>#ba9201</td>
                  <td>Muhhamad Ilham</td>
                  <td class="text-center"><a href="" class="bg-blue-Neru text-sm text-white rounded-lg py-2 px-3 font-semibold w-1/2">Open Order</a></td>
                  <td>Rp.1.700.000</td>
                  <td class="text-center">
                    <button class="badge bg-green-400 rounded-md w-[100px] px-2 py-2 mx-auto text-white font-semibold text-sm">Delivery</button>
                  </td>
                </tr>
                <tr>
                  <td>#ba9201</td>
                  <td>Immanuel hirani</td>
                  <td class="text-center"><a href="" class="bg-blue-Neru text-sm text-white rounded-lg py-2 px-3 font-semibold w-1/2">Open Order</a></td>
                  <td>Rp.200.000</td>
                  <td class="text-center">
                    <button class="badge bg-green-400 rounded-md w-[100px] px-2 py-2 mx-auto text-white font-semibold text-sm">Delivery</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="flex flex-col flex-wrap gap-2 3xl:col-span-2 col-span-2">
            <div class="card w-full cursor-pointer 3xl:h-[177px] h-[175px] flex flex-col gap-3 justify-center  relative overflow-hidden group rounded-md bg-white shadow-sm py-4 px-6">
              <div class="flex gap-3 items-center">
                <i class="ti ti-shopping-cart text-xl text-blue-Neru bg-blue-Neru bg-opacity-30 py-2 px-2 rounded-lg"></i>
                <h6 class="font-semibold">Total Orders</h6>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h5 class="font-semibold w-fit  text-blue-Neru text">40 items</h5>
                <i class="ti ti-shopping-bag text-xl text-blue-Neru bg-blue-Neru bg-opacity-30 py-2 px-2 rounded-lg"></i>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h6 class="font-semibold w-fit   text-sm">Total Orders items </h6>
              </div>
            </div>
            <div class="card w-full cursor-pointer 3xl:h-[177px] h-[175px] flex flex-col gap-3 justify-center  relative overflow-hidden group rounded-md bg-white shadow-sm py-4 px-6">
              <div class="flex gap-3 items-center">
                <i class="ti ti-report-money text-xl text-blue-Neru bg-blue-Neru bg-opacity-30 py-2 px-2 rounded-lg"></i>
                <h6 class="font-semibold">Last Month sales</h6>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h5 class="font-semibold w-fit  text-blue-Neru text">Rp.52.000.000</h5>
                <button class="badge bg-green-400 rounded-md w-fit px-2 py-2 mx-auto text-white font-semibold text-xs">32,3%</button>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h6 class="font-semibold w-fit text-sm">Total Sales <span class="text-green-400">Increase</span> By 32,3%</h6>
              </div>
            </div>
            <div class="card w-full cursor-pointer 3xl:h-[177px] h-[175px] flex flex-col gap-3 justify-center  relative overflow-hidden group rounded-md bg-white shadow-sm py-4 px-6">
              <div class="flex gap-3 items-center">
                <i class="ti ti-report-money text-xl text-blue-Neru bg-blue-Neru bg-opacity-30 py-2 px-2 rounded-lg"></i>
                <h6 class="font-semibold">Last Month sales</h6>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h5 class="font-semibold w-fit  text-blue-Neru text">Rp.22.000.000</h5>
                <button class="badge bg-red-400 rounded-md w-fit px-2 py-2 mx-auto text-white font-semibold text-xs">32,3%</button>
              </div>
              <div class="flex items-center flex-wrap w-fit gap-4">
                <h6 class="font-semibold w-fit   text-sm">Total Sales <span class="text-red-400">Decrease</span> By 32,3%</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Menu End -->
      </div>
    </section>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script src="js/admin.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
<script src="js/table.js"></script>
<script>
  const ButtonTogglerActive = document.querySelectorAll(".ButtonTogglerActive");
  const BoxTableData = document.querySelectorAll(".BoxTableData");

  // Fungsi untuk menyimpan status toggler yang aktif ke dalam localStorage
  function saveActiveButton(activeIndex) {
    localStorage.setItem("activeButtonIndex", activeIndex);
  }

  // Mendapatkan jumlah total item
  const totalItems = ButtonTogglerActive.length;

  // Memeriksa apakah ada status toggler yang sebelumnya aktif di localStorage
  let savedActiveButtonIndex = localStorage.getItem("activeButtonIndex");
  savedActiveButtonIndex = savedActiveButtonIndex !== null ? parseInt(savedActiveButtonIndex) : null;

  // Memeriksa apakah indeks yang tersimpan valid
  if (savedActiveButtonIndex !== null && savedActiveButtonIndex >= 0 && savedActiveButtonIndex < totalItems) {
    ButtonTogglerActive[savedActiveButtonIndex].classList.add("ButtonAdminMenuActive");
    if (BoxTableData[savedActiveButtonIndex]) {
      // Periksa apakah elemen ada sebelum menambahkan kelas
      BoxTableData[savedActiveButtonIndex].classList.add("Active-BoxTable"); // Aktifkan data yang sesuai
    }
  } else {
    // Jika tidak ada status toggler yang disimpan sebelumnya atau indeks tidak valid, maka item pertama akan dianggap aktif
    ButtonTogglerActive[0].classList.add("ButtonAdminMenuActive");
    saveActiveButton(0); // Menyimpan status toggler yang aktif ke dalam localStorage
    if (BoxTableData[0]) {
      // Periksa apakah elemen ada sebelum menambahkan kelas
      BoxTableData[0].classList.add("Active-BoxTable"); // Aktifkan data pertama
    }
  }

  ButtonTogglerActive.forEach((OtherButton, index) => {
    OtherButton.addEventListener("click", () => {
      ButtonTogglerActive.forEach((button) => {
        if (button !== OtherButton) {
          button.classList.remove("ButtonAdminMenuActive");
        }
      });
      BoxTableData.forEach((box, boxIndex) => {
        if (index === boxIndex && box) {
          // Periksa apakah elemen ada sebelum menambahkan kelas
          box.classList.add("Active-BoxTable");
        } else if (box) {
          box.classList.remove("Active-BoxTable");
        }
      });
      OtherButton.classList.add("ButtonAdminMenuActive");
      // Memanggil fungsi untuk menyimpan status toggler yang aktif ke dalam localStorage setiap kali ada perubahan
      saveActiveButton(index);
    });
  });
</script>

</html>