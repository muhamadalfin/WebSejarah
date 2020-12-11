
<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px">Nilai Siswa </h1>
    </div>
        <table class="table table-striped table-bordered" id="list_mhs">
        <thread>
            <tr>
            <th><center>#</center></th>
            <th><center>Pelajaran</center></th>
            <th><center>Token</center></th>
            <th><center>Waktu</center></th>
            <th><center>Nilai</center></th>
            </tr>
        </thread>
        <tbody>
            <?php
                $no=1;
                foreach ($nilai_siswa->result() as $nilai){?>
                <tr>
                    <td><center> <?= $no++; ?></center></td>
                    <td><center> <?= $nilai->materi; ?></center></td>
                    <td><center> <?= $nilai->token; ?></center></td>
                    <td><center> <?= $nilai->waktu; ?></center></td>
                    <td><center> <?= $nilai->nilai; ?></center></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
</div>
<br><br><br><br><br><br>