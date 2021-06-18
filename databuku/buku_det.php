<?php
include 'config/koneksi.php';

$kodebuku = $_GET['kodebuku'];
$tampil   = mysqli_query($koneksi, "SELECT * FROM buku WHERE kodebuku = '$kodebuku'");
while ($data = mysqli_fetch_array($tampil)) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                    <a href="index.php?page=view-buku" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sign-in text-white-50"></i> Tampil Data</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
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
                                <label>Kategori</label>
                                <h4><?= $data['kategori']; ?></h4>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <h4><?= $data['pengarang']; ?></h4>
                            </div>
                            <div class="form-group">
                                <label>Penerbit</label>
                                <h4><?= $data['penerbit']; ?></h4>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <h4><?= $data['tahun']; ?></h4>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="location.href='index.php?page=view-buku'" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Gambar</label>
                        <h4><img src="upload_file/<?= $data['gambar']; ?>" class="img-rounded" width="150px" style="margin-bottom: 5px;"></h4>
                        <div class="form-group">
                            <label>Sinopsis</label>
                            <h4><?= $data['sinopsis']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>