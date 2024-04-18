<?php

require "function.php";


$id = $_GET['bio_id'];

$bio = query("SELECT * FROM bio WHERE bio_id = $id")[0];

if (isset($_POST["submit"])) {
  if (updatebio($_POST) > 0) {
    echo
    "<script>
        alert('Data berhasil di Ubah');
        document.location.href = 'Admin-Homepage.php';
    </script>";
  } else {
    echo
    "<script>
        alert('Data Gagal di Ubah');
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
  <main class="my-0 flex overflow-hidden">
    <!-- Side Bar -->
    <?php include("layout/sidebar.admin.php"); ?>
    <!-- Side Bar end -->
    <section class="admin relative h-screen overflow-y-auto my-0 w-full">
      <div class="flex items-start justify-between">
        <!-- Main Menu -->
        <div class="flex flex-col gap-4 container">
          <?php include "layout/header-admin.php"; ?>
          <div class=" w-full">
            <div class="container bg-white rounded-lg shadow-md h-fit flex flex-col gap-3 overflow-y-auto">
              <div class="WrapperBack mb-6 w-fit">
                <a href="Admin-Homepage.php" class="bg-blue-Neru w-fit text-white px-2 rounded-full py-2 cursor-pointer font-semibold text-base flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 6l-6 6l6 6" />
                  </svg>
                </a>
              </div>
              <form class="w-full" action="" method="post">
                <div class="grid grid-cols-1 gap-6">
                  <div class="flex flex-col w-full gap-5">
                    <input type="hidden" name="bio_id" value="<?= $bio["bio_id"] ?>">
                    <label for="">Title 1</label>
                    <input class="w-full p-2 outline-none border-2" value="<?= $bio["bio_title"] ?>" name="bio_title" placeholder="Nerumeru's Delightful Pets" type="text" />
                    <label for="">Title 1</label>
                    <input class="w-full p-2 outline-none border-2" value="<?= $bio["bio_Subtitle"] ?>" name="bio_subtitle" placeholder="Nerumeru's Delightful Pets" type="text" />
                  </div>
                </div>
                <div class="flex flex-col w-full gap-5 mt-10">
                  <label for="">Subtitle</label>
                  <textarea name="bio_full" class="p-2 outline-none border-2 text-start" id="" placeholder="Your Subtitle" cols="30" rows="10"><?= $bio["bio_full"] ?></textarea>
                  <select class="w-full p-2 outline-none border-2" name="status" id="status">
                    <option> <?= $bio["status"] ?>
                      <?php if ($bio["status"] === "1") : ?>
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