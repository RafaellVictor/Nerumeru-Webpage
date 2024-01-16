<?php

require "function.php";

$id = $_GET['hero_id'];

if (deleteHero($id) > 0) {
    echo
    "<script>
        alert('Data berhasil di hapus');
        document.location.href = 'Admin-Homepage.php';
    </script>";
} else {
    echo
    "<script>
        alert('Data Gagal di hapus');
        document.location.href = 'Admin-Homepage.php';
    </script>";
}


?>