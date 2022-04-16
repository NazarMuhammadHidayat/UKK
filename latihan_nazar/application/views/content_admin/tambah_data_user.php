<section class="page-section bg-ligh" id="login">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="<?= base_url('index.php/user/proses_tambah_data_user') ?>" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="email" id="email"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="password" id="password" cols="10" rows="6"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Hak Akses</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="hak_akses" id="hak_akses"></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="no_hp" id="no_hp"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Simpan">
                             
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>