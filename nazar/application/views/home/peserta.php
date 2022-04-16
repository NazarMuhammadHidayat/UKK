

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta
                            <a href="<?php echo base_url('home/tambah_data');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>

                    <tr>
                        <td>NISN</td>
                        <td>Nama</td>
                        <td>Jenis Kelamin</td> 
                        <td>No HP</td>
                        <td>Alamat</td>
                        <td colspan="2">Edit</td>
                    </tr>
                     </thead>
                     <tbody>

                        <?php foreach ($peserta as $pst) : ?>

                        <tr>
                            <td><?php echo $pst['nisn']; ?></td>
                            <td><?php echo $pst['nama_peserta']; ?></td>
                            <td><?php echo $pst['jenis_kelamin']; ?></td>
                            <td><?php echo $pst['no_hp']; ?></td>
                            <td><?php echo $pst['alamat']; ?></td>
                            <td>
                            <a href="<?php echo base_url()?>home/edit_data/<?php echo $pst['nisn']; ?>" class="badge badge-primary">Edit</a>
                            <a href="<?php echo base_url()?>home/hapus_data/<?php echo $pst['nisn']; ?>" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tbody>

                    </table>

                  </div>
               </div>
            </div>
         </div>
        