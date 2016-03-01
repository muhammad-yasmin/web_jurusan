<html>
<head>
	<meta charset="UTF-8">
	<title><?= $_POST['printNis']." | ".$_POST['printNama']; ?></title>
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
		<?php echo "<img src='../../../assets/img/siswa/$foto' alt='Foto Siswa' width='160' height='160'/> "; ?>
	</div>
	<div class="qrnya">
		<?php echo $_POST['printQr']; ?>
	</div>

	<div class="container">
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><?php echo $_POST['printNis']; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $_POST['printNama']; ?></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $_POST['ttl']; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?php echo $_POST['agama']; ?></td>
			</tr>
			<tr>
				<td>Golongan Darah</td>
				<td>:</td>
				<td><?php echo $_POST['gol']; ?></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><?php echo $_POST['ayah']; ?></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><?php echo $_POST['ibu']; ?></td>
			</tr>
			<tr>
				<td>Tahun Pelajaran</td>
				<td>:</td>
				<td><?php echo $_POST['tapel']; ?></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><?php echo $_POST['kelas']; ?></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><?php echo $_POST['jurusan']; ?></td>
			</tr>
		</table>
	</div>
	
	<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function() {
			window.print();
		});
	</script>
</body>
</html>
