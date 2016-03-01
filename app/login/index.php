<?php 
	
 ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Masuk | Website Jurusan</title>
	<link rel="shortcut icon" href="../../assets/img/logo128.png">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/css/style.min.css">
	<link rel="stylesheet" href="../../assets/css/font.css">
	<link rel="stylesheet" href="../../assets/css/main.css">
	<link href="../../assets/css/theme/blue.css" rel="stylesheet" id="theme" />
	<script src="../../assets/plugins/pace/pace.min.js"></script>
</head>
<style>
	body{
		font-family: Overpass;
	}
</style>
<body class="pace-top bg-white">
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<div id="page-container" class="fade">
		<div class="login login-with-news-feed">
			<div class="news-feed">
				<div class="news-image">
					<!-- <img src="../../assets/img/backgrounds/3.jpg" data-id="login-cover-image" alt="" /> -->
				</div>
				<div class="news-caption">
					<h4 class="caption-title">
						<i class="fa fa-headphones text-success"></i> +
						<i class="fa fa-code text-success"></i> + 
						<i class="fa fa-heart text-success"></i> = 
						<i class="fa fa-diamond text-success"></i>
					</h4>
				</div>
			</div>
			<div class="right-content">
				<div class="login-header">
					<div class="brand-align">
						Login
					</div>
				</div>
				<div class="login-content">
					<form action="controller/cekLogAdmin.php" method="POST" class="margin-bottom-0">
						<div class="form-group m-b-15">
							<input type="text" name="nisn" class="form-control input-lg" placeholder="Username" autocomplete="off" />
						</div>
						<div class="form-group m-b-15">
							<input type="password" name="pass" class="form-control input-lg" placeholder="Password" />
						</div>
						<div class="login-buttons">
							<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Masuk</button>
						</div>
						<hr />
						<p class="text-center text-inverse footer-margin">
							&copy; Copyright RPL SMKN 5 MALANG | 2016
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../assets/js/jQuery-2.1.4.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../../assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<?php 
		require "controller/ctLogAdmin.php";
	?>
</body>
</html>