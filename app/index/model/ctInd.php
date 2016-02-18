<?php 
	//---------------------------------------
	require '../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	$q1 = mysql_query("SELECT COUNT(*) FROM siswa");
	// $q2 = mysql_query("SELECT COUNT(*) FROM alumni");
	$q3 = mysql_query("SELECT COUNT(*) FROM guru");
	$siswa = mysql_fetch_assoc($q1);
	// $alumni = mysql_fetch_assoc($q2);
	$guru = mysql_fetch_assoc($q3);
	//---------------------------------------
