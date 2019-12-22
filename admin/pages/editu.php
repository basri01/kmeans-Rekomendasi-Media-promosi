

 <form role="form" action="edit.php" method="POST">
    <div class="form-group">
        <label>Nomor Pokok Mahasiswa</label>
        <input class="form-control" placeholder="NPM" name="NPM" id="NPM">
        <p class="help-block">Masukkan NPM</p>
    </div>
    <div class="form-group">
        <label>Masukkan Nama</label>
        <input class="form-control" placeholder="Nama" name="nama" id="nama">
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" type="date" placeholder="Enter text" name="tgl_lahir" id="tgl_lahir">
    </div>
    <div class="form-group">
        <label for="lulusan">Lulusan</label>
        <select id="lulusan" name="lulusan" class="form-control">
            <option>SMA</option>
            <option>SMK</option>
            <option>MA</option>
        </select>

    </div>
    <div class="form-group">
        <label for="asal_derah">Asal Daerah</label>
        <select class="form-control" placeholder="Provensi Sulawesi Selatan-Barat" name="asal_daerah" id="asal_daerah">
            <option>Selayar</option>
            <option>Bulukumba</option>
            <option>Bantaeng</option>
            <option>Jeneponto</option>
            <option>Takalar</option>
            <option>Gowa</option>
            <option>Makassar</option>
            <option>Maros</option>
            <option>Pangkep</option>
            <option>Barru</option>
            <option>Pare-Pare</option>
            <option>Pinrang</option>
            <option>Soppeng</option>
            <option>Wajo</option>
            <option>Bone</option>
            <option>Sinjai</option>
            <option>Sidrap</option>
            <option>Enrekang</option>
            <option>Toraja</option>
            <option>Belpoa</option>
            <option>Palopo</option>
            <option>Masamba</option>
            <option>Mamasa</option>
            <option>Polewali Mandar</option>
            <option>Majene</option>
            <option>Mamuju</option>
            <option>Mamuju Tengah</option>
            <option>Mamuju Utara</option>
        </select> 
    </div>
    <div class="form-group">
        <label>Informasi Masuk STMIK</label>
        <select class="form-control" placeholder="Enter text" name="informasi" id="informasi">
            <option>Media Cetak</option>
            <option>Media Online</option>
            <option>Media Elektronik</option>
            <option>Personal Salling</option>
            <option>Pendekatan</option>
        </select>
    </div>
    <div class="row">
        <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
                <button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="fa fa-hand-o-right"></i>&nbsp;Kirim</a></button>
                <a type="botton" href="home.php" class="btn btn-primary"><i class="fa fa-hand-o-left"></i>&nbsp;Kembali</a>
            </div>
        </div>
    </div>
</div>
</form>

<?php 

if (isset($_POST['submit'])) {
    $NPM=$_POST['NPM'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $lulusan=$_POST['lulusan'];
    $asal_daerah=$_POST['asal_daerah'];
    $informasi=$_POST['informasi'];



    $query = $konek-> query("update tb_mahasiswa set NPM='$NPM',nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',lulusan='$lulusan',asal_daerah='$asal_daerah'WHERE informasi='$informasi'");
    if ($query) {
        echo "<script>alert('Data Berhasil Di ubah');parent.location='home.php';</script>";
    }
    else {
        echo "<script>alert('Data Gagal Tersimpan');</script>";

    }
}

?>
