<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	function showModal(isiPesan){
		$("#idPesanModal").html(isiPesan);
		$("#btnModal").click();
	}
	function loadProduk(){
		$.ajax({
			url: '../model/loadProduk.php',
			data: {},
			success: function(data){
				$("#listProduk").html(data);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	loadProduk();
	function loadFormUpdateProduk(id){
		$.ajax({
			url: '../model/loadFormUpdateProduk.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#updateProduk").html(data);
				$("#idNya").val(id);
				// showModal(id);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}

	function btn_edit(id){
		// showModal(id);
		loadFormUpdateProduk(id);
		keForm();
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
	$("#btnBackFromUpdt").click(function(){
		$("#pnlUpdt").slideUp('slow', function(){
			$("#pnlData").slideDown('slow');
		});
	});
</script>