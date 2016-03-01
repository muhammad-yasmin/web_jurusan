<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$idnya = $_GET['id'];
	$hasilnya = $_GET['hasil'];

	echo $q = "UPDATE galeri SET aktif = '$hasilnya' WHERE id = $idnya";
	// $eks = msql_query($q);
 ?>