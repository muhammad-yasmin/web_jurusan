<?php 
	if (!isset($_SESSION)) {
		session_start();
	} else {}

	//---------------------------------------
	require '../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------

	$u = $_POST['nisn'];
	$p = $_POST['pass'];

	if ($u == '' || $p == '') {
		?>
		<script>window.top.window.validasi();</script>
		<?php
	} else {
		$hasilLog = $con->cekLogGuru($u,$p);

		if ($hasilLog == true) {
			$_SESSION['statusLog'] = true;
			require 'controller/ctLogGuru.php';
			?>
			<script>window.top.window.hasilLog('berhasil');</script>
			<?php
		} else {
			$_SESSION['statusLog'] = false;
			require 'controller/ctLogGuru.php';
			?>
			<script>window.top.window.hasilLog('gakenek');</script>
			<?php
		}
	}
 ?>