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
			window.location.replace('../admin/');
		</script>
		<?php
	} else {
		$hasilLog = $con->cekLogAdmin($c,$d);

		if ($_SESSION['statusLog'] == true) {
			?>
			<script>
				window.location.replace("../view/");
			</script>
			<?php
		} else {
			?>
			<script>
				window.top.window.hasilLog('gakenek');
				window.location.replace('../admin/');
			</script>
			<?php
		}
	}
 ?>