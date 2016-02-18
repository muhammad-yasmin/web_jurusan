<?php require "model/ayah.php"; ?>
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Home</a></li>
			<li><a href="http://my21.io/web_jur/pages/siswa.php">Dashboard</a></li>
			<li class="active">Data Ayah</li>
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
				<h4 class="panel-title">Data Ayah</h4>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="model/updateAyah.php">
					<div class="form-group">
						<label class="col-md-2 control-label"></label>
						<div class="col-md-9">
							<input type="hidden" name="id_ayah" class="form-control" value="<?php echo $assoc['id_ayah']; ?>" readonly="on" placeholder="Id"  autocomplete="off"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Nama</label>
						<div class="col-md-9">
							<input type="text" name="nama" class="form-control" value="<?php echo $assoc['nama_ayah']; ?>" placeholder="Nama"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Pekerjaan</label>
						<div class="col-md-9">
							<input type="text" name="pekerjaan" class="form-control" value="<?php echo $assoc['pekerjaan_ayah']; ?>" placeholder="Pekerjaan"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Penghasilan</label>
						<div class="col-md-9">
							<input type="text" name="penghasilan" class="form-control" value="<?php echo $assoc['penghasilan_ayah']; ?>" placeholder="Penghasilan"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">No Telepon</label>
						<div class="col-md-9">
							<input type="text" name="notelp" class="form-control" value="<?php echo $assoc['no_telp_ayah']; ?>" placeholder="No. Telepon"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Agama</label>
						<div class="col-md-8">
							<select class="form-control" name='agama' id='agama' style="width:480px;">
								<option value="">-- Pilih Agama --</option>
								<?php
								$id_ay = $assoc['id_ayah'];
								$ayah_agama = mysql_query("SELECT dt_ayah.agama_ayah FROM dt_ayah WHERE id_ayah = '$id_ay'");
								$assoc_ayah = mysql_fetch_assoc($ayah_agama);
								$id_agama_ayah = $assoc_ayah['agama_ayah'];
								
								//------------------------------------------
								$agama = mysql_query("SELECT * FROM agama");
								$id = 1;
								while ($array = mysql_fetch_assoc($agama)) {
									if ($array['id'] == $id_agama_ayah) {
										
										$selected = "selected";
									} else {
										$selected = "";
									}
								?>
									<option value='<?php echo $id; ?>' <?php echo $selected; ?>><?php echo $array['agama']; ?></option>
								<?php
								$id++;
								}
							 ?>
							</select>
							<?php print_r($array); ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tempat Lahir</label>
						<div class="col-md-9">
							<input type="text" name="tempat_lhr" class="form-control" value="<?php echo $assoc['tempat_lhr_ayah']; ?>" placeholder="Tempat Lahir"  autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Tanggal Lahir</label>
						<div class="col-md-9">
							<input type="date" name="tgl_lhr" class="form-control" value="<?php echo $assoc['tgl_lhr_ayah']; ?>" placeholder="Tanggal Lahir"  autocomplete="off" />
						</div>
					</div>
					<div class="col-md-offset-2">
						<button type="submit" name="update" class="btn btn-sm btn-success">Simpan <i class="fa fa-save"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>