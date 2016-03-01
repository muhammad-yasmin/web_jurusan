<html>
<head>
	<meta charset="UTF-8">
	<style type="text/css">
	.container {
		padding-right: 15px;
		padding-left: 50px;
		margin-right: 115px;
		margin-left: auto;
	}
	body {
		font-family: Arial;
	}
	table {
		padding-top: 10px;
		float: left;
	}
	table > tr {
		text-align: left;
	}
	tr > td {
		height: 30px;

	}
	.row {
		margin-right: -15px;
		margin-left: -15px;
	}
	.gambarnya {
		padding-left: 45px;
		margin: 10px;
		float: left;
	}
	.qrnya {
		float: right;
		padding-right: 45px;
	}
	</style>
</head>
<body>
	<?php 
	$foto = $_POST['printFoto'];
	 ?>
	<div class="gambarnya">
		<?php echo "<img src='../../../assets/img/guru/$foto' alt='Foto Siswa' width='160' height='160'/> "; ?>
	</div>
	<div class="qrnya">
		<?php echo $_POST['printQr']; ?>
	</div>

	<div class="container">
		<table>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><?php echo $_POST['printNip']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $_POST['printNama']; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $_POST['printTanggal']; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?php echo $_POST['printAgama']; ?></td>
			</tr>
			<tr>
				<td>Golongan Darah</td>
				<td>:</td>
				<td><?php echo $_POST['printGol']; ?></td>
			</tr>
	<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function() {
			window.print();
		});
	</script>
</body>
</html>
