<?php

if (isset($_SESSION["user_id"])) {
    // Include your database connection file and create $conn object

    // Assuming you've sanitized your input, you can directly use $_SESSION["user_id"]
    $user_id = $_SESSION["user_id"];

    // Prepare and execute the query with proper parameter binding
    $query = "SELECT * FROM user_locations INNER JOIN user ON user_locations.user_id = user.user_id WHERE user_locations.user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are any results
    if ($result->num_rows > 0) {
        $locations = $result->fetch_assoc();
        // Process fetched data as needed
    } else {
        echo "Data Pengguna untuk menampilkan alamat tidak ditemukan";
    }
} else {
    // If the user is not logged in, show an error message
    echo "<script>
      alert('Login Terlebih Dahulu');
      window.location.href = 'login_Register.php'; // Redirect using JavaScript
      </script>";
    exit(); // Stop PHP script execution after sending the error message
}



?>



<?php foreach ($locations as $location) : ?>
    <div class="user-informations bg-white flex flex-col  gap-4 border-2 p-6 rounded-lg">
        <div class="flex md:flex-row flex-col justify-between items-center gap-4">
            <div class="wrapper xl:w-1/2 w-full flex flex-col gap-2">
                <span class="flex md:flex-row flex-col lg:items-center items-start gap-2">
                    <h6 class="font-semibold"><?= $locations["user_username_location"] ?></h6>
                    <hr class="md:block hidden border-[1px] h-4 border-separate border-black" />
                    <h6 class="font-light">(<?= $locations["user_phone_location"] ?>)</h6>
                </span>
                <h6 class="font-light lg:text-base text-sm"><?= $locations["user_location"] ?></h6>
                <div class="flex gap-2 items-center md:w-1/2 w-full justify-start mt-4">
                    <a class="lg:text-base text-sm flex gap-1 items-center text-green-500 cursor-pointer">
                        <h6>Ubah Alamat</h6>
                    </a>
                    <hr class="border-[1px] h-4 border-separate border-black" />
                    <a class="lg:text-base text-sm flex gap-1 items-center text-red-500 cursor-pointer">
                        <h6>Hapus</h6>
                    </a>
                </div>
            </div>
            <div class="flex gap-2 pilihAlamat items-center  md:w-1/2 w-full md:justify-end justify-start mt-4">
                <a class="md:bg-blue-Neru  rounded-lg px-4 text-center justify-center py-2 lg:text-base text-sm flex gap-1 items-center text-black md:border-0 border-2 md:text-white md:w-fit w-full  cursor-pointer">
                    <h6 class="md:text-sm text-xs">Pilih Alamat</h6>
                </a>
            </div>
            <div class="alamatTerpilih flex gap-2  items-center non-active-locations  md:w-1/2 w-full md:justify-end justify-start mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 text-blue-Neru md:block hidden" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg>
                <button class="bg-blue-Neru md:hidden block rounded-lg p-2 text-xs text-white font-medium w-full">Alamat Terpilih</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>