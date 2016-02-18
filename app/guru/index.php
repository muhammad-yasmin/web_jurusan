<?php require "model/guru.php"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Guru | Website Jurusan</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		<link rel="shortcut icon" href="../../assets/img/logo128.png">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="../../assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
		<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="../../assets/css/animate.css" rel="stylesheet" />
		<link href="../../assets/css/style.min.css" rel="stylesheet" />
		<link href="../../assets/css/style-responsive.min.css" rel="stylesheet" />
		<link href="../../assets/css/theme/default.css" rel="stylesheet" id="theme" />
		<!-- ================== END BASE CSS STYLE ================== -->
		
		<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
		<link href="../../assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
		<link href="../../assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
		<link href="../../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
		<link href="../../assets/plugins/morris/morris.css" rel="stylesheet" />
		<link rel="stylesheet" href="../../assets/css/font.css">
		<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="../../assets/plugins/pace/pace.min.js"></script>
		<!-- ================== END BASE JS ================== -->
	</head>
	<body>
		<div id="page-loader" class="fade in"><span class="spinner"></span></div>
		<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<div id="header" class="header navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="" class="navbar-brand">Web Jurusan</a>
						<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown navbar-user">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo "<img src='../../assets/img/guru/$w[foto]' alt='' />" ?> 
								<span class="hidden-xs"><?php echo $w['nama']; ?></span>
							</a>
							<ul class="dropdown-menu animated fadeInLeft">
								<li class="arrow"></li>
								<li><a href="?pilih=dt_diri">Edit Profile</a></li>
								<li class="divider"></li>
								<li id="logout"><a href="#">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div id="sidebar" class="sidebar">
				<div data-scrollbar="true" data-height="100%">
					<ul class="nav">
						<li class="nav-profile">
							<div class="image">
								<a href="javascript:;"><?php echo "<img src='../../assets/img/guru/$w[foto]' alt='foto profil siswa' />" ?></a>
							</div>
							<div class="info">
								<?php echo $w['nama']; ?>
								<small><i class="fa fa-circle" style="color:green;"></i> Online</small>
							</div>
						</li>
					</ul>
					<!-- end sidebar user -->
					<?php require "view/listItem.php"; ?>
				</div>
			</div>
			<div class="sidebar-bg"></div>			
			<div id="content" class="content">
				<?php
					if ($oyi == "dt_diri") {
						require "view/dtSiswa.php";
					} elseif ($oyi == "dt_ayah") {
						require "view/dtAyah.php";
					} elseif ($oyi == "dt_ibu") {
						require "view/dtIbu.php";
					} else {
						require "view/404.php";
					}
				?>
			</div>
			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		</div>
		<!-- end page container -->
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="../../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
		<script src="../../assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
		<script src="../../assets/plugins/jquery-ui/jquery-ui-1.10.3.min.js"></script>
		<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<!-- ================== END BASE JS ================== -->
		<script src="../../assets/plugins/morris/raphael.min.js"></script>
		<script src="../../assets/plugins/morris/morris.js"></script>
		<!-- <script src="../../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
		<script src="../../assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="../../assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
		<script src="../../assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
		<script src="../../assets/plugins/gritter/js/jquery.gritter.js"></script>
		<script src="../../assets/js/dashboard-v2.min.js"></script>
		<script src="../../assets/js/apps.min.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->
		<?php require 'controller/ctGuru.php'; ?>
	</body>
</html>