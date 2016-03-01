<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	function showModal(isiPesan){
		$("#idPesanModal").html(isiPesan);
		$("#btnModal").click();
	}
	function loadGuru(){
		$.ajax({
			url: '../model/loadGuru.php',
			data: {},
			success: function(data){
				$("#listSiswa").html(data);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	loadGuru();
	function loadPreview(id){
		$.ajax({
			url: '../model/loadPreviewGuru.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#previewGuru").html(data);
			},
			error: function(xhr){
				showModal("Gagal");
			}
		});
	}
	function loadFormUpdateGuru(id){
		$.ajax({
			url: '../model/loadFormUpdateGuru.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#updateGuru").html(data);
				$("#idNya").val(id);
				// showModal(id);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	function formAddGuru(){
		$.ajax({
			url: '../model/formAddGuru.php',
			data: {},
			success: function(data){
				$("#addGuru").html(data);
			},
			error: function(xhr){
				showModal("Gagal load form");
			}
		});
	}
	function updateGuru(id){
		$.ajax({
			url: '../model/updateGuru.php',
			type: 'post',
			data: {
				id: $("#idNya").val(),
				nip: $("#nipnya").val(),
				nama: $("#namanya").val(),
				tl: $("#tempatnya").val(),
				tgl: $("#tanggalnya").val(),
				agama: $("#agamanya").val(),
				alamat: $("#alamatnya").val(),
				gol: $("#goldarnya").val()
			},
			success: function(data){
				showModal("Berhasil update data !");
				$("#pnlUpdt").hide('slow', function(){
					loadGuru();
					$("#pnlData").show('slow');
				});
			},
			error: function(xhr){
				showModal("Gagal update data !");
			}
		});
	}
	function loadHapusGuru(id,x){
		$.ajax({
			url: '../model/loadHapusGuru.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				loadGuru();
				showModal("Berhasil hapus data "+x+" !");
			},
			error: function(xhr){
				showModal("Gagal hapus data");
			}
		});
	}
	function insertGuru(){
		$.ajax({
			url: '../model/insertGuru.php',
			data: {
				nip: $("#niptambahnya").val(),
				nama: $("#namatambahnya").val(),
				tl: $("#tempattambahnya").val(),
				tgl: $("#tanggaltambahnya").val(),
				agama: $("#agamatambahnya").val(),
				alamat: $("#alamattambahnya").val(),
				email: $("#emailtambahnya").val(),
				gol: $("#goldartambahnya").val()
			},
			success: function(data){
				$("#pnlAdd").hide('slow', function(){
					loadGuru();
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
		loadFormUpdateGuru(id);
		keForm();
	}
	function btn_del(id,x){
		loadHapusGuru(id);
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

	$("#btnUpdt").click(function(){
		updateGuru();
		// showModal(id);
	});
	$("#btnAdd").click(function() {
		insertGuru();
	});
	$("#btnAddGuru").click(function(event) {
		$("#pnlData").slideUp('slow', function() {
			$("#pnlAdd").slideDown('fast');
			formAddGuru();
		});
	});
</script>