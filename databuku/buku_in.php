<?php
include 'config/koneksi.php';
if (isset($_POST['simpan'])) {
    $kodebuku   = $_POST['kodebuku'];
    $judul      = $_POST['judul'];
    $kategori   = $_POST['kategori'];
    $pengarang  = $_POST['pengarang'];
    $penerbit   = $_POST['penerbit'];
    $tahun      = $_POST['tahun'];
    $sinopsis   = $_POST['sinopsis'];

    $sql = mysqli_query($koneksi, "INSERT INTO buku VALUES('$kodebuku', '$judul', '$kategori', '$pengarang', '$penerbit', '$tahun', '$sinopsis', 'default.jpg')");
    if ($sql) {
        echo "<script>alert('Data Berhasil Ditambahkan');location.href='index.php?page=in-buku'</script>";
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Buku</h6>
                <a href="index.php?page=view-buku" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sign-in text-white-50"></i> Tampil Data</a>
            </div>
            <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode Buku</label>
                        <input type="text" name="kodebuku" class="form-control" placeholder="Masukkan Kode Buku">
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" placeholder="Masukkan Pengarang">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" placeholder="Masukkan Penerbit">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun">
                    </div>
                    <div class="form-group">
                        <label>Sinopsis</label>
                        <textarea type="text" name="sinopsis" class="form-control" placeholder="Masukkan Sinopsis"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>