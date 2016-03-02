<?php 
require '../model/admin.php';
if(!isset($_SESSION)){ session_start(); }
	if($_SESSION['statusLog'] == "sukses"){
		$statusLog = true;
		//---------------------------------
		if (!isset($_REQUEST["pilih"])) {
			$oyi = "";
		} else {
			$oyi = $_REQUEST["pilih"];
		}
	}else{
		$statusLog = false;
		header("location: ../../login/");
	}
$us = $_SESSION['user'];
$q = mysql_query("SELECT * FROM admin WHERE username = '$us'");
$w = mysql_fetch_assoc($q);
 ?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CPanel | Website Jurusan</title>
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
		<link rel="shortcut icon" href="../../../assets/img/logo128.png">
		<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../../assets/css/animate.css">
		<link rel="stylesheet" href="../../../assets/css/style.min.css">
		<link href="../../../assets/css/theme/blue.css" rel="stylesheet"/>
		<link rel="stylesheet" href="../../../assets/plugins/datatables/dataTables.bootstrap.css">
		<!-- ================== END BASE CSS STYLE ================== -->
		<link rel="stylesheet" href="../../../assets/css/font.css">
		<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
		<script src="../../../assets/plugins/pace/pace.min.js"></script>
		<!-- ================== END BASE JS ================== -->
		<style>
			body{
				overflow-x: hidden;
				font-family: Overpass;
			}
			#btnBackFromPrev, #btnBackFromUpdt, #btnAdd, #btnUpdt, #btnBackFromAdd {
				margin: 55px 0 0 0;
			}
			td > a {
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<!-- <div id="page-loader" class="fade in"><span class="spinner"></span></div> -->
		<div id="page-container" class="fade page-sidebar-fixed page-header-fixed screen">
			<div id="header" class="header navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="#" class="navbar-brand">CPanel | Web Jurusan</a><button type="button" class="navbar-toggle" data-click="sidebar-toggled">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown navbar-user">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo "<img src='../../../assets/img/admin/$w[foto]' alt='' />" ?> 
								<span class="hidden-xs"><?php echo $w['nama']; ?></span>
							</a>
							<ul class="dropdown-menu animated fadeInLeft">
								<li class="arrow"></li>
								<li><a href="#">Edit Profile</a></li>
								<li class="divider"></li>
								<li><a id="logout">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="sidebar" class="sidebar">
				<div data-scrollbar="true" data-height="100%">
					<ul class="nav nav-custom">
						<li class="nav-profile">
							<div class="image">
								<a href="javascript:;"><?php echo "<img src='../../../assets/img/admin/$w[foto]' alt='' />" ?></a>
							</div>
							<div class="info">
								<?php echo $w['nama']; ?>
								<small><i class="fa fa-circle-o" style="color:green;"></i> Online</small>
							</div>
						</li>
					</ul>
					<!-- end sidebar user -->
					<?php require 'formHelper/listItem.php'; ?>
				</div>
			</div>
			<div class="sidebar-bg"></div>
				<div id="content" class="content">
					<?php
						extract($_GET);
						if(empty($_GET['page'])){
							require "dashboard.php";
						} else if($_GET['page']=='produk'){
							include "produk.php";
						} else if($_GET['page']=='galeri'){
							include "galeri.php";
						} else if($_GET['page']=='program_keahlian'){
							include "prokel.php";
						} else if($_GET['page']=='siswa'){
							include "siswa.php";
						} else if($_GET['page']=='guru'){
							include "guru.php";
						} else if($_GET['page']=='alumni'){
							include "view/alumni.php";
						} else if($_GET['page']=='kantor'){
							include "view/kantor.php";
						} else if($_GET['page']=='admin'){
							include "view/admin.php";
						} else if($_GET['page']=='feedback'){
							include "view/kotak_saran.php";
						}
					?>
				</div>
			</div>
			<a class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<?php require "../controller/ctAdmin.php"; ?>
		<script src="../../../assets/js/bootstrap.min.js"></script>
		<script src="../../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="../../../assets/js/apps.min.js"></script>
		<!-- ================== END PAGE LEVEL JS ================== -->
		<script src="../../../assets/js/app.js"></script>
	</body>
</html>