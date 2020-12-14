<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Isi Biodata Siswa</div>
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
                    <form action="<?php echo site_url().'siswa/biodata/submit'?>" method="post">
                        <?php foreach($data_pengguna->result() as $pengguna):?>
                    <input type="hidden" name="penggunaid" value="<?= $pengguna->pengguna_id;?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna->pengguna_nama; ?>">
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
                            <input type="text" class="form-control" id="nis" name="nis" value="<?= $pengguna->nis_nip_nik; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nis">Jenis Kelamin</label>
                        </div>
                        <div class="form-check form-check-inline" required>
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
                            <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div><br>
                        <div class="form-group">
                            <label for="nis">Kelas</label>
                        </div>
                        <div class="form-check form-check-inline" required>
                        <input class="form-check-input" type="radio" name="kls" id="inlineRadio1" value="10">
                            <label class="form-check-label" for="inlineRadio1">10</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="kls" id="inlineRadio2" value="11">
                            <label class="form-check-label" for="inlineRadio2">11</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="kls" id="inlineRadio2" value="12">
                            <label class="form-check-label" for="inlineRadio2">12</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group">
                        </div>
                        <?php endforeach; ?>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
        </div>
    </div>
</div>
<br>