<html>
<head>
	<meta charset="UTF-8">
	<title>Info Guru | RPL</title>
	<link rel="shortcut icon" href="../../../assets/img/logo128.png">
	<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../../../assets/css/main.css">
	<link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../assets/plugins/datatables/dataTables.bootstrap.css">
	<style>
	td > a {
		cursor: pointer;
	}
	body {
		overflow-x: hidden;
	}
	</style>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			  	<a class="navbar-brand" href="#"><b>RPL | SMKN 5</b></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../../../">Kembali</a></li>
				</ul>
			</div><!--/.nav-collapse -->
	  </div>
	</div>
	<div id="headerwrapInfo">
		<div class="container">
			<div class="row introInfo centered">
				<div class="col-lg-12">
					<h1><b>Info Guru</b></h1>
					<h3>Jurusan Rekayasa Perangkat Lunak</h3>
				</div><!-- /col-lg-6 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-12">
				<h3>Dengan WEBSITE Ini kami memberikan fasilitas untuk memudahkan<br> aktifitas yang berhubungan dengan jurusan </h3>
			</div>
		</div><!-- /row -->
		<div class="panel panel-info" id="panelLoad">
			<div class="panel-heading">
				Daftar Guru
			</div>
			<div class="panel-body">
				<div id="listTabelSiswa"></div>
			</div>
		</div>
		<div class="panel panel-info" id="panelPrev" style="display:none;">
			<div class="panel-heading">
				Preview Guru
			</div>
			<div class="panel-body">
				<iframe src="#" id="iframenya" name="iframenya" style="display: none;" frameborder="0"></iframe>
				<form action="../model/printGuru.php" id="formnya" method="post" target="iframenya">
					<div id="prevSiswa"></div>
				</form>
				<div align="center" class="col-md-12">
					<button class="btn btn-primary btn-md" id="back">Kembali</button>
					<button type="submit" class="btn btn-warning btn-md" id="btnPrint">Print</button>
				</div>
			</div>
		</div>
	</div>

	<?php 
		require "../controller/ctInfoGuru.php";
	 ?>
<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../../assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../../assets/plugins/printPage/jquery.printPage.js"></script>
<script>
	$(document).ready(function() {
		$("#tblSiswa").dataTable();
	});
	$("#btnPrint").click(function(event) {
		$("#formnya").submit();
	});
</script>
</body>
</html>