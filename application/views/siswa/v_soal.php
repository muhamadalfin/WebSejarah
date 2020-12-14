<?php
// koneksi ke mysqli
if(!isset($_SESSION)){
  session_start();
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_websekolah";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
// Check Token
if(isset($_POST['submit'])){
  $token = $_POST["token"];
  $_SESSION['token'] = $token;
  $query = mysqli_query($koneksi, "select * from tbl_nilai WHERE token = '$token'");
  //$cektoken = mysqli_fetch_array($query);
  while($row =mysqli_fetch_array($query))
  {
      if($row['token'] != NULL ){
          echo "<script>alert('Anda telah mengerjakan soal');document.location='token'</script>";
      }
  }
  //var_dump($cektoken);
  
  
}     

    echo "<br><h3><center>Soal Historia</center></h3>
            <b>Pilihan Ganda Sejarah</b>";
    echo "<br><br>";
    echo "<div style='width:100%; border: 1px solid #EBEBEB; overflow:scroll;height:700px;'>";
    echo '<table width="100%" border="0">';
    
        $hasil=mysqli_query($koneksi, "select * from tbl_soal WHERE token = '$token' ORDER BY RAND ()");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $materi=$row["materi"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            
            ?>
            <form name="form1" method="post" action="<?php echo site_url().'siswa/jawab'?>">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="materi" value=<?php echo $materi; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <tr>
                  <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                  <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
            </tr>
            <?php
                if (!empty($row["gambar"])) {
                    echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
                }
            ?>
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                <?php echo "$pilihan_d";?></font> </td>
            </tr>
            
        <?php
        }
        ?>
            <tr>
                <td>&nbsp;</td>
                  <td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
            </table>
</form>
        </p>
</div>
<br>