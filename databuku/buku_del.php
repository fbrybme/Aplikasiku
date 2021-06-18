<?php
include '../config/koneksi.php';

$kodebuku = $_GET['kodebuku'];
$sql      = mysqli_query($koneksi, "DELETE FROM buku WHERE kodebuku = '$kodebuku'");
if ($sql) {
    echo "<script>alert('Data Berhasil Dihapus');location.href='../index.php?page=view-buku'</script>";
}
