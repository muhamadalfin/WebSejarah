
<!--//END HEADER -->
<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Profil</h2>
                </div>
            </div>
        </div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                    <div class="card-body">
                    <?php foreach($data_siswa->result() as $sis):?>
                        <center><h5 class="card-title"><?= $sis->siswa_nama; ?></h5></center>
                        <?php foreach($data_pengguna->result() as $peng):?>
                        <p class="card=text">
                            <label for=""><b>Username :</b></label>
                            <?= $peng->pengguna_username; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Email :</b></label>
                            <?= $peng->pengguna_email; ?>
                        </p>
                        <?php endforeach; ?>
                        <p class="card=text">
                            <label for=""><b>NIS :</b></label>
                            <?= $sis->siswa_nis; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Jenis Kelamin :</b></label>
                            <?= $sis->siswa_jenkel; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Kelas :</b></label>
                            <?= $sis->siswa_kelas_id; ?>
                        </p>
                        <a href="<?= base_url();?>siswa/edit/edit/<?= $sis->siswa_nis;?>" class="btn btn-success">Edit</a>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
          
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->
