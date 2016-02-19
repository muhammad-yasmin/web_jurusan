<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_sis = $_POST['id'];
	$q_siswa_tabel = mysql_query("DELETE FROM siswa_tabel WHERE id_siswa = $id_sis");
	$q_bio_siswa = mysql_query("DELETE FROM bio_siswa WHERE id_bio_siswa = $id_sis");
	$q_ayah = mysql_query("DELETE FROM dt_ayah WHERE id_ayah = $id_sis");
	$q_ibu = mysql_query("DELETE FROM dt_ibu WHERE id_ibu = $id_sis");
?>