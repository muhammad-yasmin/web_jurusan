<?php
	//---------------------------------------
	require "../../../config/connection.php";
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	$nisnya = $_GET['nis'];
	$namanya = $_GET['nama'];
	$tempatnya = $_GET['tl'];
	$tanggalnya = $_GET['tgl'];
	$agamanya = $_GET['agama'];
	$alamatnya = $_GET['alamat'];
	$thpelajarannya = $_GET['tapel'];
	$kelasnya = $_GET['kelas'];
	$jurusannya = $_GET['jurusan'];
	$goldarnya = $_GET['gol'];
	$ayahnya = $_GET['ayah'];
	$ibunya = $_GET['ibu'];
	$password = md5("pass12345word");
	//---------------------------------------
	$q_siswa = "INSERT INTO siswa_tabel VALUES(DEFAULT,'$nisnya','$namanya','','$kelasnya','$jurusannya','$password',3)";
	$eks_siswa = mysql_query($q_siswa);

	$q_bio = "INSERT INTO bio_siswa VALUES(DEFAULT,'$tempatnya','$tanggalnya','$alamatnya','default.png','','$agamanya','$goldarnya','$thpelajarannya')";
	$eks_bio = mysql_query($q_bio);
	$q_ayah = "INSERT INTO dt_ayah VALUES(DEFAULT,'$ayahnya','','','',DEFAULT,'','')";
	$eks_ayah = mysql_query($q_ayah);
	$q_ibu = "INSERT INTO dt_ibu VALUES(DEFAULT,'$ibunya','','','',DEFAULT,'','')";
	$eks_ibu = mysql_query($q_ibu);
?>