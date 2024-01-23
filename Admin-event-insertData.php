<?php

require "function.php";


if (isset($_POST["submit"])) {
    if (insertEvent($_POST) > 0) {
        echo
        "<script>
        alert('Data berhasil di Tambahkan');
        document.location.href = 'Admin-Homepage.php';
    </script>";
    } else {
        echo
        "<script>
        alert('Data Gagal di Tambahkan');
        document.location.href = 'Admin-Homepage.php';
    </script>";
    }
}

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
    <title>Nerumeru | Admin</title>
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
                    <header class="z-40 flex items-center bg-white rounded-lg justify-between w-full h-20 px-5">
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
                        <div class="container bg-white rounded-lg shadow-md 3xl:h-[760px] 2xl:h-[550px] flex flex-col gap-3 overflow-y-auto mt-4">
                            <div class="WrapperBack mb-6 w-fit">
                                <a href="Admin-Homepage.php" class="bg-blue-Neru w-fit text-white px-2 rounded-full py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 6l-6 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                            <form class="w-full" action="" method="post">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="flex flex-col w-full gap-3">
                                        <div class="w-full flex flex-col gap-4  bg-white-neru rounded-md border-2 p-3">
                                            <img src="img/Save.png" class=" mx-auto" alt="">
                                            <label for="">event Img <span class="text-red-500 font-medium">(Note : 2 Type File input file & link img)</span> </label>
                                            <input type="file">
                                            <input class="w-full p-2 outline-none border-2" type="text" name="event_img" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full gap-3">
                                        <select name="event_type" class="w-full p-2 outline-none border-2" name="status" id="status">
                                            <option value="event">event</option>
                                            <option value="news">news</option>
                                        </select>
                                        <label for="">Status Content</label>
                                        <input required class="w-full p-2 outline-none border-2" name="status" value="0" readonly type="text" />
                                        <button type="submit" name="submit" class="bg-green-400 p-2 rounded-md text-white font-semibold w-fit self-end">Tambah Data</button>
                                    </div>
                                </div>
                            </form>
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
<script src="jsAdmin.js"></script>

</html>