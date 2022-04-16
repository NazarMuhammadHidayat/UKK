

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta
                            <a href="<?php echo base_url('home/tambah_data_admin');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>

                    <tr>
                        <td>ID Admin</td>
                        <td>Nama Admin</td>
                        <td>Alamat Admin</td> 
                        <td>Kontak Admin</td>
                        <td colspan="2">Edit</td>
                    </tr>
                     </thead>
                     <tbody>

                        <?php foreach ($admin_pkl as $adm) : ?>

                        <tr>
                            <td><?php echo $adm['id_admin']; ?></td>
                            <td><?php echo $adm['nama_admin']; ?></td>
                            <td><?php echo $adm['alamat_admin']; ?></td>
                            <td><?php echo $adm['kontak_admin']; ?></td>.
                            <td>
                            <a href="<?php echo base_url()?>home/edit_data_admin/<?php echo $adm['id_admin']; ?>" class="badge badge-primary">Edit</a>
                            <a href="<?php echo base_url()?>home/hapus_data_admin/<?php echo $adm['id_admin']; ?>" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tbody>

                    </table>

                  </div>
               </div>
            </div>
         </div>
        