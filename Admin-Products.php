<!-- check -->
<?php

require "function.php";

$product = query("SELECT * FROM product");
$trolly = query("SELECT * FROM trolly");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/output.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
  <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css" rel="stylesheet" />
  <title>Admin - Products</title>
</head>

<body>
  <main class="my-0">
    <section class="admin relative h-screen overflow-hidden my-0">
      <div class="flex items-start justify-between">
        <!-- Side Bar -->
        <?php include("sidebar.admin.php"); ?>
        <!-- Side Bar end -->
        <!-- Main Menu -->
        <div class="flex flex-col gap-4 container">
          <header class="flex items-center bg-white rounded-lg justify-between w-full h-20 px-5">
            <div class="header-wrapper w-full flex items-center justify-between">
              <span class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-500" viewBox="0 0 15 15" fill="none">
                  <path d="M13.1249 13.125L10.4062 10.4062M11.875 6.875C11.875 9.63642 9.63642 11.875 6.875 11.875C4.11358 11.875 1.875 9.63642 1.875 6.875C1.875 4.11358 4.11358 1.875 6.875 1.875C9.63642 1.875 11.875 4.11358 11.875 6.875Z" stroke="#2762BE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input id="searchAdminNavbar" type="search" class="bg-white-neru px-3 rounded-md h-10 outline-none py-1 w-[224px] pl-9 xl:text-base md:text-sm text-xs" placeholder="Search" />
              </span>
              <div id="notifications" class="relative cursor-pointer">
                <div class="badge absolute -right-2 -top-2 bg-white-neru rounded-full flex items-center justify-center p-1">
                  <h6 class="text-xs text-blue-Neru font-semibold">12</h6>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 17 20" fill="none">
                  <path d="M13.5 6.66699C13.5 5.34091 12.9732 4.06914 12.0355 3.13146C11.0979 2.19378 9.82608 1.66699 8.5 1.66699C7.17392 1.66699 5.90215 2.19378 4.96447 3.13146C4.02678 4.06914 3.5 5.34091 3.5 6.66699C3.5 12.5003 1 14.167 1 14.167H16C16 14.167 13.5 12.5003 13.5 6.66699Z" stroke="#2762BE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M9.94193 17.5C9.79542 17.7526 9.58513 17.9622 9.33212 18.1079C9.0791 18.2537 8.79224 18.3304 8.50026 18.3304C8.20828 18.3304 7.92142 18.2537 7.6684 18.1079C7.41539 17.9622 7.2051 17.7526 7.05859 17.5" stroke="#2762BE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="notifBox invisible absolute border-[2px] border-grey-neru rounded-md backdrop-blur-md w-52 p-5 h-40 right-0 top-5 opacity-0 transition-all ease-in-out duration-300"></div>
              </div>
            </div>
          </header>
          <div class="max-h-screen w-full overflow-y-auto">
            <div class="scrolXMenu mt-2">
              <div class="flex justify-evenly">
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Bedding</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Toys</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Sanitize</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Pillow</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Trolly</h6>
                </button>
              </div>
              <hr class="mt-5" />
            </div>
            <div id="beddingSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-products-insertData.php?type=Bedding" class=" bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Image</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Type</th>
                    <th class="border-[1px] border-black-neru border-opacity-30 w-40">Name</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Stock</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $filteredNerumeru = array_filter($product, function($item) {
                    return $item["product_type"] === "Bedding";
                  });
                  foreach ($filteredNerumeru as $neru) :  ?>
                    <tr class="text-center">
                      <td class="w-14"><?= $neru["product_id"] ?></td>
                      <td class="w-60"><img src="img/<?= $neru["product_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td class="w-14"><?= $neru["product_type"] ?></td>
                      <td class="w-14"><?= $neru["product_name"] ?></td>
                      <td class="w-14"><?= $neru["product_stock"] ?></td>
                      <td class="w-14"><?= $neru["insert_date"] ?></td>
                      <td class="w-14"><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-products-UpdateData.php?product_id=<?= $neru["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?product_id=<?= $neru["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="toysSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-products-insertData.php?type=Toys" class=" bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable2" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Image</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Type</th>
                    <th class="border-[1px] border-black-neru border-opacity-30 w-40">Name</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Stock</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $filteredNerumeru = array_filter($product, function($item) {
                    return $item["product_type"] === "Toys";
                  });
                  foreach ($filteredNerumeru as $neru) :  ?>
                      <tr class="text-center">
                      <td class="w-14"><?= $neru["product_id"] ?></td>
                      <td class="w-60"><img src="<?= $neru["product_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td class="w-14"><?= $neru["product_type"] ?></td>
                      <td class="w-14"><?= $neru["product_name"] ?></td>
                      <td class="w-14"><?= $neru["product_stock"] ?></td>
                      <td class="w-14"><?= $neru["insert_date"] ?></td>
                      <td class="w-14"><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-products-UpdateData.php?product_id=<?= $neru["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?product_id=<?= $neru["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="sanitizeSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-products-insertData.php?type=Sanitize" class=" bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable3" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Image</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Type</th>
                    <th class="border-[1px] border-black-neru border-opacity-30 w-40">Name</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Stock</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $filteredNerumeru = array_filter($product, function($item) {
                    return $item["product_type"] === "Sanitize";
                  });
                  foreach ($filteredNerumeru as $neru) :  ?>
                      <tr class="text-center">
                      <td class="w-14"><?= $neru["product_id"] ?></td>
                      <td class="w-60"><img src="<?= $neru["product_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td class="w-14"><?= $neru["product_type"] ?></td>
                      <td class="w-14"><?= $neru["product_name"] ?></td>
                      <td class="w-14"><?= $neru["product_stock"] ?></td>
                      <td class="w-14"><?= $neru["insert_date"] ?></td>
                      <td class="w-14"><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-products-UpdateData.php?product_id=<?= $neru["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?product_id=<?= $neru["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="pillowSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-products-insertData.php?type=Pillow" class=" bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable4" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Image</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Type</th>
                    <th class="border-[1px] border-black-neru border-opacity-30 w-40">Name</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Stock</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $filteredNerumeru = array_filter($product, function($item) {
                    return $item["product_type"] === "Pillow";
                  });
                  foreach ($filteredNerumeru as $neru) :  ?>
                      <tr class="text-center">
                      <td class="w-14"><?= $neru["product_id"] ?></td>
                      <td class="w-60"><img src="<?= $neru["product_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td class="w-14"><?= $neru["product_type"] ?></td>
                      <td class="w-14"><?= $neru["product_name"] ?></td>
                      <td class="w-14"><?= $neru["product_stock"] ?></td>
                      <td class="w-14"><?= $neru["insert_date"] ?></td>
                      <td class="w-14"><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-products-UpdateData.php?product_id=<?= $neru["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?product_id=<?= $neru["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="trollySection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-products-insertData.php?type=Trolly" class=" bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable4" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Size</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Color</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($trolly as $neru) :  ?>
                      <tr class="text-center">
                      <td class="w-14"><?= $neru["trolly_id"] ?></td>
                      <td class="w-14"><?= $neru["trolly_size"] ?></td>
                      <td class="w-14"><?= $neru["trolly_color"] ?></td>
                      <td class="w-14"><?= $neru["insert_date"] ?></td>
                      <td class="w-14"><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?product_id=<?= $neru["product_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-products-UpdateData.php?product_id=<?= $neru["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?product_id=<?= $neru["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Main Menu End -->
      </div>
    </section>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/button.js"></script>
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
