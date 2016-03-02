<?php 
	if (!isset($_SESSION)) {
		session_start();
	} else {}

	//---------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//---------------------------------------

	$c = $_POST['nisn'];
	$d = $_POST['pass'];

	if ($c == '' || $d == '') {
		?>
		<script>
			alert("Maaf, username dan password ada yang kosong");
			window.location.replace('../');
		</script>
		<?php
	} else {
		$hasilLog = $con->cekLog($c,$d);

		if ($hasilLog == "admin") {
			$_SESSION['statusLog'] = "sukses";
			?>
			<script>
				// alert("Admin");
				window.location = "../../admin/view/";
			</script>
			<?php
		} else if ($hasilLog == "siswa") {
			$_SESSION['statusLog'] = "sukses";
			?>
			<script>
				// alert("Siswa");
				window.location = "../../siswa/index.php?pilih=dt_diri";
			</script>
			<?php
		} else if ($hasilLog == "guru") {
			$_SESSION['statusLog'] = "sukses";
			?>
			<script>
				// alert("Guru");
				window.location = "../../guru/index.php?pilih=dt_diri.php";
			</script>
			<?php
		} else if ($hasilLog == "alumni") {
			$_SESSION['statusLog'] = "sukses";
			?>
			<script>
				// alert("Alumni");
				window.location = "../../alumni/index.php?pilih=dt_diri";
			</script>
			<?php
		} else {
			
			?>
			<script>
				alert("Maaf");
				window.location.replace('../');
			</script>
			<?php
		}
	}