<?php 
	require('../../../config/connection.php');
	$con = new clsDb;
	$con->konek();
	$q = mysql_query("SELECT * FROM galeri WHERE aktif = 'on'");
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Galeri | SMK 5</title>
	<link rel="shortcut icon" href="../../../assets/img/logo128.png">
	<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../../../assets/css/main.css">
	<link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../../assets/galeri/css/component.css">
	<script src="../../../assets/galeri/js/modernizr.custom.js"></script>
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
			  	<a class="navbar-brand" href="#"><b>Galeri | SMKN 5 Malang</b></a>
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
					<h1><b>Galeri</b></h1>
					<h3>SMK Negeri 5 Malang</h3>
				</div><!-- /col-lg-6 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-12">
				<h3>Menyediakan foto-foto pilihan dari Sekolah kami<br>SMK Negeri 5 Malang</h3>
			</div>
		</div><!-- /row -->
	</div>
	<div id="grid-gallery" class="grid-gallery">
		<section class="grid-wrap">
			<ul class="grid">
				<li class="grid-sizer"></li><!-- for Masonry column width -->
				<?php 
				while ($jur = mysql_fetch_assoc($q)) {
					?>
					<li>
						<figure>
							<?php echo "<img src='../../../assets/img/galeri/$jur[gambar]' alt='$jur[gambar]' width='500'height='250' class='img'"; ?>
							<figcaption><h3><?= $jur['capt']; ?></h3><p><?= $jur['deskripsi']; ?></p></figcaption>
						</figure>
					</li>
					<?php
				}
				 ?>
			</ul>
		</section><!-- // grid-wrap -->
		<section class="slideshow">
			<ul>
				<?php 
				while ($jur_prev = mysql_fetch_assoc($q)) {
					?>
					<li>
						<figure>
							<figcaption>
								<h3><?= $jur_prev['capt']; ?></h3>
								<p><?= $jur_prev['deskripsi']; ?></p>
							</figcaption>
							<?php echo "<img src='../../../assets/img/galeri/$jur_prev[gambar]' alt='$jur_prev[gambar]' width='500'height='250' class='img'"; ?>
						</figure>
					</li>
					<?php
				}
			 	?>
			</ul>
			<nav>
				<span class="icon nav-prev"></span>
				<span class="icon nav-next"></span>
				<span class="icon nav-close"></span>
			</nav>
			<div class="info-keys icon">Navigate with arrow keys</div>
		</section><!-- // slideshow -->
	</div><!-- // grid-gallery -->

<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/galeri/js/imagesloaded.pkgd.min.js"></script>
<script src="../../../assets/galeri/js/masonry.pkgd.min.js"></script>
<script src="../../../assets/galeri/js/classie.js"></script>
<script src="../../../assets/galeri/js/cbpGridGallery.js"></script>
<script>
	
</script>
</body>
</html>