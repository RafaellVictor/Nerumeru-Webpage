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
    $hero_status = $data["hero_status"];

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
        '$hero_status'
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
    $hero_status = $data["hero_status"];

    $query = "UPDATE herosection SET 
                hero_img = '$hero_img', 
                hero_title1 = '$hero_title1', 
                hero_title2 = '$hero_title2', 
                hero_title3 = '$hero_title3', 
                hero_subtitle = '$hero_subtitle', 
                hero_button1 = '$hero_button1', 
                hero_button2 = '$hero_button2', 
                hero_insert_date = NOW(),
                hero_lastUpdate_date = NOW(),
                hero_status = $hero_status
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
