<?php 
if (isset($_POST['submit'])){
  $NPM = $data['NPM'];
  $nama = $data['nama'];
  $jenis_kelamin = $data['jenis_kelamin'];
  $tempat_lahir = $data['tempat_lahir'];
  $tgl_lahir = $data['tgl_lahir'];
  $lulusan = $data['lulusan'];
  $asal_daerah = $data['asal_daerah'];
  $informasi = $data['informasi'];

  $query = $konek->query("update tb_mahasiswa set nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',lulusan='$lulusan',asal_daerah='$asal_daerah' WHERE NPM='$NPM'");
  if ($query) {
    echo "<script> alert('Data Berhasil Diubah');parent.location='home.php'; </script>";
}
else {
    echo "<script> alert('data_gagal_tersimpan'); </script>";
}
}
?>
