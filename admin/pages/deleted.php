<?php 
error_reporting(E_ALL ^  E_NOTICE);
session_start();
include"Koneksi.php";
 
$aksi = $_GET['Kd_daerah'];
$query = $konek->query("DELETE FROM data_daerah WHERE Kd_daerah ='".$aksi."'");
if (query) {
    echo "<script>alert ('Data Berhasil Terhapus');parent.location='data_daerah.php';</script>";
}
else 
    echo "<script>alert('Data Gagal Terhapus');</script>";
 ?>