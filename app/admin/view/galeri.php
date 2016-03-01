<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Galeri</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="panel panel-inverse" id="pnlData">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a id="btnAddGaleri" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<h4 class="panel-title">Data Galeri</h4>
			</div>
			<div class="panel-body">
			   <div id="listGaleri"></div>
			</div>
		</div>
	
		<div class="panel panel-inverse" id="pnlPrev" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Preview Galeri</h4>
			</div>
			<div class="panel-body">
			   <div id="previewGaleri"></div>
			   <div align="center" class="col-lg-12">
			   		<button id="btnBackFromPrev" class="btn btn-md btn-default">Kembali</button>
			   </div>
			</div>
		</div>
	
		<div class="panel panel-inverse" id="pnlUpdt" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Update Galeri</h4>
			</div>
			<div class="panel-body">
			   <div id="updateGaleri"></div>
			   <div align="center" class="col-lg-12">
			   		<button id="btnBackFromUpdt" class="btn btn-md btn-default">Kembali</button>
			   		<button id="btnUpdt" class="btn btn-md btn-success">Simpan</button>
			   </div>
			</div>
		</div>
	
		<div class="panel panel-inverse" id="pnlAdd" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Tambah Data Galeri</h4>
			</div>
			<div class="panel-body">
			   <div id="addGaleri"></div>
			   <div align="center">
			   		<button id="btnBackFromAdd" class="btn btn-md btn-danger">Batal</button>
			   		<button id="btnAdd" class="btn btn-md btn-success">Simpan</button>
			   </div>
			</div>
		</div>
	</div>
</div>
<?php 
	require '../controller/galeri.controller.php';
	echo "<script src='../../../assets/plugins/datatables/jquery.dataTables.js'></script>
		<script src='../../../assets/plugins/datatables/dataTables.bootstrap.js'></script>";
	require 'formHelper/modal.php';
 ?>