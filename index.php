<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/img/logo128.png">

	<title>RPL | SMKN 5 MALANG</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/font.css">
	<link rel="stylesheet" href="assets/css/animate.css">
  </head>
  <style>
	#infoSiswa, #infoGuru, #infoAlumni {
		cursor: pointer;
	}
  </style>

  <body>
	<!-- Fixed navbar -->
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
			<li><a href="#">Galeri</a></li>
			<li><a href="#">Menu</a></li>
			<li><a href="app/admin/">Login</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>

	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1><b>Selamat Datang</b></h1>
					<h3>di Website Rekayasa Perangkat Lunak</h3>
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

		<div class="row mt centered">
			<div class="col-lg-4" id="infoSiswa">
				<div class="icon">
					<i class="fa fa-4x fa-book"></i>
				</div>
				<h4>Siswa</h4>
				<p>Fitur untuk siswa yang berguna sebagai media input data pribadi siswa, orang tua / wali, khususnya siswa jurusan Rekayasa Perangkat Lunak.</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-4" id="infoGuru">
				<div class="icon">
					<i class="fa fa-4x fa-users"></i>
				</div>
				<h4>Guru</h4>
				<p>Fitur untuk guru yang berguna sebagai media input data pribadi guru, absensi, view nilai dan konfirmasi nilai siswa</p>
			</div><!--/col-lg-4 -->

			<div class="col-lg-4" id="infoAdmin">
				<div class="icon" id="infoAlumni">
					<i class="fa fa-4x fa-mortar-board"></i>
				</div>
				<h4>Alumni</h4>
				<p>Fitur untuk alumni yang menyediakan halaman untuk berbagi informasi dengan teman - teman lama</p>

			</div><!--/col-lg-4 -->
		</div><!-- /row -->
	</div><!-- /container -->
	<hr class="container">
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Tentang Kami</h1>
				<h3>Rekayasa Perangkat Lunak</h3>
			</div>
			<div class="col-lg-12">
				<h4>Kami adalah salah satu Program Keahlian yang terdapat di SMK Negeri 5 Malang<br>Rekayasa Perangkat Lunak di SMK Negeri 5 Malang memiliki kurang lebih 300 siswa baik kelas X, XI, dan XII</h4>
				<div class="skill">
					<div class="col-xs-4">
						<div class="skill-count" align="center">
							<i class="fa fa-4x fa-code"></i>
						</div>
						<h4>Website</h4>
						<p class="">
							Kami handal dalam pembangunan aplikasi berbasis Web, termasuk PHP, HTML, CSS, Javascript dan lainnya
						</p>
					</div>
					<div class="col-xs-4">
						<div class="skill-count" align="center">
							<i class="fa fa-4x fa-database"></i>
						</div>
						<h4>Basis Data</h4>
						<p class="">
							Kami handal dalam pengolahan Basis Data, diantaranya MySql, ORACLE Database System, dan lainnya
						</p>
					</div>
					<div class="col-xs-4">
						<div class="skill-count" align="center">
							<i class="fa fa-4x fa-tablet"></i>
						</div>
						<h4>Aplikasi Mobile</h4>
						<p class="">
							Kami handal dalam pembangunan aplikasi berbasis Mobile, dengan bahasa pemrograman HTML, Javascript, CSS.
						</p>
					</div>
				</div>
			</div>
		</div><!-- /row -->
	</div><!--/container -->
	<hr class="container">
	<?php require "app/index/model/ctInd.php"; ?>
	<div class="container">
		<div class="row mt centered">
			<div class="col-md-3">
				<div class="icon-stats">
					<i class="fa fa-4x fa-book"></i>
					<h3 class=""><?= $siswa['COUNT(*)']; ?></h3>
					<h4>Siswa</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="icon-stats">
					<i class="fa fa-4x fa-users"></i>
					<h3 class=""><?= $guru['COUNT(*)']; ?></h3>
					<h4>Guru</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="icon-stats">
					<i class="fa fa-4x fa-mortar-board"></i>
					<h3 class=""><?= $siswa['COUNT(*)']; ?></h3>
					<h4>Alumni</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="icon-stats">
					<i class="fa fa-4x fa-image"></i>
					<h3 class=""><?= $foto['COUNT(*)']; ?></h3>
					<h4>Foto</h4>
				</div>
			</div>
		</div>
	</div>
	<hr class="container">

	<div class="container centered">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Guru</h1>
			</div>
			<div id="owlGuru1" class="owl-carousel owl-theme col-md-6">
				<div class="item">
					<blockquote>"Guru sejati adalah guru yang mampu merubah Tembaga menjadi Emas"<br>
					<span>- Habib Novel bin Muhammad Alaydrus -</span></blockquote>
				</div>
				<div class="item">
					<blockquote>"Guru sejati adalah guru yang mampu merubah Tembaga menjadi Emas"<br>
					<span>- Habib Novel bin Muhammad Alaydrus -</span></blockquote>
				</div>
			</div>
		</div>
		<div id="owlGuru" class="owl-carousel owl-theme">
			<div class="item">
				<div class="row mt centered">
					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Michael Robson</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->

					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Pete Ford</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->

					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Angelica Finning</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->
				</div><!-- /row -->
			</div>
			<div class="item">
				<div class="row mt centered">
					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Michael Robson</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->

					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Pete Ford</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->

					<div class="col-lg-4">
						<img class="img-circle" src="assets/img/default.png" width="140" alt="">
						<h4>Angelica Finning</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						<p><i class="fa fa-send"></i> <i class="fa fa-phone"></i> <i class="fa fa-globe"></i></p>
					</div><!--/col-lg-4 -->
				</div><!-- /row -->
			</div><!-- /row -->
		</div>
	</div>
	<hr class="container">
	<div class="container centered">
		<div class="section-header">
			<h2 class="">Kritik dan Saran</h2>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div>
					<!--<h4>Kritik Saran</h4>-->
				</div>
				<form role="form" id="formnya" method="post">
					<div class="form">
						<div class="col-lg-12">
							<input type="text" id="namanya" placeholder="Nama Anda" autocomplete="off" class="form-control inputTeks">
						</div>
						<div class="col-lg-12">
							<input type="text" id="emailnya" placeholder="Email" autocomplete="off" class="form-control inputTeks">
						</div>
						<div class="col-md-12">
							<textarea id="isinya" class="form-control inputTeksArea" autocomplete="off" placeholder="Kritik / Saran"></textarea>
						</div>
					</div>
				</form>
				<div style="margin-left:450px;">
					<button id="btnnya" class="btn btn-primary btn-lg blue-btn">Kirim</button>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="headernya col-md-12">
					<h4>Kontak Kami</h4>
				</div>
				<div class="col-md-12">
					<div class="col-lg-12 kontaknya">
						<i class="fa fa-2x fa-map-marker"></i><span>Jalan Ikan Piranha Atas, Kecamatan Lowokwaru, Kota Malang</span>
					</div>
					<div class="col-lg-12 kontaknya">
						<i class="fa fa-2x fa-link"></i><span>www.smkn5malang.sch.id</span>
					</div>
					<div class="col-lg-12 kontaknya">
						<i class="fa fa-2x fa-phone"></i><span>(0341) 477087</span>
					</div>
					<div class="col-lg-12 kontaknya">
						<i class="fa fa-2x fa-envelope"></i><span>info@smkn5malang.sch.id</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="container">
	<footer>
		<div class="container" id="footer">
			<ul class=" centered social">
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-envelope"></i></a></li>
				<li><a href=""><i class="fa fa-instagram"></i></a></li>
				<li><a href=""><i class="fa fa-github"></i></a></li>
			</ul>
			<p class="centered">&copy; Copyright RPL SMKN 5 MALANG</p>
		</div><!-- /container -->
	</footer>
	
	<?php 
		require "app/index/controller/ctrIndex.php";
		require "app/index/controller/modal.php";
	?>
	
	<script src="assets/js/jQuery-2.1.4.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script>
	$(document).ready(function(){
		$("body").addClass('animate animate-fade-in');
	});	
	</script>
  </body>
</html>