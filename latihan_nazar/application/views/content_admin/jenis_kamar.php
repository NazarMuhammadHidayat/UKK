<section class="page-section bg-ligh" id="login">
<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Jenis Kamar
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data Jenis Kamar
                <a href="<?= base_url('index.php/j_kamar/tambah_data_jenis') ?>">
                    <button class="btn btn-info">Tambah Data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Id Jenis</td>
                            <td>Nama Jenis Kamar</td>
                            <td>Keterangan</td>
                            <td>Harga</td>
                            <td>Foto</td>   
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>Id Jenis</td>
                            <td>Nama Jenis Kamar</td>
                            <td>Keterangan</td>
                            <td>Harga</td>
                            <td>Foto</td>
                            <td>Aksi</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_jenis_kamar as $tjk) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tjk["nama_jenis_kamar"] ?></td>
                                <td><?php echo $tjk["keterangan"] ?></td>
                                <td><?php echo $tjk["harga"] ?></td>
                                <td><?php echo $tjk["foto"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/j_kamar/update_data_jk/') ?><?php echo $tjk['id_jenis'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/j_kamar/hapus_data_jk/') ?><?php echo $tjk['id_jenis'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>