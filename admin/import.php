<?php 
include_once 'vendor/phpexcel/classes/PHPExcel.php';
$excel = 'tb_mahasiswa.xlsx';

if (!$excel) {
	echo "gagal";
	# code...
} else {
	$tipefile = PHPExcel_IOFactory::identify($excel);
	$bacafile = PHPExcel_IOFactory::createReader($tipefile);
	$phpexcel = $bacafile->load($excel);
	$sheet = $phpexcel->getSheet(0);
	$baris = $sheet->getHighestRow();
	$kolom = $sheet->getHighestColumn();
	// var_dump($kolom);
	// die();
	for ($row=2; $row <= $baris ; $row++) {
		$barisdata = $sheet->rangeToArray('A' . $row . ':' . $kolom . $row, NULL, TRUE, FALSE);
		$npm			= $barisdata[0][0];
		$nama			= $barisdata[0][1];
		$jenis_kelamin	= $barisdata[0][2];
		$tempat_lahir	= $barisdata[0][3];
		$tgl_lahir		= strtotime(PHPExcel_Style_NumberFormat::toFormattedString($barisdata[0][4], 'YYYY-MM-DD'));
		$lulusan		= $barisdata[0][5];
		$asal_daerah	= $barisdata[0][6];
		$informasi		= $barisdata[0][7];

		$tgljadi = date("Y-m-d", $tgl_lahir);

		include_once 'koneksi.php';
		$sql = "INSERT INTO tb_mahasiswa (NPM,nama,jenis_kelamin,tempat_lahir,tgl_lahir,lulusan,asal_daerah,informasi) values ('$npm','$nama','$jenis_kelamin','$tempat_lahir','$tgljadi','$lulusan','$asal_daerah','$informasi')"; 
		$query = mysqli_query($konek,$sql);

		if ($query) {
			echo "<script>alert('Data Tersimpan');parent.location='home.php';</script>";
		}
		else {
			echo "<script>alert('Data Gagal Tersimpan');</script>";

		}
	} 
}

?>