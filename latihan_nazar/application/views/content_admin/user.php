<section class="page-section bg-ligh" id="login">
<div class="container">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Jenis Kamar
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data User
                <a href="<?= base_url('index.php/user/tambah_data_user') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Id User</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Hak Akses</td>
                            <td>No Hp</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>Id User</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Hak Akses</td>
                            <td>No Hp</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_user as $tur) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tur["email"] ?></td>
                                <td><?php echo $tur["password"] ?></td>
                                <td><?php echo $tur["hak_akses"] ?></td>
                                <td><?php echo $tur["no_hp"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/user/update_data_user/') ?><?php echo $tur['id_user'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/user/hapus_data_user/') ?><?php echo $tur['id_user'] ?>" class="btn btn-danger btn-circle">
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