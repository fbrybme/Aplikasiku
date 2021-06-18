<?php
$page = '';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
switch ($page) {
    case 'profile':
        $judul = "Profile";
        $page  = "include 'profile.php';";
        break;

    case 'view-buku':
        $judul = "Data Buku";
        $page  = "include 'databuku/buku.php';";
        break;

    case 'in-buku':
        $judul = "Tambah Data Buku";
        $page  = "include 'databuku/buku_in.php';";
        break;

    case 'up-buku':
        $judul = "Ubah Data Buku";
        $page  = "include 'databuku/buku_up.php';";
        break;

    case 'add-gambar':
        $judul = "Upload Gambar";
        $page  = "include 'databuku/buku_gambar.php';";
        break;

    case 'detail-buku':
        $judul = "Detail Data Buku";
        $page  = "include 'databuku/buku_det.php';";
        break;

    default:
        $judul = "Dashboard";
        $page  = "include 'content.php';";
        break;
}

$CONTENT['main'] = $page;
