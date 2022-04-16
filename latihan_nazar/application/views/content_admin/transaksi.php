<section class="page-section bg-ligh" id="login">
<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Transaksi
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data Transaksi
                <a href="<?= base_url('index.php/transaksi/tambah_data_transaksi') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Transaksi</th>
                            <th>Jenis Id</th>
                            <th>Atas Nama</th>
                            <th>Tanggal</th>
                            <th>Waktu Sewa</th>
                            <th>Kamar Id</th>
                            <th>Jenis Pembayaran</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id Transaksi</th>
                            <th>Jenis Id</th>
                            <th>Atas Nama</th>
                            <th>Tanggal</th>
                            <th>Waktu Sewa</th>
                            <th>Kamar Id</th>
                            <th>Jenis Pembayaran</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_transaksi as $trs) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $trs["jenis_id"] ?></td>
                                <td><?php echo $trs["atas_nama"] ?></td>
                                <td><?php echo $trs["tanggal"] ?></td>
                                <td><?php echo $trs["waktu_sewa"] ?></td>
                                <td><?php echo $trs["kamar_id"] ?></td>
                                <td><?php echo $trs["jenis_pembayaran"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/transaksi/update_data_transaksi/') ?><?php echo $trs['id_transaksi'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/transaksi/hapus_data_transaksi/') ?><?php echo $trs['id_transaksi'] ?>" class="btn btn-danger btn-circle">
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