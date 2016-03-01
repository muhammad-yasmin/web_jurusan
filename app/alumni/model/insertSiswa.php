<?php 
	require '../../../koneksi.php';
	$con = new koneksiDb;
	$con->kon();

	$ni = $_POST['nis'];
	$na = $_POST['nama'];
	$ala = $_POST['alamat'];
	$em = $_POST['email'];

	$q = mysql_query("INSERT INTO siswa_tabel VALUES('$ni','$na','$em','$ala',DEFAULT)");
?>
