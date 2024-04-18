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
                <?php include("layout/layout/sidebar.admin.php"); ?>
                <!-- Side Bar end -->
                <!-- Main Menu -->
                <div class="flex flex-col gap-4 container">
                <?php include "layout/header-admin.php"; ?>
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
                                            <img src="<?= $blog["blog_icon"] ?>" class="w-full object-contain mx-auto" alt="" />
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
                                        <label for="">Blog Target link</label>
                                        <input required class="w-full p-2 outline-none border-2" value="<?= $blog["blog_targetLink"] ?>" name="blog_targetLink" type="text" />
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