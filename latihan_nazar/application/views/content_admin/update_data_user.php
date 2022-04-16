<section class="page-section bg-ligh" id="login">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <form action="<?= base_url('index.php/user/proses_update_data_user') ?>" method="POST">
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $tbl_user['id_user'] ?>">
                            <table class="table">
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="email" required="" value="<?php echo $tbl_user['email'] ?>"></td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="password" required="" cols="10" rows="6"><?php echo  $tbl_user['password'] ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Hak Akses</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="hak_akses" required="" value="<?php echo $tbl_user['hak_akses'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_hp" required="" value="<?php echo $tbl_user['no_hp'] ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form><div class="container-fluid">
</section>
  