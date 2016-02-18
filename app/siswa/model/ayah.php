<?php 
	$id = $_SESSION['nis'];

	$show = mysql_query("SELECT * FROM dt_ayah INNER JOIN siswa WHERE dt_ayah.id_ayah = siswa.id_ayah && siswa.nis = '$id' ");
	$assoc = mysql_fetch_assoc($show);