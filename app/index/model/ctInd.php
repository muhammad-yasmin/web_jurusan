<?php 
	//---------------------------------------
	require 'config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	$q = mysql_query("SELECT * FROM jurusan WHERE aktif = 'on'");
	$jur = mysql_fetch_assoc($q);
	
	$q1 = mysql_query("SELECT COUNT(*) FROM siswa_tabel");
	$siswa = mysql_fetch_assoc($q1);
	$q2 = mysql_query("SELECT COUNT(*) FROM alumni");
	$alumni = mysql_fetch_assoc($q2);
	$q3 = mysql_query("SELECT COUNT(*) FROM guru");
	$guru = mysql_fetch_assoc($q3);
	$q4 = mysql_query("SELECT COUNT(*) FROM galeri");
	$foto = mysql_fetch_assoc($q4);