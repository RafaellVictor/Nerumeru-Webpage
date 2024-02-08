<?php

require "function.php";

$hero = query("SELECT * FROM herosection");
$whyus = query("SELECT * FROM whyus");
$recommend = query("SELECT * FROM recommendsection");
$event = query("SELECT * FROM neru_event WHERE event_type='news'");
$news = query("SELECT * FROM recommendsection");
$bioNeru = query("SELECT * FROM bio");

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
  <title>hero | Admin - Homepage</title>
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
                <input id="searchAdminNavbar" type="search" class="bg-white-neru px-3 rounded-md  outline-none py-1 w-[224px] pl-9 xl:text-base md:text-sm text-xs" placeholder="Search" />
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
                  <h6 class="menu-item">Banner</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Why us</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Recomend Product</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Whats on hero</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">Bio neru</h6>
                </button>
                <button class="ButtonTogglerActive px-6 py-2 font-semibold transition-all ease-in-out duration-300">
                  <h6 class="menu-item">testimonial</h6>
                </button>
              </div>
              <hr class="mt-5" />
            </div>
            <div id="heroSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-hero-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable" class="myTableDisplay 3xl:text-lg text-sm py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($hero as $neru) : ?>
                    <tr class="text-center">
                      <td class="w-14"><?= $neru["hero_id"] ?></td>
                      <td class="w-60"><img src="img/<?= $neru["hero_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td><?= $neru["insert_date"] ?></td>
                      <td><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="status.php?hero_id=<?= $neru["hero_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?hero_id=<?= $neru["hero_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?hero_id=<?= $neru["hero_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?hero_id=<?= $neru["hero_id"] ?>&status=<?= $neru["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-hero-UpdateData.php?hero_id=<?= $neru["hero_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?hero_id=<?= $neru["hero_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="WhyusSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-whyus-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable2" class="myTableDisplay py-6 3xl:text-lg text-sm display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">

                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($whyus as $whys) : ?>
                    <tr class="text-center">

                      <td class="w-14"><?= $whys["whyus_id"] ?></td>
                      <td class="w-60"><img src="img/<?= $whys["whyus_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td><?= $whys["insert_date"] ?></td>
                      <td><?= $whys["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($whys["status"] == 1) : ?>
                          <a href="status.php?whyus_id=<?= $whys["whyus_id"] ?>&status=<?= $whys["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?whyus_id=<?= $whys["whyus_id"] ?>&status=<?= $whys["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?whyus_id=<?= $whys["whyus_id"] ?>&status=<?= $whys["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?whyus_id=<?= $whys["whyus_id"] ?>&status=<?= $whys["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-whyus-UpdateData.php?whyus_id=<?= $whys["whyus_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?whyus_id=<?= $whys["whyus_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="ProductRecomendationSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-recomend-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable3" class="myTableDisplay py-6 3xl:text-lg text-sm display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">

                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($recommend as $recom) : ?>
                    <tr class="text-center">

                      <td class="w-14"><?= $recom["recommend_id"] ?></td>
                      <td class="w-60"><img src="<?= $recom["recommend_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td><?= $recom["insert_date"] ?></td>
                      <td><?= $recom["lastupdate_date"] ?></td>
                      <td class="">
                        <?php if ($recom["status"] == 1) : ?>
                          <a href="status.php?recommend_id=<?= $recom["recommend_id"] ?>&status=<?= $recom["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?recommend_id=<?= $recom["recommend_id"] ?>&status=<?= $recom["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?recommend_id=<?= $recom["recommend_id"] ?>&status=<?= $recom["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?recommend_id=<?= $recom["recommend_id"] ?>&status=<?= $recom["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-recomend-UpdateData.php?recommend_id=<?= $recom['recommend_id'] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?recommend_id=<?= $recom["recommend_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="WhatsOnheroSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-news-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable4" class="myTableDisplay 3xl:text-lg text-sm py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Type</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($event as $evnt) : ?>
                    <tr class="text-center">
                      <td class="w-14"><?= $evnt["event_id"] ?></td>
                      <td class="w-60"><img src="<?= $evnt["event_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td class="w-60"><?= $evnt["event_type"] ?></td>
                      <td><?= $evnt["insert_date"] ?></td>
                      <td><?= $evnt["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($evnt["status"] == 1) : ?>
                          <a href="status.php?news_id=<?= $evnt["event_id"] ?>&status=<?= $evnt["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?news_id=<?= $evnt["event_id"] ?>&status=<?= $evnt["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?news_id=<?= $evnt["event_id"] ?>&status=<?= $evnt["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?news_id=<?= $evnt["event_id"] ?>&status=<?= $evnt["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-news-UpdateData.php?news_id=<?= $evnt['event_id'] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?news_id=<?= $evnt["event_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="BioNeruSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-bio-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable5" class="myTableDisplay py-6 display 3xl:text-lg text-sm    table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">
                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">bio title</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">bio subtitle</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Bio Full</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody class="">
                  <?php foreach ($bioNeru as $bio) : ?>
                    <tr class="text-center  ">
                      <td class="w-14 "><?= $bio["bio_id"] ?></td>
                      <td class="w-42 "><?= $bio["bio_title"] ?></td>
                      <td class="w-42 "><?= $bio["bio_Subtitle"] ?></td>
                      <td class="3xl:w-[30%] w-[25%]  ">
                        <div class="h-36 text-justify overflow-y-auto">
                          <h6 class="text-sm"><?= $bio["bio_full"] ?></h6>
                        </div>
                      </td>
                      <td class=""><?= $bio["insert_date"] ?></td>
                      <td class=""><?= $bio["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($bio["status"] == 1) : ?>
                          <a href="status.php?bio_id=<?= $bio["bio_id"] ?>&status=<?= $bio["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="status.php?bio_id=<?= $bio["bio_id"] ?>&status=<?= $bio["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="status.php?bio_id=<?= $bio["bio_id"] ?>&status=<?= $bio["status"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="status.php?bio_id=<?= $bio["bio_id"] ?>&status=<?= $bio["status"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td class="">
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-bio-UpdateData.php?bio_id=<?= $bio["bio_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?bio_id=<?= $bio["bio_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div id="TestimonialSection" class="container hidden BoxTableData bg-white rounded-lg shadow-md 3xl:h-[700px] 2xl:h-[480px] overflow-y-auto mt-4">
              <div class="wrapperAddData mb-6 w-fit">
                <a href="Admin-hero-insertData.php" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                  </svg>
                  Tambah Data
                </a>
              </div>
              <table id="myTable6" class="myTableDisplay py-6 display nowrap table hover order-column row-border stripe">
                <thead>
                  <tr class="bg-blue-Neru text-white">

                    <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Img</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">insert on</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Last update</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Status</th>
                    <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($hero as $neru) : ?>
                    <tr class="text-center">

                      <td class="w-14"><?= $neru["hero_id"] ?></td>
                      <td class="w-60"><img src="<?= $neru["hero_img"] ?>" class="w-[80%] object-contain mx-auto" alt="" /></td>
                      <td><?= $neru["insert_date"] ?></td>
                      <td><?= $neru["lastUpdate_date"] ?></td>
                      <td class="">
                        <?php if ($neru["status"] == 1) : ?>
                          <a href="" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                          <a href="" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                        <?php else : ?>
                          <a href="" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                          <a href="" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                        <?php endif; ?>
                      </td>
                      <td>
                        <span class="flex items-center gap-2 justify-center">
                          <a href="Admin-hero-UpdateData.php?hero_id=<?= $neru["hero_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 text-2xl cursor-pointer"><i class="ti ti-pencil"></i></a>
                          <a class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full text-2xl cursor-pointer "><i class="ti ti-trash"></i></a>
                        </span>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- <form action="hapus.php" method="get">
              <div id="TrashNotifications" class="gap-4 translate-x-1/2 right-[40%] z-20 fixed invisible top-0 w-96 flex flex-col justify-center items-center border-2 border-blue-Neru rounded-lg backdrop-blur-lg h-32">
                <h6>Yakin Ingin Hapus Data?</h6>
                <input type="hidden" name="hero_id" value="<?= $neru["hero_id"] ?>">
                <div class="wrap flex gap-2">
                  <button id="ApporveDelete" type="submit" class="bg-red-400 py-2 rounded-md px-6 text-white font-semibold">Hapus</button>
                  <button id="CancelDelete" type="reset" class="bg-blue-Neru text-white py-2 rounded-md px-6 font-semibold">Tidak</button>
                </div>
              </div>
            </form> -->
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