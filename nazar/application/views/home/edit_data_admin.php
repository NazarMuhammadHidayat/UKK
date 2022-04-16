<div class="container fluid">

<h3>Halaman Tambah Data</h3>
<hr>
<br>

<form method="post" action="<?php echo base_url('home/proses_edit_data_admin/') ?>">

<input type="hidden" name="id_admin" value="<?php echo $admin_pkl['id_admin']; ?>">


  <div class="row mb-3">
    <label for="nama_admin" class="col-sm-2 col-form-label">Nama Admin</label>
    <div class="col-sm-5">
      <input type="tex" class="form-control" name="nama_admin"
      required="" value="<?php echo $admin_pkl['nama_admin'];?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="alamat_admin" class="col-sm-2 col-form-label">Alamat Admin</label>
    <div class="col-sm-5">
      <input type="tex" class="form-control" name="alamat_admin"
      required="" value="<?php echo $admin_pkl['alamat_admin'];?>">
    </div>
  </div>


<div class="row mb-3">
    <label for="kontak_admin" class="col-sm-2 col-form-label">Kontak Admin</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="kontak_admin"
      required="" value="<?php echo $admin_pkl['kontak_admin'];?>">
    </div>
  </div>

    <div class="col-sm-5">
        <button type ="submit" class="btn btn-primary">Selesai</button>
        <button type ="reset" class="btn btn-danger">Reset</button>
      
    </div>
  </div
  >
</from>
</div>