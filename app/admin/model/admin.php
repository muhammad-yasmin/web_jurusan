<?php 
	//---------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------
	if (!isset($_SESSION)) {
		session_start();
	} else {}
	$nama = $_SESSION['nama_admin'];
	$q_admin = "SELECT * FROM admin WHERE nama='$nama'";
	$eks_admin = mysql_query($q_admin);
	$row_admin = mysql_num_rows($eks_admin);
	if ($row_admin == 1) {
		$w = mysql_fetch_assoc($eks_admin);
		//---------------------------------
		if (!isset($_REQUEST["pilih"])) {
			$oyi = "";
		} else {
			$oyi = $_REQUEST["pilih"];
		}
	}
