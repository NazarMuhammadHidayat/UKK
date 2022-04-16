<section class="page-section bg-ligh" id="login">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Kamar</h4>
                        <br>
                        <form action="<?= base_url('index.php/kamar/proses_update_data_kamar') ?>" method="POST">
                            <input type="hidden" name="id_kamar" id="id_kamar" value="<?php echo $tbl_kamar['id_kamar'] ?>">
                            <table class="table">
                                <tr>
                                    <td>Nomor Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nomor_kamar" required="" value="<?php echo $tbl_kamar['nomor_kamar'] ?>"></td>
                                </tr>

                                <tr>
                                    <td>Id Jenis</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_jenis" required="" cols="10" rows="6"><?php echo  $tbl_kamar['id_jenis'] ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Keterangan Kamar</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="ket_kamar" required="" value="<?php echo $tbl_kamar['ket_kamar'] ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form><div class="container-fluid">
</section>
  