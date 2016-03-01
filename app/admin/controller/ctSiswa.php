<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	function showModal(isiPesan){
		$("#idPesanModal").html(isiPesan);
		$("#btnModal").click();
	}
	function showModalHapus(isiPesan){
		$("#idPesanModalHapus").html(isiPesan);
		$("#btnModalHapus").click();
	}
	function loadSiswa(){
		$.ajax({
			url: '../model/loadSiswa.php',
			data: {},
			success: function(data){
				$("#listSiswa").html(data);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	loadSiswa();
	function loadFormUpdate(id){
		$.ajax({
			url: '../model/loadFormUpdate.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#updateSiswa").html(data);
				$("#idNya").val(id);
				// showModal(id);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	function loadPreview(id){
		$.ajax({
			url: '../model/loadPreview.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#previewSiswa").html(data);
			},
			error: function(xhr){
				showModal("Gagal");
			}
		});
	}
	function updateSiswa(id){
		$.ajax({
			url: '../model/updateSiswa.php',
			type: 'post',
			data: {
				id: $("#idNya").val(),
				nis: $("#nisnya").val(),
				nama: $("#namanya").val(),
				tl: $("#tempatnya").val(),
				tgl: $("#tanggalnya").val(),
				agama: $("#agamanya").val(),
				alamat: $("#alamatnya").val(),
				th: $("#thpelajarannya").val(),
				kelas: $("#kelasnya").val(),
				jurusan: $("#jurusannya").val(),
				gol: $("#goldarnya").val(),
				ayah: $("#ayahnya").val(),
				ibu: $("#ibunya").val()
			},
			success: function(data){
				showModal("Berhasil update data !");
				$("#pnlUpdt").hide('slow', function(){
					loadSiswa();
					$("#pnlData").show('slow');
				});
			},
			error: function(xhr){
				showModal("Gagal update data !");
			}
		});
	}
	function loadHapus(id){
		$.ajax({
			url: '../model/loadHapus.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				showModal(data);
				loadSiswa();
			},
			error: function(xhr){
				showModal("Gagal hapus data");
			}
		});
	}
	function formAddSiswa(){
		$.ajax({
			url: '../model/formAddSiswa.php',
			data: {},
			success: function(data){
				$("#addSiswa").html(data);
			},
			error: function(xhr){
				showModal("Gagal load form");
			}
		});
	}
	function insertSiswa(){
		$.ajax({
			url: '../model/insertSiswa.php',
			data: {
				nis: $("#nistambahnya").val(),
				nama: $("#namatambahnya").val(),
				tl: $("#tempattambahnya").val(),
				tgl: $("#tanggaltambahnya").val(),
				agama: $("#agamatambahnya").val(),
				alamat: $("#alamattambahnya").val(),
				tapel: $("#thpelajarantambahnya").val(),
				kelas: $("#kelastambahnya").val(),
				jurusan: $("#jurusantambahnya").val(),
				gol: $("#goldartambahnya").val(),
				ayah: $("#ayahtambahnya").val(),
				ibu: $("#ibutambahnya").val()
			},
			success: function(data){
				// showModal(data);
				$("#pnlAdd").hide('slow', function() {
					loadSiswa();
					$("#pnlData").show('slow');
				});
			},
			error: function(xhr){
				showModal("Gagal");
			}
		});
	}
	function btn_prev(id){
		// showModal(id);
		loadPreview(id);
		kePreview();
	}
	function btn_edit(id){
		// showModal(id);
		loadFormUpdate(id);
		keForm();
	}
	function btn_del(id){
		// showModal(id);
		// showModalHapus("Apakah anda yakin akan menghapus ?");
			loadHapus(id);
		// $("#btnModalYes").click(function(){
		// });
	}
	function kePreview(){
		$("#pnlUpdt").hide('slow', function(){
			$("#pnlData").hide('slow', function(){
				$("#pnlAdd").hide('slow', function(){
					$("#pnlPrev").show('slow');
				});
			});
		});
	}
	function keForm(){
		$("#pnlData").hide('slow', function(){
			$("#pnlAdd").hide('slow', function(){
				$("#pnlPrev").hide('slow', function(){
					$("#pnlUpdt").show('slow');
				});
			});
		});
	}
	$("#btnUpdt").click(function(){
		updateSiswa();
		// showModal(id);
	});
	$("#btnAdd").click(function() {
		insertSiswa();
	});
	$("#btnBackFromPrev").click(function(event) {
		$("#pnlPrev").slideUp('slow', function() {
			$("#pnlData").slideDown('slow');
		});
	});
	$("#btnBackFromUpdt").click(function(){
		$("#pnlUpdt").slideUp('slow', function(){
			$("#pnlData").slideDown('slow');
		});
	});
	$("#btnAddSiswa").click(function(event) {
		$("#pnlData").slideUp('slow', function() {
			$("#pnlAdd").slideDown('fast');
			formAddSiswa();
		});
	});
	$("#btnBackFromAdd").click(function(event) {
		$("#pnlAdd").slideUp('slow', function() {
			$("#pnlData").slideDown('slow');
		});
	});
</script>