<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_sis = $_POST['id'];
	$q_siswa_tabel = "DELETE FROM siswa_tabel WHERE id_siswa = $id_sis";
	$eks_siswa_tabel = mysql_query($q_siswa_tabel);
	$q_bio_siswa = "DELETE FROM bio_siswa WHERE id_bio_siswa = $id_sis";
	$eks_bio_siswa = mysql_query($q_bio_siswa);
	$q_ayah = "DELETE FROM dt_ayah WHERE id_ayah = $id_sis";
	$eks_ayah = mysql_query($q_ayah);
	$q_ibu = "DELETE FROM dt_ibu WHERE id_ibu = $id_sis";
	$eks_ibu = mysql_query($q_ibu);
?>