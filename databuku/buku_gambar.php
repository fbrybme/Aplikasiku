<?php
include 'config/koneksi.php';
if (isset($_POST['upload'])) {
    $ekst_oke   = array('jpg', 'jpeg', 'png'); // ekstensi file yg diperbolehkan
    $namafile   = $_FILES['gambar']['name']; // mengambil nama file melalui inputan
    $exp        = explode('.', $namafile); // pisahkan nama file dan ekstensi
    $ekstensi   = strtolower(end($exp)); // mengambil ekstensi file
    $ukuran     = $_FILES['gambar']['size']; // mengambil ukuran file
    $file_tmp   = $_FILES['gambar']['tmp_name'];
    $kodebuku   = $_POST['kodebuku'];
    if (in_array($ekstensi, $ekst_oke) === true) { // jika ekstensi sesuai dan diperbolehkan
        if ($ukuran <= 1044070) { // jika ukuran lebih kecil sama dengan 1mb
            // maka pindahkan file ke folder tujuan/folder upload
            move_uploaded_file($file_tmp, 'upload_file/' . $namafile);
            $sql = mysqli_query($koneksi, "UPDATE buku SET gambar = '$namafile' WHERE kodebuku = '$kodebuku'");
            if ($sql) {
                echo "<script>alert('Gambar Berhasil Diupload');location.href='index.php?page=view-buku'</script>";
            }
        } else {
            echo "<script>alert('Ukuran File Terlalu Besar!');location.href='index.php?page=view-buku'</script>";
        }
    } else {
        echo "<script>alert(Ekstensi File Tidak Diizinkan!');location.href='index.php?page=view-buku'</script>";
    }
}

$kodebuku = $_GET['kodebuku'];
$tampil   = mysqli_query($koneksi, "SELECT * FROM buku WHERE kodebuku = '$kodebuku'");
while ($data = mysqli_fetch_array($tampil)) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Buku</h6>
                    <a href="index.php?page=view-buku" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sign-in text-white-50"></i> Tampil Data</a>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <h4><?= $data['kodebuku']; ?></h4>
                            <input type="hidden" name="kodebuku" class="form-control" value="<?= $data['kodebuku']; ?>" placeholder="Masukkan Kode Buku">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <h4><?= $data['judul']; ?></h4>
                        </div>
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="upload" class="btn btn-primary"><i class="fas fa-save"></i> Upload Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>