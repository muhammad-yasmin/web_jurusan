<?php 
	//---------------------------------------
	require '../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	if(!isset($_SESSION)){ session_start(); }
	if($_SESSION['statusLog'] == "sukses"){
		$statusLog = true;
		//---------------------------------
		if (!isset($_REQUEST["pilih"])) {
			$oyi = "";
		} else {
			$oyi = $_REQUEST["pilih"];
		}
	}else{
		$statusLog = false;
		header("location: ../../login/");
	}
	$us = $_SESSION['nis'];
	$q = mysql_query("SELECT
		siswa_tabel.nis,
		siswa_tabel.nama_siswa,
		siswa_tabel.jenis_kelamin,
		siswa_tabel.kelas,
		siswa_tabel.id_jurusan,
		jurusan.nama_jurusan,
		jurusan.id_jurusan
		FROM siswa_tabel
		INNER JOIN jurusan ON siswa_tabel.id_jurusan = jurusan.id_jurusan WHERE nis='$us'");
	$w = mysql_fetch_assoc($q);
?>