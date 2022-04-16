<section class="page-section bg-ligh" id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 tex-center">
                <h2 class="section-heading text-upercase">Profile</h2>
                <h3 class="section-subheading text-muted">Selamat datang Di Hotel Nazgaming</h3>

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['email']?></td>
                        </tr>
                        <tr>
                            <td class="text-start">Nama Lengkap</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <td class="text-start">No HP</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['no_hp']?></td>
                        </tr>
                    </tbody>
                </table>
               <b>Klik</b> <a href="<?= base_url('index.php/profile/update_profile') ?>">Disini</a><b>untuk update profile anda</b><br>
               <b>Klik</b> <a href="<?= base_url('index.php/profile/ganti_password') ?>">Disini</a> <b>untuk mengganti passwor anda</b><br>
            </div>
        </div>
    </div>
</section>