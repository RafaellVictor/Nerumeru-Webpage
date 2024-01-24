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
    $hero_img = htmlspecialchars($data["hero_img"]);
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
                insert_date = NOW(),
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
    $whyus_img = htmlspecialchars($data["whyus_img"]);
    $whyus_title = htmlspecialchars($data["whyus_title"]);
    $whyus_subtitle = htmlspecialchars($data["whyus_subtitle"]);


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
    $whyus_title = htmlspecialchars($data["whyus_title"]);
    $whyus_subtitle = htmlspecialchars($data["whyus_subtitle"]);
    $status = $data["status"];

    $query = "UPDATE whyus SET 
                whyus_img = '$whyus_img', 
                whyus_title = '$whyus_title', 
                whyus_subtitle = '$whyus_subtitle', 
                status = '$status',
                insert_date = NOW(),
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
    $recommend_img = htmlspecialchars($data["recommend_img"]);
    $recommend_title = htmlspecialchars($data["recommend_title"]);



    $status = $data["status"];

    $query = "INSERT INTO recommendsection
    VALUES (
        '',
        '$recommend_img',
        '$recommend_title',
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
    $recommend_title = htmlspecialchars($data["recommend_title"]);
    $status = $data["status"];

    $query = "UPDATE recommendsection SET 
                recommend_img = '$recommend_img', 
                recommend_title = '$recommend_title', 
                status = '$status',
                insert_date = NOW(),
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
    $event_img = htmlspecialchars($data["event_img"]);
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
    $event_type = htmlspecialchars($data["event_type"]);
    $status = $data["status"];

    $query = "UPDATE neru_event SET 
                event_type = '$event_type',
                event_img = '$event_img', 
                status = '$status',
                insert_date = NOW(),
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
                insert_date = NOW(),
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

    $blog_icon = htmlspecialchars($data["blog_icon"]);
    $blog_icon_title = htmlspecialchars($data["blog_icon_title"]);
    $status = $data["status"];

    $query = "INSERT INTO blog
    VALUES (
        '',
        '$blog_icon',
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
    $blog_icon = htmlspecialchars($data["blog_icon"]);
    $blog_icon_title = htmlspecialchars($data["blog_icon_title"]);
    $status = $data["status"];

    $query = "UPDATE blog SET 
                blog_icon = '$blog_icon',
                blog_icon_title = '$blog_icon_title',
                status = '$status',
                insert_date = NOW(),
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
