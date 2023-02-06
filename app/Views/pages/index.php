<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Kontrakan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Aplikasi Kontrakan</h1>

        <!-- Awal Card Form -->
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Form Input Data Kontrakan
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="card-body">
                        <div class="form-group">
                            <label>No Rumah</label>
                            <input type="text" name="tno_rumah" value="<?= @$vno_rumah ?>" class="form-control" placeholder="Input No Rumah" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Penghuni</label>
                            <input type="text" name="tpenghuni" value="<?= @$vpenghuni ?>" class="form-control" placeholder="Input Penghuni" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="tpekerjaan" value="<?= @$vpekerjaan ?>" class="form-control" placeholder="Input Pekerjaan" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>No KK</label>
                            <input type="text" name="tno_kk" value="<?= @$vno_kk ?>" class="form-control" placeholder="Input No KK" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="ttelepon" value="<?= @$vtelepon ?>" class="form-control" placeholder="Input Telepon" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="text" name="ttanggal_masuk" value="<?= @$vtanggal_masuk ?>" class="form-control" placeholder="Input Tanggal Masuk" required>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Lama Sewa</label>
                            <input type="text" name="tlama_sewa" value="<?= @$vlama_sewa ?>" class="form-control" placeholder="Input Lama Sewa" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
            </div>
            </form>
        </div>
        <!-- Akhir Card Form -->

        <!-- Awal Card Table -->
        <div class="card mt-3">
            <div class="card-header bg-success text-white">
                Daftar Kontrakan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>No Rumah</th>
                        <th>Penghuni</th>
                        <th>Pekerjaan</th>
                        <th>No KK</th>
                        <th>Telepon</th>
                        <th>Tanggal Masuk</th>
                        <th>Lama Sewa</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from kontrakan order by id desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['no_rumah'] ?></td>
                            <td><?= $data['penghuni'] ?></td>
                            <td><?= $data['pekerjaan'] ?></td>
                            <td><?= $data['no_kk'] ?></td>
                            <td><?= $data['telepon'] ?></td>
                            <td><?= $data['tanggal_masuk'] ?></td>
                            <td><?= $data['lama_sewa'] ?></td>
                            <td>
                                <a href="index.php?hal=edit&id=<?= $data['id'] ?>" class="btn btn-warning"> Edit </a>
                                <a href="index.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    <!-- Penutup perulangan While -->
                </table>
            </div>
            <!-- Akhir Card Table -->

        </div>
        <script type="text/javascript" src=" <?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>