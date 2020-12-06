<?php if(!isset($_SESSION)){
    session_start();
}
?>
<br><br>
<section class="contact" style="margin-bottom:50px;">
<h2 style="text-align: center; margin-bottom:30px"> Nilai Akhir </h2>
<div class="container">
<table class="table table-striped table-bordered" id="list_mhs">
        <thread>
            <tr>
            <th><center>Soal Benar</center></th>
            <th><center>Soal Salah</center></th>
            <th><center>Soal Kosong</center></th>
            <th><center>Score</center></th>
            </tr>
        </thread>
        <tbody>
            <tr>
            <td><center> <?= $_SESSION['soalBenar']; ?></center></td>
            <td><center> <?= $_SESSION['soalSalah']; ?></center></td>
            <td><center> <?= $_SESSION['soalKosong']; ?></center></td>
            <td><center> <?= $_SESSION['score']; ?></center></td>
        </tbody>
</table><center>
<a href="<?php echo site_url().'siswa/home'?>" class="btn btn-primary">kembali</a></center>
</div>
</section>