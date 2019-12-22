<?php 
error_reporting(E_ALL ^  E_NOTICE);

session_start();
include"Koneksi.php";

$aksi = $_GET['NPM'];
$query = $konek->query("DELETE FROM tb_mahasiswa WHERE NPM ='".$aksi."'");
if (query) {
	echo "<script>alert ('Data Berhasil Terhapus');parent.location='home.php';</script>";
}
else 
	echo "<script>alert('Data Gagal Terhapus');</script>";
?>