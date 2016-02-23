<?php 
	//------------------------------------
	require '../../../config/connection.php';
	$con = new clsDb;
	$con->konek();
	//------------------------------------
	$q_siswa = "SELECT siswa_tabel.nis,siswa_tabel.nama_siswa,siswa_tabel.jenis_kelamin,bio_siswa.id_agama,
				siswa_tabel.kelas,siswa_tabel.password,bio_siswa.tl_siswa,bio_siswa.tgl_siswa,
				bio_siswa.alamat,bio_siswa.foto,bio_siswa.qr,agama.agama,goldar.nama_goldar,
				jurusan.nama_jurusan,siswa_tabel.id_siswa,th_pelajaran.th_pelajaran,dt_ayah.nama_ayah,dt_ibu.nama_ibu
				FROM siswa_tabel
				INNER JOIN bio_siswa ON siswa_tabel.id_siswa = bio_siswa.id_bio_siswa
				INNER JOIN agama ON agama.id = bio_siswa.id_agama
				INNER JOIN goldar ON goldar.id = bio_siswa.id_gol_darah
				INNER JOIN jurusan ON jurusan.id_jurusan = siswa_tabel.id_jurusan
				INNER JOIN th_pelajaran ON th_pelajaran.id_th_pelajaran = bio_siswa.id_th_ajaran
				INNER JOIN dt_ayah ON dt_ayah.id_ayah = siswa_tabel.id_siswa AND dt_ayah.agama_ayah = agama.id
				INNER JOIN dt_ibu ON dt_ibu.id_ibu = siswa_tabel.id_siswa AND dt_ibu.agama_ibu = agama.id";
	$eks_siswa = mysql_query($q_siswa);
 ?>
  <table class="table table-striped table-bordered table-hovered" id="tblSiswa">
 	<thead>
 		<tr>
 			<th width="3%">No</th>
 			<th width="5%">NIS</th>
 			<th width="20%">Nama</th>
 			<th width="10%">Tempat Lahir</th>
 			<th width="10%">Tanggal Lahir</th>
 			<th width="7%">Agama</th>
 			<th width="5%">Opsi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$no = 1;
 			while ($array = mysql_fetch_assoc($eks_siswa)) {
 				?>
				<tr>
					<td id="urut<?php echo $array['id_siswa']; ?>"><?php echo $no; ?></td>
					<td id="nis<?php echo $array['id_siswa']; ?>"><?php echo $array['nis']; ?></td>
					<td id="nama<?php echo $array['id_siswa']; ?>"><?php echo $array['nama_siswa']; ?></td>
					<td id="tl<?php echo $array['id_siswa']; ?>"><?php echo $array['tl_siswa']; ?></td>
					<td id="tgl<?php echo $array['id_siswa']; ?>"><?php echo $array['tgl_siswa']; ?></td>
					<td id="agama<?php echo $array['id_siswa']; ?>"><?php echo $array['agama']; ?></td>
					<td align="center">
						<a onclick="btn_prev(<?php echo $array['id_siswa']; ?>);" title="Lihat"><i class="fa fa-eye"></i> Lihat</a>
					</td>
				</tr>
 				<?php
 			$no++;
 			}
 		 ?>
 	</tbody>
 </table>