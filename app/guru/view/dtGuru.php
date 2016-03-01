<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="#">Dashboard</a></li>
			<li class="active">Data Diri</li>
		</ol>
	</div>
</div>
<div class="row">
	<!-- begin col-6 -->
	<div class="col-md-8" id="panel1">
		<!-- begin panel -->
		<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Data Diri</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="model/updateSiswa.php" method="post" enctype="multipart/form-data" target="">
					<div class="form-group">
						<label class="col-md-2 control-label">NIP</label>
						<div class="col-md-8">
							<input type="text" name="nisn" class="form-control" value="<?php echo $w['nip']; ?>" placeholder="Nomor Induk Siswa" readonly="on"  autocomplete="off"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Nama Lengkap</label>
						<div class="col-md-8">
							<input type="text" name="nama" class="form-control" value="<?php echo $w['nama']; ?>" placeholder="Nama Lengkap"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Alamat</label>
						<div class="col-md-8">
							<input type="text" name="j_kel" class="form-control" value="<?php echo $w['alamat']; ?>" placeholder="Jenis Kelamin" autocomplete="off"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Email</label>
						<div class="col-md-8">
							<input type="text" name="jurusan" class="form-control" value="<?php echo $w['email']; ?>" placeholder="Tempat Lahir"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Unggah Foto</label>
						<div class="col-md-8">
							<input type="file" name="image" class="form-control" id="uplImg"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-8">
							<button type="submit" name="update" class="btn btn-sm btn-success">Simpan <i class="fa fa-save"></i></button>
						</div>	
					</div>
				</form>
				<iframe src="#" id="iframe" name="iframe" frameborder="0" style="display:none;"></iframe>
			</div>
		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
	<!-- begin col-6 -->
	<div class="col-md-4" id="panel2">
		<!-- begin panel -->
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Foto & QR</h4>
			</div>
			
			<div class="panel-body">
				<div class="form-group">
					<div class="text-center">
						<?php echo "<img src='../../assets/img/siswa/$w[foto]' alt='' height='128' width='128' class='avatar img-circle' />" ?>
					</div>
				</div>
				<div class="form-group" style="margin-left:5px;">
					<?php echo $w['qr']; ?>
				</div>
			</div>

		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
</div>
<script src="../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>