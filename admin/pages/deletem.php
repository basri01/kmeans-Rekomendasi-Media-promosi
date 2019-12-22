<?php 
error_reporting(E_ALL ^  E_NOTICE);
session_start();
include"Koneksi.php";

$aksi = $_GET['Kd_media'];
$query = $konek->query("DELETE FROM kategori_media WHERE Kd_media ='".$aksi."'");
if (query) {
	echo "<script>alert ('Data Berhasil Terhapus');parent.location='kategori_media.php';</script>";
}
else 
	echo "<script>alert('Data Gagal Terhapus');</script>";
?>