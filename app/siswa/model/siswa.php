<?php 
	//---------------------------------------
	require '../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	if (!isset($_SESSION)) {
		session_start();
	} else {}

	$nis_siswa = $_SESSION['nis'];
	$q_siswa = "SELECT * FROM siswa WHERE siswa.nis='$nis_siswa'";
	$eks_siswa = mysql_query($q_siswa);
	$row_siswa = mysql_num_rows($eks_siswa);
	if ($row_siswa == 1) {
		$w = mysql_fetch_assoc($eks_siswa);
		//-------------------------------
		if (!isset($_REQUEST["pilih"])) {
			$oyi = "";
		} else {
			$oyi = $_REQUEST["pilih"];
		}
	}