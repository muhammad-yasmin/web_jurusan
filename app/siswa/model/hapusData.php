<?php 
	require '../../../koneksi.php';
	$con = new koneksiDb;
	$con->kon();

	$nomor_id = $_POST['id'];
	$q = mysql_query("DELETE FROM siswa WHERE id = $nomor_id");