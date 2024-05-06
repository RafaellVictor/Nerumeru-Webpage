<?php

require "function.php";

$product_id = $_GET["product_id"];

$Multi_img = query("SELECT * FROM other_product_img INNER JOIN product ON other_product_img.product_id = product.product_id WHERE other_product_img.product_id  = $product_id");

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
                <?php include("layout/sidebar.admin.php"); ?>
                <!-- Side Bar end -->
                <!-- Main Menu -->
                <div class="flex flex-col gap-4 container">
                    <?php include "layout/header-admin.php"; ?>
                    <div class="max-h-screen w-full overflow-y-auto">

                        <a href="Admin-Multi-Img-insertData.php?product_id=<?= $_GET['product_id'] ?>" class="bg-blue-Neru w-fit text-white px-3 rounded-lg py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-rounded-plus-filled w-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm0 6a1 1 0 0 0 -1 1v2h-2l-.117 .007a1 1 0 0 0 .117 1.993h2v2l.007 .117a1 1 0 0 0 1.993 -.117v-2h2l.117 -.007a1 1 0 0 0 -.117 -1.993h-2v-2l-.007 -.117a1 1 0 0 0 -.993 -.883z" fill="currentColor" stroke-width="0" />
                            </svg>
                            Tambah Data
                        </a>
                        <div id="UserData" class="container BoxTableData bg-white rounded-lg shadow-md 3xl:h-fit 2xl:h-fit overflow-y-auto mt-4">
                            <a href="Admin-Products.php" class="flex items-center gap-3 mb-3">
                                <Span class="bg-blue-Neru w-10 h-10  flex items-center justify-center rounded-full text-white text-xl">
                                    < </Span>
                            </a>
                            <table id="myTable2" class="myTableDisplay text-base py-6 display table hover order-column row-border stripe">
                                <thead>
                                    <tr class="bg-blue-Neru text-white">
                                        <th class="border-[1px] border-black-neru border-opacity-30">ID</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Img1</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Img2</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Img3</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">status</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Inserted On</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Last Updated</th>
                                        <th class="border-[1px] border-black-neru border-opacity-30">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Multi_img as $product) : ?>
                                        <tr class="text-start">
                                            <td class="w-14"><?= $product["product_id"] ?></td>
                                            <td class="w-28"><img src="img/<?= $product["product_img_1"] ?>" alt=""></td>
                                            <td class="w-28"><img src="img/<?= $product["product_img_2"] ?>" alt=""></td>
                                            <td class="w-28"><img src="img/<?= $product["product_img_3"] ?>" alt=""></td>
                                            <td class="">
                                                <?php if ($product["status_multiImg"] == 1) : ?>
                                                    <a href="status.php?img_id=<?= $product["product_id"] ?>&status=<?= $product["status_multiImg"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Aktif</a>
                                                    <a href="status.php?img_id=<?= $product["product_id"] ?>&status=<?= $product["status_multiImg"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Non Aktif</a>
                                                <?php else : ?>
                                                    <a href="status.php?img_id=<?= $product["product_id"] ?>&status=<?= $product["status_multiImg"] ?>" class="badge bg-green-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-20">Aktif</a>
                                                    <a href="status.php?img_id=<?= $product["product_id"] ?>&status=<?= $product["status_multiImg"] ?>" class="badge bg-red-400 rounded-md w-fit px-2 py-1 mx-auto text-white font-semibold text-xs opacity-100">Non Aktif</a>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= $product["insert_date"] ?></td>
                                            <td><?= $product["lastUpdate_date"] ?></td>
                                            <td>
                                                <span class="flex items-center gap-2 justify-center">
                                                    <a href="Admin-Multi-Img-update.php?product_id=<?= $product["product_id"] ?>" class="text-white rounded-full px-2 py-1 bg-green-500 3xl:text-2xl text-base cursor-pointer"><i class="ti ti-pencil"></i></a>
                                                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapus.php?img_id=<?= $product["product_id"] ?>" class="HapusDataToggler text-white bg-red-500 px-2 py-1 rounded-full 3xl:text-2xl text-base cursor-pointer "><i class="ti ti-trash"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            BoxTableData[savedActiveButtonIndex].classList.add("Active-BoxTable"); // Aktifkan data yang sesuai
        }
    } else {
        // Jika tidak ada status toggler yang disimpan sebelumnya atau indeks tidak valid, maka item pertama akan dianggap aktif
        ButtonTogglerActive[0].classList.add("ButtonAdminMenuActive");
        saveActiveButton(0); // Menyimpan status toggler yang aktif ke dalam localStorage
        if (BoxTableData[0]) {
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
                    box.classList.add("Active-BoxTable");
                } else if (box) {
                    box.classList.remove("Active-BoxTable");
                }
            });
            OtherButton.classList.add("ButtonAdminMenuActive");
            saveActiveButton(index);
        });
    });
</script>

</html>