<?php 
	$id = $_SESSION['nis'];

	$show = mysql_query("SELECT * FROM dt_ibu INNER JOIN siswa WHERE dt_ibu.id_ibu = siswa.id_ibu && siswa.nis = '$id' ");
	$assoc = mysql_fetch_assoc($show);