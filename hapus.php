<?php

require "function.php";


if (isset($_GET['hero_id'])) {
    $id_hero = $_GET['hero_id'];
    if (deleteHero($id_hero) > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href = 'Admin-Homepage.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location.href = 'Admin-Homepage.php';
              </script>";
    }
}




if (isset($_GET['whyus_id'])) {
    $id_whyus = $_GET['whyus_id'];
    if (deletewhyus($id_whyus) > 0) {
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
}


if (isset($_GET['recommend_id'])) {
    $id_recommend = $_GET['recommend_id'];
    if (deleteProductRecom($id_recommend) > 0) {
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
}


if (isset($_GET['event_id'])) {
    $id_event = $_GET['event_id'];
    if (deleteEvent($id_event) > 0) {
        echo
        "<script>
            alert('Data berhasil di hapus');
            document.location.href = 'Admin-Blog.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data Gagal di hapus');
            document.location.href = 'Admin-Blog.php';
        </script>";
    }
}

if (isset($_GET['news_id'])) {
    $id_news = $_GET['news_id'];
    if (deleteEvent($id_news) > 0) {
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
}


if (isset($_GET['bio_id'])) {
    $id_bio = $_GET['bio_id'];
    if (deleteBio($id_bio) > 0) {
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
}

if (isset($_GET['blog_id'])) {
    $id_blog = $_GET['blog_id'];
    if (deleteBlogIcon($id_blog) > 0) {
        echo
        "<script>
            alert('Data berhasil di hapus');
            document.location.href = 'Admin-Blog.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data Gagal di hapus');
            document.location.href = 'Admin-Blog.php';
        </script>";
    }
}

if (isset($_GET['banner_id'])) {
    $id_banner = $_GET['banner_id'];
    if (deleteBanner($id_banner) > 0) {
        echo
        "<script>
            alert('Data berhasil di hapus');
            document.location.href = 'Admin-Banner.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Data Gagal di hapus');
            document.location.href = 'Admin-Banner.php';
        </script>";
    }
}