<?php 
error_reporting(E_ALL ^  E_NOTICE);
session_start();
include"Koneksi.php";
 
$aksi = $_GET['id'];
$query = $konek->query("DELETE FROM tb_user WHERE id ='".$aksi."'");
if (query) {
    echo "<script>alert ('Data Berhasil Terhapus');parent.location='daftar.php';</script>";
}
else 
    echo "<script>alert('Data Gagal Terhapus');</script>";
 ?>