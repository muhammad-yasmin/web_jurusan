<?php 
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();

	date_default_timezone_set('Asia/Jakarta');


	$namanya = $_POST['nama'];
	$emailnya = $_POST['email'];
	$isinya = $_POST['isi'];
	$tglnya = date('D M Y, H:i:s');
	$q = "INSERT INTO saran VALUES (DEFAULT,'$namanya','$emailnya','$isinya','$tglnya')";
	$eks = mysql_query($q);

 ?>