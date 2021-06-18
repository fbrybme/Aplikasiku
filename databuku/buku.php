<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="m-0 font-weight-bold text-primary">List Data Buku</h6>
                <a href="index.php?page=in-buku" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0""> 
                    <thead style=" text-align: center;">
                    <tr>
                        <td>No.</td>
                        <td>KodeBuku</td>
                        <td>Judul</td>
                        <!-- <td>Kategori</td>
                        <td>Pengarang</td>
                        <td>Penerbit</td>
                        <td>Tahun</td> -->
                        <td>Tahun</td>
                        <td>Gambar</td>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody style=" text-align: center;">
                        <?php
                        include 'config/koneksi.php';
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($data = mysqli_fetch_array($sql)) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><a href="index.php?page=detail-buku&kodebuku=<?= $data['kodebuku']; ?>" class="btn btn-sm btn-primary shadow-sm" style="margin: 3px;"><?= $data['kodebuku']; ?></a></td>
                                <td><?= $data['judul']; ?></td>
                                <!-- <td><?= $data['kategori']; ?></td>
                                <td><?= $data['pengarang']; ?></td>
                                <td><?= $data['penerbit']; ?></td>
                                <td><?= $data['sinopsis']; ?></td> -->
                                <td><?= $data['tahun']; ?></td>
                                <td><?php if ($data['gambar'] == 'default.jpg') { ?>
                                        <img src="upload_file/default.jpg" width="100px">
                                    <?php } else { ?> <img src="upload_file/<?= $data['gambar']; ?>" width="100px">
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=add-gambar&kodebuku=<?= $data['kodebuku']; ?>" class="btn btn-sm btn-success shadow-sm" style="margin: 3px;"><i class="fas fa-image"></i></a><a href="index.php?page=up-buku&kodebuku=<?= $data['kodebuku']; ?>" class="btn btn-sm btn-warning shadow-sm" style="margin: 3px;"><i class="fas fa-edit"></i></a><a href="databuku/buku_del.php?kodebuku=<?= $data['kodebuku']; ?>" class="btn btn-sm btn-danger shadow-sm" style="margin: 3px;" onclick="return confirm('Yakin ingin hapus data ?');"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>