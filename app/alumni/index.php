<?php require "model/siswa.php"; ?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Siswa | Website Jurusan</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		<link rel="shortcut icon" href="../../assets/img/logo128.png">
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../assets/css/animate.css">
		<link rel="stylesheet" href="../../assets/css/style.min.css">
		<link href="../../assets/css/theme/blue.css" rel="stylesheet"/>
		<link rel="stylesheet" href="../../assets/plugins/datatables/dataTables.bootstrap.css">
		<!-- ================== END BASE CSS STYLE ================== -->
		<link rel="stylesheet" href="../../assets/css/font.css">
		
		<!-- ================== BEGIN BASE JS ================== -->
		<script src="../../assets/js/jQuery-2.1.4.min.js"></script>
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
								<a href="javascript:;"></a>
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
		
		<script src="../../assets/js/bootstrap.min.js"></script>
		<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../assets/js/apps.min.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->
		<script src="../../assets/js/app.js"></script>
		
		<?php require 'controller/ctAlumni.php'; ?>
	</body>
</html>