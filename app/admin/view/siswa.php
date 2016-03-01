<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Siswa</li>
		</ol>
	</div>
	<div class="col-lg-12">
		<div class="panel panel-primary" id="pnlData">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a id="btnAddSiswa" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<h4 class="panel-title">Data Siswa</h4>
			</div>
			<div class="panel-body">
			   <div id="listSiswa"></div>
			</div>
		</div>
	
		<div class="panel panel-primary" id="pnlPrev" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Preview Siswa</h4>
			</div>
			<div class="panel-body">
			   <div id="previewSiswa"></div>
			   <div align="center" class="col-lg-12">
			   		<button id="btnBackFromPrev" class="btn btn-md btn-default">Kembali</button>
			   </div>
			</div>
		</div>
	
		<div class="panel panel-primary" id="pnlUpdt" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Update Siswa</h4>
			</div>
			<div class="panel-body">
			   <div id="updateSiswa"></div>
			   <div align="center" class="col-lg-12">
			   		<button id="btnBackFromUpdt" class="btn btn-md btn-default">Kembali</button>
			   		<button id="btnUpdt" class="btn btn-md btn-success">Simpan</button>
			   </div>
			</div>
		</div>
	
		<div class="panel panel-primary" id="pnlAdd" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title">Tambah Data Siswa</h4>
			</div>
			<div class="panel-body">
			   <div id="addSiswa"></div>
			   <div align="center">
			   		<button id="btnBackFromAdd" class="btn btn-md btn-danger">Batal</button>
			   		<button id="btnAdd" class="btn btn-md btn-success">Simpan</button>
			   </div>
			</div>
		</div>
	</div>
</div>
<?php 
	require '../controller/ctSiswa.php';
	echo "<script src='../../../assets/plugins/datatables/jquery.dataTables.js'></script>
		<script src='../../../assets/plugins/datatables/dataTables.bootstrap.js'></script>";
	require 'formHelper/modal.php';
 ?>