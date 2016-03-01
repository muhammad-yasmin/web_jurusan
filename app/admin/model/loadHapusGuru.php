<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$id_guru = $_POST['id'];
	$q_guru = "DELETE FROM guru WHERE id_guru = $id_guru";
	$eks_guru = mysql_query($q_guru);
?>