<?php
	//---------------------------------------
	require "../../../config/connection.php";
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	$nipnya = $_GET['nip'];
	$namanya = $_GET['nama'];
	$tempatnya = $_GET['tl'];
	$tanggalnya = $_GET['tgl'];
	$agamanya = $_GET['agama'];
	$alamatnya = $_GET['alamat'];
	$goldarnya = $_GET['gol'];
	$emailnya = $_GET['email'];
	$password = md5("pass12345word");
	//---------------------------------------
	$q_guru = "INSERT INTO guru VALUES('$nipnya','$namanya','$alamatnya','$goldarnya','$agamanya','default.png','$emailnya','$tempatnya','$tanggalnya','','$password',3, DEFAULT)";
	$eks_siswa = mysql_query($q_guru);
?>