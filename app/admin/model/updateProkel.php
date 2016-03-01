<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_prokel = $_POST['id'];
	$namanya = $_POST['nama'];	
	$inisialnya = strtoupper($_POST['inisial']);
	$deskripsinya = $_POST['deskripsi'];
	$updatenya = $_POST['update'];
	$q_reset = "UPDATE jurusan SET aktif = 'off' WHERE aktif = 'on'";
	$eks_reset = mysql_query($q_reset);
	$q_prokel = "UPDATE jurusan SET aktif = '$updatenya', nama_jurusan = '$namanya', inisial = '$inisialnya', deskripsi = '$deskripsinya' WHERE id_jurusan = $id_prokel";
	$eks_prokel = mysql_query($q_prokel);
 ?>