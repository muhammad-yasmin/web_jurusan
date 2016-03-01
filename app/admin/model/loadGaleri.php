<style>
	.switch input {
	  display: none;
	}

	.switch i {
	  display: inline-block;
	  cursor: pointer;
	  padding-right: 25px;
	  transition: all ease 0.2s;
	  -webkit-transition: all ease 0.2s;
	  border-radius: 30px;
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
	}

	.switch i:before {
	  display: block;
	  content: '';
	  width: 30px;
	  height: 30px;
	  border-radius: 30px;
	  background: white;
	  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
	}

	.switch :checked + i {
	  padding-right: 0;
	  padding-left: 25px;
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #1c7ebb;
	}
	.switch.switch-info :checked + i {
	  -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	  -moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5), inset 0 0 50px #2ec1cc;
	}
</style>
<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_galeri = "SELECT * FROM galeri";
	$eks_galeri = mysql_query($q_galeri);
 ?>
 <table class="table table-bordered table-stripped table-hover" id="tblgaleri">
 	<thead>
 		<tr>
 			<th width="1%">Aktif</th>
 			<th width="6%">Caption</th>
 			<th width="10%">Deskripsi</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_galeri)) {
 				if ($array['aktif'] == "on") {
					$selected = "checked";
				} else {
					$selected = "";
				}
 				?>
				<tr>
					<td align="center">
						<label class="switch switch-info"><input onchange="updateOnOff(<?= $array['id']; ?>);" type="checkbox" id="aktifnya<?= $array['id']; ?>" <?= $selected; ?>><i></i>
							<p id="hasil<?= $array['id']; ?>" style="display: none;"></p>
						</label>
					</td>
					<td id="judul<?php echo $array['id']; ?>"><?php echo $array['capt']; ?></td>
					<td id="deskripsi<?php echo $array['id']; ?>"><?php echo $array['deskripsi']; ?></td>
					<td align="center">
						<a onclick="btn_edit(<?php echo $array['id']; ?>);" title="Edit"><i class="fa fa-edit"></i></a>
						<a onclick="btn_del(<?php echo $array['id']; ?>);" title="Hapus"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
 				<?php
 			$no++;
 			}
 		 ?>
 	</tbody>
 </table>
 <script>
 $(document).ready(function() {
 	$("#tblgaleri").dataTable();
 });
 </script>