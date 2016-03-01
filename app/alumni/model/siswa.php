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
	$q = mysql_query("SELECT * FROM alumni WHERE nis = '$us'");
	$w = mysql_fetch_assoc($q);

?>