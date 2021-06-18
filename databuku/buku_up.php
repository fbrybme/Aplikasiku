<?php
include 'config/koneksi.php';
if (isset($_POST['ubah'])) {
    $kodebuku   = $_POST['kodebuku'];
    $judul      = $_POST['judul'];
    $kategori   = $_POST['kategori'];
    $pengarang  = $_POST['pengarang'];
    $penerbit   = $_POST['penerbit'];
    $tahun      = $_POST['tahun'];
    $sinopsis   = $_POST['sinopsis'];

    $sql = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', kategori='$kategori', pengarang='$pengarang', penerbit='$penerbit', tahun='$tahun', sinopsis='$sinopsis' WHERE kodebuku = '$kodebuku'");
    if ($sql) {
        echo "<script>alert('Data Berhasil Diubah');location.href='index.php?page=view-buku'</script>";
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
                <form action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <h4><?= $data['kodebuku']; ?></h4>
                            <input type="hidden" name="kodebuku" class="form-control" value="<?= $data['kodebuku']; ?>" placeholder="Masukkan Kode Buku">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="judul" class="form-control" value="<?= $data['judul']; ?>" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $data['kategori']; ?>" placeholder="Masukkan Kategori">
                        </div>
                        <div class="form-group">
                            <label>Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" value="<?= $data['pengarang']; ?>" placeholder="Masukkan Pengarang">
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" value="<?= $data['penerbit']; ?>" placeholder="Masukkan Penerbit">
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?= $data['tahun']; ?>" placeholder="Masukkan Tahun">
                        </div>
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <textarea type="text" name="sinopsis" class="form-control" placeholder="Masukkan Sinopsis"><?= $data['sinopsis']; ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="ubah" class="btn btn-primary"><i class="fas fa-save"></i> Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>