<?php 
	//---------------------------------------
	require '../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	if (!isset($_SESSION)) {
		session_start();
	} else {}

	$nip_guru = $_SESSION['nip_guru'];
	$q_guru = "SELECT * FROM guru WHERE guru.nip='$nip_guru'";
	$eks_guru = mysql_query($q_guru);
	$row_guru = mysql_num_rows($eks_guru);
	if ($row_guru == 1) {
		$w = mysql_fetch_assoc($eks_guru);
		//-------------------------------
		if (!isset($_REQUEST["pilih"])) {
			$oyi = "";
		} else {
			$oyi = $_REQUEST["pilih"];
		}
	}