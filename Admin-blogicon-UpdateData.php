<?php

require "function.php";

$id = $_GET["blog_id"];

$blog = query("SELECT * FROM blog WHERE blog_id = $id")[0];

if (isset($_POST["submit"])) {
    if (updateBlogIcon($_POST) > 0) {
        echo
        "<script>
        alert('Data berhasil di Ubah');
        document.location.href = 'Admin-Blog.php';
    </script>";
    } else {
        echo
        "<script>
        alert('Data Gagal di Ubah');
        document.location.href = 'Admin-Blog.php';
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
    <title>blog | Admin</title>
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
                                <a href="Admin-Blog.php" class="bg-blue-Neru w-fit text-white px-2 rounded-full py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 6l-6 6l6 6" />
                                    </svg>
                                </a>
                            </div>
                            <form class="w-full" action="" method="post">
                                <input type="hidden" name="blog_id" value="<?= $blog["blog_id"] ?>">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="flex flex-col w-full gap-3">
                                        <div class="w-full flex flex-col gap-4  bg-white-neru rounded-md border-2 p-3">
                                            <div class="bg-blue-Neru py-5 mx-auto px-5 rounded-full w-fit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="xl:w-14 w-7 text-white" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />
                                                    <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />
                                                    <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />
                                                    <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />
                                                    <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
                                                    <path d="M12 8v4l3 3" />
                                                </svg>
                                            </div>
                                            <label for="">blog Icon <span class="text-red-500 font-medium">(Note : 2 Type File input file & link img)</span> </label>
                                            <input type="file">
                                            <input class="w-full p-2 outline-none border-2" type="text" name="blog_icon" value="<?= $blog["blog_icon"] ?>" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-full gap-3">
                                        <label for="">Blog Icon Title</label>
                                        <input class="w-full p-2 outline-none border-2" type="text" name="blog_icon_title" value="<?= $blog["blog_icon_title"] ?>" />
                                        <label for="">Blog Type</label>
                                        <select name="blog_type" class="w-full p-2 outline-none border-2">
                                            <option value="<?= $blog["blog_type"] ?>"><?= $blog["blog_type"] ?></option>
                                            <option value="icon">icon</option>
                                            <option value="vidio">vidio</option>
                                        </select>
                                        <label for="">Status Content</label>
                                        <select class="w-full p-2 outline-none border-2" name="status" id="status">
                                            <option> <?= $blog["status"] ?>
                                                <?php if ($blog["status"] === "1") : ?>
                                                    <?= "= Item Active" ?>
                                                <?php else : ?>
                                                    <?= "= Item Non-Active" ?>
                                                <?php endif; ?>
                                            </option>
                                            <optgroup label="Active">
                                                <option value="1">1</option>
                                            </optgroup>
                                            <optgroup label="Non-Active">
                                                <option value="0">0</option>
                                            </optgroup>
                                        </select>
                                        <button type="submit" name="submit" class="bg-green-400 p-2 rounded-md text-white font-semibold w-fit self-end">Update Data</button>
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