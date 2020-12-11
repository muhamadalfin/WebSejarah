<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data Siswa</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data Siswa <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <form action="" method="post">
                    <?php foreach($data_siswa as $siswa):?>
                        <?php foreach($data_pengguna as $pengguna):?>
                    <input type="hidden" name="siswaid" value="<?= $siswa->siswa_id;?>">
                    <input type="hidden" name="penggunaid" value="<?= $pengguna->pengguna_id;?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa->siswa_nama; ?>">
                            <?= form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $pengguna->pengguna_username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $pengguna->pengguna_email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="nis" class="form-control" id="nis" name="nis" value="<?= $siswa->siswa_nis; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <input type="jk" class="form-control" id="jk" name="jk" value="<?= $siswa->siswa_jenkel; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kls">Kelas</label>
                            <input type="kls" class="form-control" id="kls" name="kls" value="<?= $siswa->siswa_kelas_id; ?>">
                        </div>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                        <a href="<?= base_url(); ?>siswa/profil" class="btn btn-danger">kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>
<br>