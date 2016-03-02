<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	function showModal(isiPesan){
		$("#idPesanModal").html(isiPesan);
		$("#btnModal").click();
	}
	function loadGaleri(){
		$.ajax({
			url: '../model/loadGaleri.php',
			data: {},
			success: function(data){
				$("#listGaleri").html(data);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	loadGaleri();
	function formAddGaleri(){
		$.ajax({
			url: '../model/formAddGaleri.php',
			data: {},
			success: function(data){
				$("#addGaleri").html(data);
			},
			error: function(xhr){
				showModal("Gagal load form");
			}
		});
	}
	function loadFormUpdateGaleri(id){
		$.ajax({
			url: '../model/loadFormUpdateGaleri.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#updateGaleri").html(data);
				$("#idnya").val(id)
				// showModal(id);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	function updateOnOff(id){
		if ($("#aktifnya"+id).attr('checked')) {
			$("#hasil"+id).html("off");
		} else {
			$("#hasil"+id).html("on");
		}
		updateAktif(id);
	}
	function updateAktif(id){
		$.ajax({
			url: '../model/updateOnoff.php',
			data: {
				id: id,
				hasil: $("#hasil"+id).html()
			},
			success: function(data){
				// showModal("Berh");
				loadGaleri();
				// document.location.reload(true);
			},
			error: function(xhr){
				showModal("Gagal");
			}
		});
	}
	function loadHapusGaleri(id){
		$.ajax({
			url: '../model/loadHapusGaleri.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				loadGaleri();
				// showModal("Berhasil hapus data !");
			},
			error: function(xhr){
				showModal("Gagal hapus data");
			}
		});
	}
	$("#btnAddGaleri").click(function(event) {
		$("#pnlData").slideUp('slow', function() {
			$("#pnlAdd").slideDown('fast');
			formAddGaleri();
		});
	});
	$("#btnBackFromAdd").click(function(event) {
		$("#pnlAdd").slideUp('slow', function() {
			$("#pnlData").slideDown('slow');
		});
	});
	$("#btnBackFromUpdt").click(function(){
		$("#pnlUpdt").slideUp('slow', function(){
			$("#pnlData").slideDown('slow');
		});
	});
	$("#btnAdd").click(function() {
		$("#formAdd").submit();
	});
	$("#btnUpdt").click(function(){
		$("#formUpdate").submit();
	});
	function keForm(){
		$("#pnlData").hide('slow', function(){
			$("#pnlAdd").hide('slow', function(){
				$("#pnlPrev").hide('slow', function(){
					$("#pnlUpdt").show('slow');
				});
			});
		});
	}
	function btn_del(id){
		loadHapusGaleri(id);
	}
	function btn_edit(id){
		loadFormUpdateGaleri(id);
		keForm();
	}
</script>