<?php require "model/ibu.php"; ?>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/siswa.php">Dashboard</a></li>
			<li class="active">Data Ibu</li>
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
				<h4 class="panel-title">Data Ibu</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="model/updateIbu.php">	
					<div class="form-group">
						<label class="col-md-2 control-label"></label>
						<div class="col-md-9">
							<input type="hidden" name="id_ibu" class="form-control" value="<?php echo $assoc['id_ibu']; ?>" readonly="on" placeholder="Id" autocomplete="off" />
						</div>
					</div>			
					<div class="form-group">
						<label class="col-md-2 control-label">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama" class="form-control" value="<?php echo $assoc['nama_ibu']; ?>" placeholder="Nama"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Pekerjaan</label>
						<div class="col-md-9">
							<input type="text" name="pekerjaan" class="form-control" value="<?php echo $assoc['pekerjaan_ibu']; ?>" placeholder="Pekerjaan" autocomplete="off"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Penghasilan</label>
						<div class="col-md-9">
							<input type="text" name="penghasilan" class="form-control" value="<?php echo  $assoc['penghasilan_ibu']; ?>" placeholder="Penghasilan"  autocomplete="off"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">No Telepon</label>
						<div class="col-md-9">
							<input type="text" name="notelp" class="form-control" value="<?php echo $assoc['no_telp_ibu']; ?>" placeholder="No. Telepon" autocomplete="off"  />
						</div>
					</div>
					<!-- <div class="form-group">
						<label class="col-md-2 control-label">Agama</label>
						<div class="col-md-9">
							<input type="text" name="agama" class="form-control" value="<?php echo $assoc['agama_ibu']; ?>" placeholder="Agama" />
						</div>
					</div> -->
					<div class="form-group">
						<label class="col-md-2 control-label">Agama</label>
						<div class="col-md-8">
							<select class="form-control" name='agama' id='agama' style="width:480px;">
								<option value="">-- Pilih Agama --</option>
								<?php
								$id_ibu =  $assoc['id_ibu'];
								$ibu_agama = mysql_query("SELECT dt_ibu.agama_ibu FROM dt_ibu WHERE id_ibu = '$id_ibu'");
								$assoc_ibu = mysql_fetch_assoc($ibu_agama);
								$id_agama_ibu = $assoc_ibu['agama_ibu'];
								$nama_agama = mysql_query("SELECT * FROM agama");
								$id = 1;
								while ($array = mysql_fetch_assoc($nama_agama)) {
									if ($array['id'] == $id_agama_ibu) {
										$selected = "selected";
									} else {
										$selected = "";
									}
								?>
									<option value='<?php echo $id; ?>' <?php echo $selected; ?>> <?php echo $array['agama']; ?></option>
								<?php
								$id++;
								}
							 ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tempat Lahir</label>
						<div class="col-md-9">
							<input type="text" name="tempat_lhr" class="form-control" value="<?php echo $assoc['tempat_lhr_ibu']; ?>" placeholder="Tempat Lahir"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="date" name="tgl_lhr" class="form-control" value="<?php echo $assoc['tgl_lhr_ibu']; ?>" placeholder="Tanggal Lahir" autocomplete="off"  />
						</div>
					</div>
					<div class="col-md-offset-2">
						<button type="submit" name="update" class="btn btn-sm btn-success">Simpan <i class="fa fa-save"></i></button>
					</div>
				</form>
			</div>
		</div>
		<!-- end panel -->
	</div>
	<!-- end col-6 -->
	<!-- begin col-6 -->
	<!-- <div class="col-md-4" id="panel2">
		begin panel
		<div class="panel panel-inverse" data-sortable-id="form-stuff-2">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Input Sizes, Input Group</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="text-center">
						<img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
						<h6>Unggah foto baru</h6>
						<input type="file" class="form-control" value="No file" >
					</div>
				</div>
				<div class="form-group">
					<?php echo $assoc['qr']; ?>
				</div>
			</div>
		</div>
		end panel
	</div> -->
	<!-- end col-6 -->
</div>