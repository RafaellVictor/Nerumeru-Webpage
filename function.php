<?php

$conn = mysqli_connect('localhost', 'root', '', 'nerumeru');

// Global Function
function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    foreach ($result as $row) {
        $rows[] = $row;
    }
    return $rows;
}
// Global Function end

// Homepage function
// =========================
// Banner  
function insertHero($data)
{
    global $conn;

    // Upload Gambar
    $hero_img = upload();
    if (!$hero_img) {
        return false;
    }

    $hero_title1 = htmlspecialchars($data["hero_title1"]);
    $hero_title2 = htmlspecialchars($data["hero_title2"]);
    $hero_title3 = htmlspecialchars($data["hero_title3"]);
    $hero_subtitle = htmlspecialchars($data["hero_subtitle"]);
    $hero_button1 = htmlspecialchars($data["hero_button1"]);
    $hero_button2 = htmlspecialchars($data["hero_button2"]);
    $status = $data["status"];

    $query = "INSERT INTO herosection 
    VALUES (
        '',
        '$hero_title1',
        '$hero_title2',
        '$hero_title3',
        '$hero_subtitle',
        '$hero_button1',
        '$hero_button2',
        '$hero_img',
        NOW(),
        NOW(),
        '$status'
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function updateHero($data)
{
    global $conn;

    $hero_id = $data["hero_id"];
    $hero_img = htmlspecialchars($data["hero_img"]);
    $hero_imgLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $hero_img = $hero_imgLama;
    } else {
        $hero_img = upload();
    }

    $hero_title1 = htmlspecialchars($data["hero_title1"]);
    $hero_title2 = htmlspecialchars($data["hero_title2"]);
    $hero_title3 = htmlspecialchars($data["hero_title3"]);
    $hero_subtitle = htmlspecialchars($data["hero_subtitle"]);
    $hero_button1 = htmlspecialchars($data["hero_button1"]);
    $hero_button2 = htmlspecialchars($data["hero_button2"]);
    $status = $data["status"];

    $query = "UPDATE herosection SET 
                hero_img = '$hero_img', 
                hero_title1 = '$hero_title1', 
                hero_title2 = '$hero_title2', 
                hero_title3 = '$hero_title3', 
                hero_subtitle = '$hero_subtitle', 
                hero_button1 = '$hero_button1', 
                hero_button2 = '$hero_button2', 
                lastUpdate_date = NOW(),
                status = '$status'
              WHERE hero_id = $hero_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteHero($id)
{

    global $conn;

    $query = "DELETE FROM herosection WHERE hero_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Homepage function  End

// Why us Function 
function insertwhyus($data)
{
    global $conn;
    $whyus_img = upload();
    $whyus_title = htmlspecialchars($data["whyus_title"]);
    $whyus_subtitle = htmlspecialchars($data["whyus_subtitle"]);

    if (!$whyus_img) {
        return false;
    }


    $status = $data["status"];

    $query = "INSERT INTO whyus 
    VALUES (
        '',
        '$whyus_img',
        '$whyus_title',
        '$whyus_subtitle',
        '$status',

        NOW(),
        NOW()
   
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updatewhyus($data)
{
    global $conn;

    $whyus_id = $data["whyus_id"];
    $whyus_img = htmlspecialchars($data["whyus_img"]);
    $whyus_imgLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $whyus_img = $whyus_imgLama;
    } else {
        $whyus_img = upload();
    }

    $whyus_title = htmlspecialchars($data["whyus_title"]);
    $whyus_subtitle = htmlspecialchars($data["whyus_subtitle"]);
    $status = $data["status"];

    $query = "UPDATE whyus SET 
                whyus_img = '$whyus_img', 
                whyus_title = '$whyus_title', 
                whyus_subtitle = '$whyus_subtitle', 
                status = '$status',
                lastUpdate_date = NOW()
           
              WHERE whyus_id = $whyus_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deletewhyus($id)
{

    global $conn;

    $query = "DELETE FROM whyus WHERE whyus_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Why us Function End



// product recommended Function 
function insertProductRecom($data)
{
    global $conn;
    $recommend_img = upload();

    if (!$recommend_img) {
        return false;
    }


    $recommend_title = htmlspecialchars($data["recommend_title"]);
    $recommend_link = htmlspecialchars($data["recommend_targetLink"]);


    $status = $data["status"];

    $query = "INSERT INTO recommendsection
    VALUES (
        '',
        '$recommend_img',
        '$recommend_title',
        '$recommend_link',
        '$status',
        NOW(),
        NOW()
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateProductRecom($data)
{
    global $conn;

    $recommend_id = $data["recommend_id"];
    $recommend_img = htmlspecialchars($data["recommend_img"]);
    $recommend_imgLama = htmlspecialchars($data["gambarLama"]);
    $recommend_link = htmlspecialchars($data["recommend_targetLink"]);
    if ($_FILES['gambar']['error'] === 4) {
        $recommend_img = $recommend_imgLama;
    } else {
        $recommend_img = upload();
    }

    $recommend_title = htmlspecialchars($data["recommend_title"]);
    $status = $data["status"];

    $query = "UPDATE recommendsection SET 
                recommend_img = '$recommend_img', 
                recommend_title = '$recommend_title', 
                recommend_targetLink = '$recommend_link', 
                status = '$status',
                lastUpdate_date = NOW()
              WHERE recommend_id = $recommend_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteProductRecom($id)
{

    global $conn;

    $query = "DELETE FROM recommendsection WHERE recommend_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// product recommended Function End


// Event Function 
function insertEvent($data)
{
    global $conn;
    $event_img = upload();

    if (!$event_img) {
        return false;
    }

    $event_type = htmlspecialchars($data["event_type"]);

    $status = $data["status"];

    $query = "INSERT INTO neru_event
    VALUES (
        '',
        '$event_type',
        '$event_img',
        '$status',
        NOW(),
        NOW()
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateEvent($data)
{
    global $conn;

    $event_id = $data["event_id"];
    $event_img = htmlspecialchars($data["event_img"]);
    $event_imgLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $event_img = $event_imgLama;
    } else {
        $event_img = upload();
    }

    $event_type = htmlspecialchars($data["event_type"]);
    $status = $data["status"];

    $query = "UPDATE neru_event SET 
                event_type = '$event_type',
                event_img = '$event_img', 
                status = '$status',
                lastUpdate_date = NOW()
              WHERE event_id = $event_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteEvent($id)
{

    global $conn;

    $query = "DELETE FROM neru_event WHERE event_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Event Function End


// Event Function 
function insertBio($data)
{
    global $conn;

    $bio_title = htmlspecialchars($data["bio_title"]);
    $bio_subtitle = htmlspecialchars($data["bio_subtitle"]);
    $bio_full = htmlspecialchars($data["bio_full"]);


    $status = $data["status"];

    $query = "INSERT INTO bio
    VALUES (
        '',
        '$bio_title',
        '$bio_subtitle',
        '$bio_full',
        '$status',
        NOW(),
        NOW()
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateBio($data)
{
    global $conn;

    $bio_id = $data["bio_id"];
    $bio_title = htmlspecialchars($data["bio_title"]);
    $bio_subtitle = htmlspecialchars($data["bio_subtitle"]);
    $bio_full = htmlspecialchars($data["bio_full"]);
    $status = $data["status"];

    $query = "UPDATE bio SET 
                bio_title = '$bio_title',
                bio_subtitle = '$bio_subtitle',
                bio_full = '$bio_full',
                status = '$status',
                lastUpdate_date = NOW()
              WHERE bio_id = $bio_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteBio($id)
{

    global $conn;

    $query = "DELETE FROM bio WHERE bio_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Event Function End


// Event Function 
function insertBlogIcon($data)
{
    global $conn;
    $blog_type = htmlspecialchars($data["blog_type"]);
    $blog_icon = htmlspecialchars($data["blog_icon"]);
    $blog_link = htmlspecialchars($data["blog_targetLink"]);
    $blog_icon_title = htmlspecialchars($data["blog_icon_title"]);
    $status = $data["status"];

    $query = "INSERT INTO blog
    VALUES (
        '',
        '$blog_type',
        '$blog_icon',
        '$blog_link',
        '$blog_icon_title',
        '',
        '$status',
        NOW(),
        NOW()
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateBlogIcon($data)
{
    global $conn;

    $blog_id = $data["blog_id"];
    $blog_type = htmlspecialchars($data["blog_type"]);
    $blog_icon = htmlspecialchars($data["blog_icon"]);
    $blog_link = htmlspecialchars($data["blog_targetLink"]);
    $blog_icon_title = htmlspecialchars($data["blog_icon_title"]);
    $status = $data["status"];

    $query = "UPDATE blog SET 
                blog_type = '$blog_type',
                blog_icon = '$blog_icon',
                blog_targetLink = '$blog_link',
                blog_icon_title = '$blog_icon_title',
                status = '$status',
                lastUpdate_date = NOW()
              WHERE blog_id = $blog_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteBlogIcon($id)
{

    global $conn;

    $query = "DELETE FROM blog WHERE blog_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Event Function End



// Banner 
function insertBanner($data)
{
    global $conn;
    $banner_img = htmlspecialchars($data["banner_img"]);
    $banner_title = htmlspecialchars($data["banner_title"]);
    $banner_subtitle = htmlspecialchars($data["banner_subtitle"]);
    $banner_button = htmlspecialchars($data["banner_button"]);
    $status = $data["status"];

    $query = "INSERT INTO banner
    VALUES (
        '',
        '$banner_img ',
        '$banner_title',
        '$banner_subtitle',
        '$banner_button',
        '',
        '$status',
        NOW(),
        NOW()
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateBanner($data)
{
    global $conn;

    $banner_id = $data["banner_id"];
    $banner_img = htmlspecialchars($data["banner_img"]);
    $banner_title = htmlspecialchars($data["banner_title"]);
    $banner_subtitle = htmlspecialchars($data["banner_subtitle"]);
    $banner_button = htmlspecialchars($data["banner_button"]);
    $status = $data["status"];

    $query = "UPDATE blog SET 
                banner_img = '$banner_img',
                banner_title = '$banner_title',
                banner_subtitle = '$banner_subtitle',
                banner_button = '$banner_button',
                status = '$status',
                lastUpdate_date = NOW()
              WHERE banner_id = $banner_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function deleteBanner($id)
{

    global $conn;

    $query = "DELETE FROM banner WHERE banner_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// banner end



// Product function
// =========================
function insertProduct($data)
{
    global $conn;

    // Upload Gambar
    $product_img = upload();
    if (!$product_img) {
        return false;
    }

    $product_type = htmlspecialchars($data["product_type"]);
    $product_name = htmlspecialchars($data["product_name"]);
    $product_stock = htmlspecialchars($data["product_stock"]);
    $product_color = htmlspecialchars($data["product_color"]);
    $product_price = htmlspecialchars($data["product_price"]);
    $product_specification = htmlspecialchars($data["product_specification"]);
    $product_weight = htmlspecialchars($data["product_weight"]);
    $product_warranty = htmlspecialchars($data["product_warranty"]);
    $product_rating = htmlspecialchars($data["product_rating"]);
    $status = $data["status"];


    $query = "INSERT INTO product 
    VALUES (
        '',
        '$product_img',
        '$product_type',
        '$product_name',
        '$product_stock',
        '$product_color',
        '$product_price',
        '$product_specification',
        '$product_weight',
        '$product_warranty',
        '$product_rating',
        NOW(),
        NOW(),
        '$status'
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateProduct($data)
{
    global $conn;

    $product_id = $data["product_id"];
    $product_img = htmlspecialchars($data["product_img"]);
    $product_imgLama = htmlspecialchars($data["gambarLama"]);

    if($_FILES['gambar']['error'] === 4) {
        $product_img = $product_imgLama;
    } else {
        $product_img = upload();
    }

    $product_name = htmlspecialchars($data["product_name"]);
    $product_stock = htmlspecialchars($data["product_stock"]);
    $product_color = htmlspecialchars($data["product_color"]);
    $product_price = htmlspecialchars($data["product_price"]);
    $product_specification = htmlspecialchars($data["product_specification"]);
    $product_weight = htmlspecialchars($data["product_weight"]);
    $product_warranty = htmlspecialchars($data["product_warranty"]);
    $product_rating = htmlspecialchars($data["product_rating"]);
    $status = $data["status"];

    $query = "UPDATE product SET 
                product_img = '$product_img',
                product_name = '$product_name', 
                product_color = '$product_color', 
                product_price = '$product_price', 
                product_stock = '$product_stock', 
                product_specification = '$product_specification', 
                product_weight = '$product_weight', 
                product_warranty = '$product_warranty', 
                product_rating = '$product_rating',
                lastUpdate_date = NOW(),
                status = '$status'
              WHERE product_id = $product_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteProduct($id)
{

    global $conn;

    $query = "DELETE FROM product WHERE product_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Product function  End


// Trolly function
// =========================
function insertTrolly($data)
{
    global $conn;

    $trolly_size = htmlspecialchars($data["trolly_size"]);
    $trolly_color = htmlspecialchars($data["trolly_color"]);
    $status = $data["status"];

    $query = "INSERT INTO trolly 
    VALUES (
        '',
        '$trolly_size',
        '$trolly_color',
        NOW(),
        NOW(),
        '$status'
    )";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateTrolly($data)
{
    global $conn;

    $trolly_id = $data["trolly_id"];

    $trolly_size = htmlspecialchars($data["trolly_size"]);
    $trolly_color = htmlspecialchars($data["trolly_color"]);
    $status = $data["status"];

    $query = "UPDATE trolly SET 
                trolly_size = '$trolly_size',
                trolly_color = '$trolly_color', 
                lastUpdate_date = NOW(),
                status = '$status'
              WHERE trolly_id = $trolly_id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteTrolly($id)
{

    global $conn;

    $query = "DELETE FROM trolly WHERE trolly_id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// Trolly function  End


function upload()
{
    $namaFile = $_FILES["gambar"]["name"];
    // $error = $_FILES["gambar"]["error"];

    // Pengecekan Apakah yang di-upload adalah gambar
    $extensiGambarValid = ["jpg", "png", "jpeg", "svg"];
    $extensiGambar = explode(".", $namaFile);
    $extensiGambar = strtolower(end($extensiGambar));

    if (!in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>alert('Yang Anda Upload Bukan Gambar');</script>";
        return false;
    }

    // Pengecekan Ukuran Size Dari Gambar 
    // Mendapatkan ukuran file gambar yang diunggah
    $ukuran_file = $_FILES['nama_file']['size']; // asumsikan 'nama_file' adalah nama input file pada form

    // Batas ukuran file (dalam bytes), 6 MB = 6 * 1024 * 1024 bytes
    $batas_ukuran = 6000000;

    // Memeriksa apakah ukuran file melebihi batas yang ditetapkan
    if ($ukuran_file > $batas_ukuran) {
        echo "<script>alert('Ukuran Gambar Terlalu Besar');</script>";
        return false; // Anda mungkin ingin melakukan tindakan lain selain mengembalikan false
    }



    // Generate Nama file baru
    $tmpName = $_FILES["gambar"]["tmp_name"];
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $extensiGambar;

    // Lolos Pengecekan , Gambar Siap di-upload 
    if (move_uploaded_file($tmpName, "img/" . $namaFilebaru)) {
        return $namaFile;
    } else {
        echo "<script>alert('Gagal mengunggah gambar');</script>";
        return false;
    }
}

function registerAccount($data)
{
    global $conn;
    $user_email = htmlspecialchars($data['user_email']);
    $user_phone = htmlspecialchars($data['user_phone']);
    $user_password = mysqli_real_escape_string($conn, $data['user_password']);

    // Encrypted Code Password Security
    $encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);

    // Insert Into Database
    $query = "INSERT INTO user 
              (user_password, user_phone, user_email, insert_date, lastUpdate_date)
              VALUES (
                '$encrypted_password',
                '$user_phone', 
                '$user_email', 
                NOW(),
                NOW()
                )";

    // Execute Query
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function login() {
    
}